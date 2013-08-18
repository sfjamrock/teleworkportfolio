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
			redirect('sign_in/?continue='.urlencode(base_url().'dashboard'));
		}
		if ($this->authentication->is_signed_in())
		{

			//get user location info start
			//$ipaddress = '209.183.238.119';
			$ipaddress =$_SERVER["REMOTE_ADDR"];
			$json = file_get_contents("http://freegeoip.net/json/$ipaddress");
			$data['location'] = json_decode($json);
			//get user location info end

			$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));

			if( $this->tp_model->Check_if_user_checkin_today($this->session->userdata('account_id')))
			{		
						$error = 'You have already checkin today, Return tomorrow to record your telework saving ';
						$this->session->set_flashdata('error',$error);
						redirect('dashboard');
			}

			$get_result = $this->tp_model->user_exist();
			if(!$get_result){
			$this->load->view('savings', isset($data) ? $data : NULL);
			}
			else
			{
				$this->load->view('savings', isset($data) ? $data : NULL);
			}

		}
			

	}
	function saving_tracker()
	{
			$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));

			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules(array(
			array('field'=>'mile', 'label'=>'mile', 'rules'=>'trim|required|numeric|max_length[25]|xss_clean'),
			array('field'=>'time', 'label'=>'time', 'rules'=>'trim|required|numeric|max_length[20]|xss_clean'),
			array('field'=>'money', 'label'=>'money', 'rules'=>'trim|required|numeric|max_length[20]|xss_clean')
			));
		// Run form validation
		if ($this->form_validation->run() === TRUE) 
		{
			$this->tp_model->start_tracker();
			redirect('dashboard');
		}
		else
		{
			$this->load->view('savings', isset($data) ? $data : NULL);
		}

		

	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */