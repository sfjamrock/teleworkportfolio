<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	var $file;
	var $path;
	function __construct()
	{
		parent::__construct();
		$this->load->helper('file','directory');
		$this->path = "application"
				.DIRECTORY_SEPARATOR."modules"
				.DIRECTORY_SEPARATOR."userDoc"
				.DIRECTORY_SEPARATOR;
		$this->file = $this->path."hello.txt";
	
	}

	function index()
	{
		$this->load->view('telework_application');
		$this->load->model('Gallery_model');
		if ($this->input->post('upload'))
		{
		$this->Gallery_model->do_upload();
		}

$data['resource/images']=$this->Gallery_model->get_resource/images();

		

$this->load->view('document',$data);
		

	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */