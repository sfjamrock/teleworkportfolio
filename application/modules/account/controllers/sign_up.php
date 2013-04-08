<?php
/*
 * Sign_up Controller
 */
class Sign_up extends CI_Controller {
	
	/**
	 * Constructor
	 */
    function __construct()
    {
        parent::__construct();
		
		// Load the necessary stuff...
		$this->load->config('account/account');
		$this->load->helper(array('language', 'account/ssl', 'url'));
        $this->load->library(array('account/authentication', 'account/recaptcha', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model'));
		$this->load->language(array('general', 'account/sign_up', 'account/connect_third_party'));
	}
	
	/**
	 * Account sign up
	 *
	 * @access public
	 * @return void
	 */
	function index()
	{
		// Enable SSL?
		maintain_ssl($this->config->item("ssl_enabled"));
		
		// Redirect signed in users to membership area
		if ($this->authentication->is_signed_in()) redirect('users/dashboard');
		
		// Check recaptcha
		$recaptcha_result = $this->recaptcha->check();
		
		// Store recaptcha pass in session so that users only needs to complete captcha once
		if ($recaptcha_result === TRUE) $this->session->set_userdata('sign_up_recaptcha_pass', TRUE);
		
		// Setup form validation
		$this->form_validation->set_error_delimiters('<span class="field_error">', '</span>');
		$this->form_validation->set_rules(array(
			array('field'=>'sign_up_firstname', 'label'=>'firstname', 'rules'=>'trim|required|alpha_dash|min_length[2]|max_length[25]'),
			array('field'=>'sign_up_lastname', 'label'=>'lastname', 'rules'=>'trim|required|alpha_dash|min_length[2]|max_length[25]'),
			array('field'=>'sign_up_password', 'label'=>'Password', 'rules'=>'trim|required|min_length[6]'),
			array('field'=>'sign_up_email', 'label'=>'Email', 'rules'=>'trim|required|valid_email|max_length[160]')
		));
		
		// Run form validation
		if ($this->form_validation->run() === TRUE) 
		{
			// Check if email already exist
			if ($this->email_check($this->input->post('sign_up_email')) === TRUE)
			{
				$data['sign_up_email_error'] = lang('sign_up_email_exist');
			}
			else 
			{
				// Create user
				$user_id = $this->account_model->create( $this->input->post('sign_up_email'), $this->input->post('sign_up_password'));
				
				// Add user details (auto detected country, language, timezone)
				$this->account_details_model->update($user_id,$this->input->post('sign_up_firstname'), $this->input->post('sign_up_lastname'));
				
				// Auto sign in?
				if ($this->config->item("sign_up_auto_sign_in"))
				{
					// Run sign in routine
					$this->authentication->sign_in($user_id);
				}
				redirect('');
			}
		}
		
		// Load sign up view
		$this->load->view('sign_up', isset($data) ? $data : NULL);
	}
	
	/**
	 * Check if an email exist
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	function email_check($email)
	{
		return $this->account_model->get_by_email($email) ? TRUE : FALSE;
	}
	
}


/* End of file sign_up.php */
/* Location: ./application/modules/account/controllers/sign_up.php */