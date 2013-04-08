<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Follower extends CI_Controller {

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
			redirect('account/sign_in/?continue='.urlencode(base_url().'users/dashboard'));
		}
		

		
		if ($this->authentication->is_signed_in())
		{
redirect('users/follower/lookup/'.$this->session->userdata('account_id'));
		}
		
	 }	
	 	 function lookup()
	{
			if ($this->authentication->is_signed_in())
		{
			$ipaddress = '209.183.238.119';
			$json = file_get_contents("http://freegeoip.net/json/$ipaddress");
			$data['location'] = json_decode($json);

			$userid = $this->uri->segment(4,$this->session->userdata('account_id'));
			$data['telework_tracker'] = $this->tp_model->get_by_id($userid);
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);
			$rows = $this->user_model->follower( $userid);
	        $data['follower'] = $rows ;
		    $this->load->view('follow', isset($data) ? $data : NULL);

		}
		else
		redirect('');

	}
	 function follower_lookup()
	 {
		
		 $rows = $this->user_model->follower( $this->session->userdata('account_id'));
	     $data['follower'] = $rows ;
		 $this->load->view('follow', isset($data) ? $data : NULL);
	 }
	 	 
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */