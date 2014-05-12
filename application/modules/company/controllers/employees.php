<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employees extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'company_model', 'users/user_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	 
	 function index()
	 {

		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('sign_in/?continue='.urlencode(base_url().''));
		}	
		if ($this->authentication->is_signed_in())
		{
	
			// get user access rights to analytics start
			if (!$this->company_model->manager_lookup($this->session->userdata('account_id')))
			{
				redirect('sign_in/?continue='.urlencode(base_url().''));
			}

			// get user_id using username in url start 		
			$cusername = $this->uri->segment(1);
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end 
			$data['enroll'] = $this->company_model->enroll_lookup($cid);
			$data['enroll_count'] = $this->company_model->enroll_count($cid);
			$data['active_count'] = $this->company_model->active_count($cid);
			$data['company'] = $this->company_model->company_lookup($cid);
			$data['product'] = $this->company_model->product_lookup($cid);
			
			$this->load->view('employees', isset($data) ? $data : NULL);
		 }
	}

 	function add_employee()
	{		// Setup form validation
		$this->form_validation->set_error_delimiters('<span class="field_error">', '</span>');
		$this->form_validation->set_rules(array(
			array('field'=>'sign_up_firstname', 'label'=>'firstname', 'rules'=>'trim|required|alpha_dash|min_length[2]|max_length[25]'),
			array('field'=>'sign_up_lastname', 'label'=>'lastname', 'rules'=>'trim|required|alpha_dash|min_length[2]|max_length[25]'),
			array('field'=>'sign_up_password', 'label'=>'Password', 'rules'=>'trim|required|min_length[6]'),
			array('field'=>'sign_up_email', 'label'=>'Email', 'rules'=>'trim|required|valid_email|max_length[160]')
		));
		
		// Run form validation
		if ($this->form_validation->run() === TRUE) 
		{
			// Check if email already exist
			if ($this->email_check($this->input->post('sign_up_email')) === TRUE)
			{
				$data['sign_up_email_error'] = lang('sign_up_email_exist');
			}
			else 
			{
				$username1=$_POST['sign_up_firstname'].$_POST['sign_up_lastname'];
				$matched_usernames=$this->account_model->check_if_username_exists($username1);
				if(!empty($matched_usernames))
				{
					$username_array=(array)$matched_usernames;
					foreach($username_array as $u)
					{
						$username_list[$u->username]=$u->id;
					}
					//print_r($username_list);
					$count=1;
					$username=$username1;
					while(isset($username_list[$username]))
					{
						$username=$username1.$count;
						$count++;
					}
					
				}
				else
				{
					$username=$username1;
				}

				// Create user
			 	$user_id = $this->account_model->create( $this->input->post('sign_up_email'), $this->input->post('sign_up_password'),$username);
				
				// Add user details (auto detected country, language, timezone, city , state)
				$this->account_details_model->update($user_id);

	
				// get user_id using username in url start 		
				$cusername = $_POST["company"];
				$cid = $this->company_model->cid_lookup($cusername);
				$cid = $cid ['0']->cid;
				// get user_id using username in url end
		
				$this->company_model->join($cid,$user_id);
				//$this->session->set_flashdata('join', 'Thanks for applying, you will be notified once your application as been approve.');
				//$url = htmlspecialchars($_POST["company"]).'/employees';
				//redirect($url);
			}
		}
				$url = htmlspecialchars($_POST["company"]).'/employees';
				redirect($url);

	}

 	function reject()
	{
			// get user_id using username in url start 		
			$cusername = $_POST["company"];
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end

			// get user_id using username  		
			$username = $_POST["user"];
			$user_id = $this->user_model->userid_lookup($username);
			$user_id = $user_id ['0']->id;
			// get user_id using username in url end 

	
			$this->company_model->reject($cid,$user_id);
			$this->session->set_flashdata('enroll', 'User as been removed from telework program.');
			$url = htmlspecialchars($_POST["company"]).'/employees';
			redirect($url);
	}
	function email_check($email)
	{
		return $this->account_model->get_by_email($email) ? TRUE : FALSE;
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */