<?php

class Home extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->config('account/account');
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'main_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	function index()
	{
	if ($this->authentication->is_signed_in())
		{
			redirect('timesheet');
		}
		$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
		$data['group'] = $this->main_model->user_groups();
		$this->load->view('main', isset($data) ? $data : NULL);
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */