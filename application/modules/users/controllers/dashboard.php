<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

			$ipaddress = '209.183.238.119';
			$json = file_get_contents("http://freegeoip.net/json/$ipaddress");
			$data['location'] = json_decode($json);

			$userid=$this->session->userdata('account_id');
			$data['telework_tracker'] = $this->tp_model->get_by_id($userid);
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);
			$rows = $this->user_model->update_wall( $userid);
	     	$data['wall_dashboard'] = $rows ;
			$this->load->view('dashboard', isset($data) ? $data : NULL);
			
		}
	 }	
	 function update_status()
	 {
		 $this->form_validation->set_rules(array(
			array('field'=>'message_wall', 'rules'=>'trim')
		));
		 $message1 = $this->user_model->wall( $this->input->post('message_wall'),$this->input->post('loguser'),$this->input->post('pageuser'));
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