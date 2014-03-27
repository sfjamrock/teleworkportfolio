<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clockin extends CI_Controller {
	
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
			redirect('sign_in/?continue='.urlencode(base_url().'timesheet'));
		}
		if ($this->authentication->is_signed_in())
		{


			
			$userid=$this->session->userdata('account_id');
			$cid = $this->tp_model->company_id($userid);
			$cid = $cid ['0']->cid;

			$data['location_lookup'] = $this->company_model->location_lookup($cid);
			$data['account'] = $this->account_model->get_by_id($userid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($userid);

			$this->load->view('clockin', isset($data) ? $data : NULL);
		}

		

	}

	function clockin()
	{


$emaildate = date("d/m/Y"); // set email date
$servertime = time ();

$emailtime = date("G:i",$servertime); // set email time

Welcome  :			echo $this->input->post('name'); 
company : 	echo $this->input->post('company');  
latitude:  	echo $this->input->post('latitude'); 
longitude:  echo $this->input->post('longitude');  
jobsite :  	echo $this->input->post('jobsite') ; 
id: 	echo $this->input->post('id')  ;
Date: 				echo date('m-d-Y ') ;
Clockin : 	echo date('H:i:s')  ;
Status:  	echo $this->input->post('status');  
Error:  	echo $this->input->post('zealot'); 


	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */