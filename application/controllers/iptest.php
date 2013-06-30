<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iptest extends CI_Controller {


	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model','test_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
function index()
	{
		$rows = $this->test_model->map_users();
	    $data['mapchallenge'] = $rows ;
		$this->load->view('mapchallenge', isset($data) ? $data : NULL);

	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */