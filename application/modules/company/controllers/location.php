<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'company_model', 'users/user_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	 
	 function index()
	 {

		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('sign_in/?continue='.urlencode(base_url().'timesheet'));
		}	
		if ($this->authentication->is_signed_in())
		{
	
			// get user access rights to analytics start
			if (!$this->company_model->manager_lookup($this->session->userdata('account_id')))
			{
				redirect('sign_in/?continue='.urlencode(base_url().'timesheet'));
			}

			// get user_id using username in url start 		
			$cusername = $this->uri->segment(1);
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end 
			
			$data['location_lookup'] = $this->company_model->location_lookup($cid);
			$data['equipment'] = $this->company_model->equipment_lookup($cid);
			$data['equipment_user'] = $this->company_model->equipment_user_lookup($cid);
			$data['company'] = $this->company_model->company_lookup($cid);
		    $data['space'] = $this->company_model->space($cid);
			$data['reserve'] = $this->company_model->reserve($cid);
			$data['product'] = $this->company_model->product_lookup($cid);
			
			$this->load->view('location', isset($data) ? $data : NULL);
		 }
	}
	function add_location()
	{
			// get user_id using username in url start 		
			$cusername = $_POST["company"];
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end
			
			$this->company_model->add_location($cid);
			//$this->session->set_flashdata('join', 'Thanks for applying, you will be notified once your application as been approve.');
			$url = htmlspecialchars($_POST["company"]).'/location';      
			redirect($url);
	} 

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */