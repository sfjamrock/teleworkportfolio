<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teleworkwizard extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('file','directory');
		$this->load->library('upload');
		$this->load->helper(array('language', 'url', 'form', 'account/ssl','date'));
        $this->load->library(array('account/authentication'));
		$this->load->model(array('account/account_model','tp_model'));
		$this->lang->load(array('general'));
	}

	function index()
	{
 		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('account/sign_in/?continue='.urlencode(base_url().'teleworkwizard'));
		}
		if ($this->authentication->is_signed_in())
		{
			$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
		}
		
/*		
		$get_result = $this->tp_model->user_exist();
			if(!$get_result){
				 $this->tp_model->update_tracker();
				redirect('myTIMS');
			}else{ */
				$this->load->view('jobs', isset($data) ? $data : NULL);
			

	}

	function suggestions()
	{
		$this->load->model('tp_model');
		$term = $this->input->post('term',TRUE);
	
		if (strlen($term) < 1) break;
	
		$rows = $this->tp_model->GetAutocomplete(array('keyword' => $term));
	
		$title_array = array();
		foreach ($rows as $row){
			 array_push($title_array, $row->title); 
	}
		echo json_encode($title_array);		

	}
		function SelfEvaluation()
	{
		 		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('account/sign_in/?continue='.urlencode(base_url().'teleworkwizard/telework_calculator/start'));
		}
		
	
 		if ($this->authentication->is_signed_in())
		{
			$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
		}
				

		$this->form_validation->set_rules(array(
			array('field'=>'mile', 'label'=>'mile', 'rules'=>'trim|required|xss_clean'),
			array('field'=>'time', 'label'=>'time', 'rules'=>'trim|required|xss_clean'),
			array('field'=>'choice[]', 'label'=>'choice[]', 'rules'=>'trim|required|xss_clean'),
			array('field'=>'money', 'label'=>'money', 'rules'=>'trim|required|xss_clean')
		));

$a=array();
$b=0;
$c=0;
$a=$this->input->post('choice');
foreach ($this->input->post('choice') as $v)
{
	if ($v == 0)
	{
		++$c;
	}
	else
	{
		++$b;
	}


}

	// Run form validation

		if ($this->form_validation->run() == false) 
		{
				$this->load->view('telework_application', isset($data) ? $data : NULL);

		}
		else 
			{
	
			if($this->tp_model->self_tracker($a,$b,$c))
				{
				redirect('myTIMS');
				}
			else
				{
				$this->load->view('telework_application', isset($data) ? $data : NULL);
				}
										
		}
		
	}


	function GetJobEvaluation()
	{
	

		$this->load->model('tp_model');
		$term = $this->input->post('term',TRUE);
		$term = trim($term, " ");
		$rows = $this->tp_model->GetDescription($term);
		$row2 = $this->tp_model->GetTask($term);
		
		$task = array();
		$description = array();
		foreach ($rows as $row){
			 array_push($description, $row->description); 
	}
	foreach ($row2 as $row){
			 array_push($task, $row); 
	}

		echo json_encode( array("a" => $description, 
      "b" => $task));	
	}
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */