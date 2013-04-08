<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Savings extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('file','directory');
		$this->load->library('upload');
		$this->load->helper(array('language', 'url', 'form', 'account/ssl','date'));
        $this->load->library(array('account/authentication'));
		$this->load->model(array('account/account_model','tp_model'));
		$this->lang->load(array('general'));
	}

	function index()
	{
 		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('account/sign_in/?continue='.urlencode(base_url().'teleworkwizard'));
		}
		if ($this->authentication->is_signed_in())
		{
			$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
		}
		
/*		
		$get_result = $this->tp_model->user_exist();
			if(!$get_result){
				 $this->tp_model->update_tracker();
				redirect('myTIMS');
			}else{ */
				$this->load->view('savings_tracker', isset($data) ? $data : NULL);
			

	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */