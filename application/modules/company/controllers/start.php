<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model','company_model', 'teleworkwizard/tp_model','users/user_model'));
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
			$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
			$data['account_details'] = $this->account_details_model->get_by_account_id($this->session->userdata('account_id'));
			$this->load->view('start', isset($data) ? $data : NULL);

		
		}
	 }
	function create()
	{
		$this->form_validation->set_rules(array(
			array('field'=>'cname', 'rules'=>'trim|required|min_length[2]|max_length[50]'),
			array('field'=>'caddress1', 'rules'=>'trim|required|min_length[2]|max_length[50]'),
			array('field'=>'caddress2',  'rules'=>'trim|max_length[5]'),
			array('field'=>'city',  'rules'=>'trim|required|min_length[2]|max_length[50]'),
			array('field'=>'state',  'rules'=>'trim|required|min_length[2]|max_length[50]'),
			array('field'=>'check',  'rules'=>'trim|required'),
			array('field'=>'zip', 'rules'=>'trim|required|min_length[5]'),
			array('field'=>'phone',  'rules'=>'trim|required|max_length[11]')
		));
		// Run form validation
		if ($this->form_validation->run() === TRUE) 
		{

			$cusername = preg_replace( '/\s+/', ' ', $this->input->post('cname') );
			// Create company
			$success = $this->company_model->create($cusername);

			if ($success === TRUE)
			{
				redirect('company/analytics');
			}
			else
			{
				redirect('company/start');
			}	

		}

	}	 
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */