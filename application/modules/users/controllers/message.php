<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'teleworkwizard/tp_model','user_model'));
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
			$userid=$this->session->userdata('account_id');
			$data['check'] = $this->user_model->userstats_lookup($userid);
			$data['chart'] = $this->user_model->userstats_chart($userid);
			$data['telework_tracker'] = $this->tp_model->get_by_id($userid);
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);
			$this->load->view('message', isset($data) ? $data : NULL);
			
		}
	 }	
	}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */