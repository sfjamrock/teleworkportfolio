<?php

class Sendmail extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->config('account/account');
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));

        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	
function index()
	{
		echo 'hello';
	}
}