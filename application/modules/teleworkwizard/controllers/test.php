<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
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
$this->load->view('main');
	}	
	function carousel()
	{			
$this->load->view('carousel');
	}
function testboard()
	{			
$this->load->view('testboard');
	}
function aboutdash()
	{			
$this->load->view('aboutdash');
	}
function contact()
	{			
$this->load->view('contact');
	}

}