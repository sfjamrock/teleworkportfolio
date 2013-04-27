<?php
class Logout extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
	}

	function index()
	{
		// Run sign out routine
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	
		// Load sign out view
		redirect('');
	}
	
}


/* End of file sign_out.php */
