<?php
/*
 * Connect_create Controller
 */
class Connect_create extends CI_Controller {
	
	/**
	 * Constructor
	 */
    function __construct()
    {
        parent::__construct();
		
		// Load the necessary stuff...
		$this->load->config('account/account');
		$this->load->helper(array('language', 'account/ssl', 'url'));
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model', 'account/account_facebook_model', 'account/account_twitter_model', 'account/account_openid_model'));
		$this->load->language(array('general', 'account/connect_third_party'));
	}
	
	/**
	 * Complete facebook's authentication process
	 *
	 * @access public
	 * @return void
	 */
	function index()
	{
		// Enable SSL?
		maintain_ssl($this->config->item("ssl_enabled"));
		
		// Redirect user to home if 'connect_create' session data doesn't exist
		if ( ! $this->session->userdata('connect_create')) redirect('');
		
		$data['connect_create'] = $this->session->userdata('connect_create');
		
		// Setup form validation
		$this->form_validation->set_error_delimiters('<span class="field_error">', '</span>');
		$this->form_validation->set_rules(array(
			array('field'=>'connect_create_username', 'label'=>'lang:connect_create_username', 'rules'=>'trim|required|alpha_numeric|min_length[2]|max_length[16]'),
			array('field'=>'connect_create_email', 'label'=>'lang:connect_create_email', 'rules'=>'trim|required|valid_email|max_length[160]')
		));
		
		// Run form validation
		if ($this->form_validation->run()) 
		{
			// Check if username already exist
			if ($this->username_check($this->input->post('connect_create_username')) === TRUE)
			{
				$data['connect_create_username_error'] = lang('connect_create_username_taken');
			}
			// Check if email already exist
			elseif ($this->email_check($this->input->post('connect_create_email')) === TRUE)
			{
				$data['connect_create_email_error'] = lang('connect_create_email_exist');
			}
			else
			{
				// Destroy 'connect_create' session data
				$this->session->unset_userdata('connect_create');
				
				// Create user
				$user_id = $this->account_model->create($this->input->post('connect_create_username'), $this->input->post('connect_create_email'));
				
				// Add user details
				$this->account_details_model->update($user_id, $data['connect_create'][1]);
//send welcome email email. 
    $to =  $this->input->post('connect_create_email') ;
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

				
				// Connect third party account to user
				switch($data['connect_create'][0]['provider'])
				{
					case 'facebook': $this->account_facebook_model->insert($user_id, $data['connect_create'][0]['provider_id']); break;
					case 'twitter': $this->account_twitter_model->insert($user_id, $data['connect_create'][0]['provider_id'], $data['connect_create'][0]['token'], $data['connect_create'][0]['secret']); break;
					case 'openid': $this->account_openid_model->insert($data['connect_create'][0]['provider_id'], $user_id); break;
				}
				
				// Run sign in routine
				$this->authentication->sign_in($user_id);
			}
		}
		
		$this->load->view('connect_create', isset($data) ? $data : NULL);
	}
	
	/**
	 * Check if a username exist
	 *
	 * @access public
	 * @param string
	 * @return bool
	 */
	function username_check($username)
	{
		return $this->account_model->get_by_username($username) ? TRUE : FALSE;
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


/* End of file connect_create.php */
/* Location: ./application/modules/account/controllers/connect_create.php */