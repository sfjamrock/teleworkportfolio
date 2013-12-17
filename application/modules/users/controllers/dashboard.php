<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model','teleworkwizard/tp_model','user_model'));
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
			$data['employer'] = $this->user_model->employer_lookup($userid);
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);
			$rows = $this->user_model->update_wall( $userid);
	     	$data['wall_dashboard'] = $rows ;
			$rows = $this->user_model->task_lookup( $userid);
	     	$data['task'] = $rows ;
			$this->load->view('dashboard', isset($data) ? $data : NULL);
			
		}
	 }	
	 function update_status()
	 {
		 $this->form_validation->set_rules(array(
			array('field'=>'message_wall', 'rules'=>'trim')
		));
			// get user_id using username in url start 		
			$username = $this->input->post('pageuser');
			$user_id = $this->user_model->userid_lookup($username);
			$user_id = $user_id ['0']->id;
			// get user_id using username in url end 

		 $message1 = $this->user_model->wall( $this->input->post('message_wall'),$this->input->post('loguser'),$user_id);
		 echo $message1;
	 }
	 	 
	 function update_wall()
	 {
		 $rows = $this->user_model->update_wall( $this->session->userdata('account_id'));
	     $data['wall_dashboard'] = $rows ;
		 $this->load->view('wall_dashboard', isset($data) ? $data : NULL);
	 }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */