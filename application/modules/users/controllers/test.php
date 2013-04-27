<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'user_model', 'teleworkwizard/tp_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	 function index()
	 {
		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('sign_in/?continue='.urlencode(base_url().'dashboard'));
		}
		

		
		if ($this->authentication->is_signed_in())
		{
redirect('users/profile/lookup/'.$this->session->userdata('account_id'));
		}
		
	 }	
	function lookup()
	{
			if ($this->authentication->is_signed_in())
		{
			$user_id = $this->uri->segment(4,$this->session->userdata('account_id'));
			$data['account'] = $this->account_model->get_by_id($user_id);
			$data['telework_tracker'] = $this->tp_model->check_by_id($user_id);
			$data['account_details'] = $this->account_details_model->get_by_account_id($user_id);
			$rows = $this->user_model->update_wall( $user_id);
	     	$data['wall_dashboard'] = $rows ;
			$this->load->view('test', isset($data) ? $data : NULL);
		}
		else
		redirect('');

	} 

	function follow()
	{
	$this->user_model->follow($this->input->post('loguser'),$this->input->post('pageuser'));
	} 
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */