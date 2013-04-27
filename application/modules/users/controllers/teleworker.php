<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teleworker extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'teleworkwizard/tp_model','user_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	 
	 function index()
	 {
		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('account/sign_in/?continue='.urlencode(base_url().'dashboard'));
		}
		

		
		if ($this->authentication->is_signed_in())
		{
			$account = $this->account_model->get_by_id($this->session->userdata('account_id'));
			redirect('teleworker/'.$account->username);	
		}
	 }	
	 /*
	 @Last Edited by: Nivesh Saharan
	 @Date: 12-04-2013
	 */
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
if( ! $this->tp_model->check_by_id($user_id))
{		
			$error = 'user has not done job evaluator';
			$this->session->set_flashdata('error',$error);
			redirect('profile/'.$this->uri->segment(2));
}
			$data['account'] = $this->account_model->get_by_id($user_id);
			$data['telework_tracker'] = $this->tp_model->get_by_id($user_id);
			$data['check'] = $this->user_model->userstats_lookup($user_id);
			$data['account_details'] = $this->account_details_model->get_by_account_id($user_id);
			
			$userstat = $this->user_model->get_stats_list2($user_id);
			$title = $this->user_model->get_stats_list($user_id);
			$title = $title['0']->job_title;
			$data['task'] = $this->user_model->get_description_task_list($title);
			
			$data['similar'] = $this->user_model->get_similar_user_occupation($title,$user_id);

			
			$task_ids=array_flip(explode(',',$userstat['0']->eligible_task_list));
			
			//creating the first array with matched
			foreach($data['task'] as $value)
			{
				if(isset($task_ids[$value->task_id]))
				{
			//first array is with the matched
					$data['first'][]=(array)$value;
				}
				else
				{
			//second array is with unmatched
					$data['second'][]=(array)$value;
				}
			}







			$this->load->view('teleworker', isset($data) ? $data : NULL);
		}
		else
		redirect('');

	} 
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */