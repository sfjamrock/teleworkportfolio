<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'company_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	 
	 function index()
	 {
			// get user_id using username in url start 		
			$cusername = $this->uri->segment(1);
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end 
			// get user access rights to analytics start
	//		if (!$this->company_model->manager_lookup($this->session->userdata('account_id')))
		//	{
		//		redirect($cusername);
		//	}
			// get user access rights to analytics end

			$data['equipment'] = $this->company_model->equipment_lookup($cid);
			$data['equipment_user'] = $this->company_model->equipment_user_lookup($cid);
			$data['leader'] = $this->company_model->leader($cid);
			$data['enroll'] = $this->company_model->enroll_lookup($cid);
			$data['enroll_count'] = $this->company_model->enroll_count($cid);
			$data['active_count'] = $this->company_model->active_count($cid);
			$data['chart_day'] = $this->company_model->chart_day($cid);
			$data['chart_city'] = $this->company_model->chart_city($cid);
			$data['join'] = $this->company_model->join_lookup($cid);
			$data['company'] = $this->company_model->company_lookup($cid);
			$data['map'] = $this->company_model->map_users($cid);
		    $data['space'] = $this->company_model->space($cid);
		    $data['saving'] = $this->company_model->saving_lookup($cid);
		    $data['count'] = $this->company_model->track_count($cid);
			$data['reserve'] = $this->company_model->reserve($cid);

			//$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
			//$data['account_details'] = $this->account_details_model->get_by_account_id($this->session->userdata('account_id'));
			$this->load->view('profile', isset($data) ? $data : NULL);

		
		
	 }
	function lookup()
	{
		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('sign_in/?continue='.urlencode(base_url().'dashboard'));
		}

			if ($this->authentication->is_signed_in())
		{
			$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));

			// get user_id using username in url start 		
			$cusername = $this->uri->segment(1);
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end 

			
			$data['company'] = $this->company_model->company_lookup($cid);
			//$rows = $this->user_model->update_wall( $user_id);
	     	//$data['wall_dashboard'] = $rows ;
			$this->load->view('profile', isset($data) ? $data : NULL);
		}
		else
		redirect('');

	} 
	function join()
	{
			// get user_id using username in url start 		
			$cusername = $_POST["company"];
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end
	
			$this->company_model->join($cid,$this->session->userdata('account_id'));
			$this->session->set_flashdata('join', 'Thanks for applying, you will be notified once your application as been approve.');
			redirect($_POST["company"]);
	} 

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */