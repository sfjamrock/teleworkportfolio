<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery_model extends CI_Model {

	var $gallery_path;
	var $gallery_path_url;

	function __construct()
	{
		parent::__construct();
		$this->gallery_path = realpath(APPPATH .'../userDoc');
		$this->gallery_path_url =base_url().'userDoc/';
	
	}



	function do_upload(){


	$config =array(
		'allowed_types' => 'jpg|jpeg|gif|png|pdf|docx|txt',
		'upload_path' => $this->gallery_path,
		'max_size'=>2000
		);



		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
	

	
		$config =array(
		'source_image' => $image_data['full_path'],
		'new_image' => $this->gallery_path.'/default',
		'maintain_ration' => true,
		'width'=>150,
		'height'=>100
		);


		$this->load->library('image_lib',$config);
		$this->image_lib->resize();
	}

	function get_resource/images(){
	$files = scandir($this->gallery_path);
	$files = array_diff($files, array('.','..','default'));
	$resource/images=array();

	foreach($files as $file)
		$resource/images[]=array(
			'url'=>$this->gallery_path_url.$file,
			'thumb_url'=>$this->gallery_path_url.'default/'.$files,
		);
	return $resource/images;
	}



}

