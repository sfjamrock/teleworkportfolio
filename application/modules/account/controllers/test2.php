<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test2 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('test2');
		$this->load->library('aulib');        // load AU library
		echo $this->aulib->getLoginLink();    // show login/logoff
		echo $this->aulib->getLogoutLink();    // show login/logoff
		echo $this->aulib->getManagerLink();  // show back-end link (if need)
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */