<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'user_model', 'teleworkwizard/tp_model'));
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
			$account = $this->account_model->get_by_id($this->session->userdata('account_id'));
			redirect('profile/'.$account->username);
		}
		
	 }	
	function lookup()
	{
		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('sign_in/?continue='.urlencode(base_url().'dashboard'));
		}

			if ($this->authentication->is_signed_in())
		{

			// get user_id using username in url start 		
			$username = $this->uri->segment(2);
			$user_id = $this->user_model->userid_lookup($username);
			$user_id = $user_id ['0']->id;
			// get user_id using username in url end 
			$data['employer'] = $this->user_model->employer_lookup($user_id);
			$data['account'] = $this->account_model->get_by_id($user_id);
			$data['eligible_tracker'] = $this->tp_model->check_by_id($user_id);
			$data['account_details'] = $this->account_details_model->get_by_account_id($user_id);
	     	$data['wall_dashboard'] = $this->user_model->update_wall( $user_id);
			$this->load->view('profile', isset($data) ? $data : NULL);
		}
		else
		redirect('');

	} 

	function follow()
	{
			// get user_id using username in url start 		
			$username = $this->input->post('pageuser');
			$user_id = $this->user_model->userid_lookup($username);
			$user_id = $user_id ['0']->id;
			// get user_id using username in url end
echo $this->input->post('loguser'),$user_id;
	$this->user_model->follow($this->input->post('loguser'),$user_id);
	} 
	 
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */