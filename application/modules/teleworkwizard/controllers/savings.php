<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Savings extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('file','directory');
		$this->load->library('upload');
		$this->load->helper(array('language', 'url', 'form', 'account/ssl','date'));
        $this->load->library(array('account/authentication'));
		$this->load->model(array('account/account_model','tp_model', 'account/account_details_model'));
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


			
			$userid=$this->session->userdata('account_id');
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);


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
	function clockin()
	{
			$userid=$this->session->userdata('account_id');
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);


			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules(array(
			array('field'=>'latitude', 'label'=>'latitude', 'rules'=>'trim|required|max_length[25]|xss_clean'),
			array('field'=>'longitude', 'label'=>'longitude', 'rules'=>'trim|required|max_length[20]|xss_clean')
			));
		 //Run form validation
		if ($this->form_validation->run() === TRUE) 
		{
			$this->tp_model->clock_in($this->input->post('latitude'),$this->input->post('longitude'));
			redirect('dashboard');
		}
		else
		{
			$latitude = '38.000001';
			$longitude = '-77.000001';
			$this->tp_model->clock_in($latitude,$longitude);
			redirect('dashboard');
		}
		

	}
	function clockout()
	{
			$userid=$this->session->userdata('account_id');
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);


			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules(array(
			array('field'=>'latitude_out', 'label'=>'latitude_out', 'rules'=>'trim|required|max_length[25]|xss_clean'),
			array('field'=>'longitude_out', 'label'=>'longitude_out', 'rules'=>'trim|required|max_length[20]|xss_clean')
			));
		 //Run form validation
		if ($this->form_validation->run() === TRUE) 
		{
			$this->tp_model->clock_out();
			redirect('dashboard');
		}
		else
		{
			redirect('teleworkwizard/clockout');
		}
		

	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */