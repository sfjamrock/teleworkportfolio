<?php
/*
 * Sign_in Controller
 */
class Sign_in extends CI_Controller {
	
function __construct()
	 {
	   parent::__construct();
	   $this->load->model('user_model','',TRUE);
	 }
	 
	 function index()
	 {

	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	 
	   $this->form_validation->set_rules('sign_in_username_email', 'sign_in_username_email', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('sign_in_password', 'sign_in_password', 'trim|required|xss_clean|callback_check_database');

	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	     redirect('', 'refresh');
	   }
	   else
	   {	
		 $random =$this->session->userdata('random_id');
	     //Go to private area
	     redirect('users/dashboard', 'refresh');
	   }
	 
	 }
	 
	 function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $email = $this->input->post('sign_in_username_email');
	 
	   //query the database
	   $result = $this->user_model->login($email, $password);
	 
	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
       {
	       $sess_array = array(
	         'user_id' => $row->user_id,
			'random_id'=> $row->random_id
			
	         
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	     return TRUE;
	   }
   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	 }
	}

/* End of file sign_in.php */
/* Location: ./application/modules/account/controllers/sign_in.php */