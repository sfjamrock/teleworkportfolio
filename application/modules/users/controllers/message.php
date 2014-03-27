<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'teleworkwizard/tp_model','user_model','message_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	 
	 function index()
	 {
		 $sender_id=@$_GET['user'];
		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('sign_in/?continue='.urlencode(base_url().'timesheet'));
		}
		

		
		if ($this->authentication->is_signed_in())
		{
			$file_name='';
			if((isset($_FILES['attached_file']))&&($_FILES['attached_file']['size']>0))
			{
				$file_name=time().'_'.str_replace(' ','_',$_FILES['attached_file']['name']);
				move_uploaded_file($_FILES['attached_file']['tmp_name'],'resource/uploads/'.$file_name);
			}
			
			
			$userid=$this->session->userdata('account_id');
			if((isset($_POST['content']))&&($_POST['content']!=''))
			{
				$this->message_model->send_message($_POST['content'],$file_name,$sender_id);
			}
			$data['check'] = $this->user_model->userstats_lookup($userid);
			$data['chart'] = $this->user_model->userstats_chart($userid);
			$data['telework_tracker'] = $this->tp_model->get_by_id($userid);
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);
			$data['conversation_by_id']=$this->message_model->conversation_by_id($sender_id);
			$data['conversations']=$this->message_model->conversations(); 
			$data['userid']=$userid;
			
			$this->load->view('message', isset($data) ? $data : NULL);
			
		}
	 }	
	 
	}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */