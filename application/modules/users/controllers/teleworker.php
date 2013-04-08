<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teleworker extends CI_Controller {

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
redirect('users/teleworker/lookup/'.$this->session->userdata('account_id'));		}
	 }	
	function lookup()
	{
			if ($this->authentication->is_signed_in())
		{
			$user_id = $this->uri->segment(4,$this->session->userdata('account_id'));
			$data['account'] = $this->account_model->get_by_id($user_id);
			$data['telework_tracker'] = $this->tp_model->get_by_id($user_id);
			$data['eligible_tracker'] = $this->tp_model->check_by_id($user_id);
			$data['account_details'] = $this->account_details_model->get_by_account_id($user_id);
			
			$userstat = $this->user_model->get_stats_list($user_id);
echo $this->db->last_query();


			echo $userstatlist = explode(",", $userstat[0] );
			/*
			foreach ($userstatlist as $v)convert
			{
			$data['task'] = $this->user_model->get_task_list($v);
			}
*/







			$this->load->view('teleworker', isset($data) ? $data : NULL);
		}
		else
		redirect('');

	} 
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */