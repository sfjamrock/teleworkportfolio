<?php
/*
 * Sign_up Controller
 */
class Sign_up extends CI_Controller {
	
	/**
	 * Constructor
	 */
    function __construct()
    {
        parent::__construct();
		
		// Load the necessary stuff...
		$this->load->config('account/account');
		$this->load->helper(array('language', 'account/ssl', 'url'));
        $this->load->library(array('account/authentication', 'account/recaptcha', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'company/company_model'));
		$this->load->language(array('general', 'account/sign_up', 'account/connect_third_party'));
	}
	
	/**
	 * Account sign up
	 *
	 * @access public
	 * @return void
	 */
	function index()
	{
		// Enable SSL?
		maintain_ssl($this->config->item("ssl_enabled"));
		
		// Redirect signed in users to membership area
		if ($this->authentication->is_signed_in()) redirect('');
		
		// Check recaptcha
		$recaptcha_result = $this->recaptcha->check();
		
		// Store recaptcha pass in session so that users only needs to complete captcha once
		if ($recaptcha_result === TRUE) $this->session->set_userdata('sign_up_recaptcha_pass', TRUE);
		
		// Setup form validation
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
					
/*
 //send welcome email email. 
    $to =  $this->input->post('sign_up_email') ;
    $from = "sfuller@teleworkportfolio.com"; 
    $subject = "Welcome To Telework Portfolio - Where we make telework, work for you" ;
    //begin of HTML message 
$message =" 
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<style type='text/css'>
body{margin:0; padding:0; background:#cccccc;}
</style>
</head><body>
<table width='980' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#333333; background:#fff;'>
  <tr>
    <td><a href='http://www.teleworkportfolio.com' target='_blank'><img src='http://www.teleworkportfolio.com/resource/images/emal-header.png' alt='header' width='980' height='200' /></a></td>
  </tr>
  <tr>
    <td><table width='980' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td width='10'>&nbsp;</td>
        <td width='960'><table width='960' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td style='font-size:25px; font-weight:bold; color:#091e2f; background:#cccccc; padding:10px 0; text-align:center;'>Welcome to Telework Portfolio - Where we make telework, work for you</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Congratulation on join Telework Portfolio family. Here at telework portfolio we are all about creating an awesome group of professionals excited about the great possibility telework offers, from:<br /><br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Avoiding bumper to bumper traffic<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Saving money on work related expenses<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Being more productive at work<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Achieving a better work, life balance<br /><br />telework portfolio, is here to help you reach your telework goals. To help you get started here are some recommendations;<br /><br />
              <strong>Job Evaluation:</strong> Take some time to do a self telework evaluation of your job, using our job evaluator tools located under the options menu. A great place to start to see what you think about your telework prospects.<br />
              <br />
              <strong>Meet teleworkers:</strong> Meet other teleworker in your area or your field. You can search, view other teleworkers like you by visiting your Telework Statistics page.<br />
              <br />
              <strong>Start Telework Saving Tracking:</strong> Start tracking and measuring your telework saving to see if telework is right for you remember to check in and record your saving often to see the best results.<br />
              <br />Cheers<br />The Team at Telework Portfolio</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width='10'>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body></html>
 ";
   //end of message 
    $headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n"; 

    //options to send to cc+bcc 
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
    $headers .= "Bcc: sfuller@teleworkportfolio.com"; 
     
    // now lets send the email. 
    mail($to, $subject, $message, $headers); 

*/
				// Auto sign in?
				if ($this->config->item("sign_up_auto_sign_in"))
				{
					// Run sign in routine
					$this->authentication->sign_in($user_id);
				}
				redirect('');
			}
		}		
		// Load sign up view
		$this->load->view('sign_up', isset($data) ? $data : NULL);
	}
	
	/**
	 * Check if an email exist
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	function email_check($email)
	{
		return $this->account_model->get_by_email($email) ? TRUE : FALSE;
	}
	
}


/* End of file sign_up.php */
/* Location: ./application/modules/account/controllers/sign_up.php */