<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {
		
	 function __construct()
	 {
	   parent::__construct();
		$this->load->config('account/account');
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
        $this->load->library(array('account/authentication','account/recaptcha', 'form_validation'));
		$this->load->model(array('main_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }

		       

 function index()
	 {
                    
		    /* connect to gmail */
		$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
		$username = 'tasks@teleworkportfolio.com';
		$password = 'sfjamhome';

		/* try to connect */
		$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());


		
		/* grab emails */
		$date = date ( "d M Y" );
		echo $date;
		$emails = imap_search($inbox, "SINCE \"$date\"",SE_UID);
		
		/* if emails are returned, cycle through each... */
		if($emails) 
		{
			
			/* begin output var */
			$output = '';
			
			
			/* for every email... */
			foreach($emails as $email_number) 
			{
				
				/* get information specific to this email */
				$overview = imap_fetch_overview($inbox,$email_number,0);
				$message = imap_fetchbody($inbox,$email_number,2);
			
				/* output the email header information */
				$output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
				$output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
				$output.= '<span class="from">'.$overview[0]->from.'</span>';
				$output.= '<span class="from">'.$overview[0]->to.'</span>';
				$output.= '<span class="date">on '.$overview[0]->date.'</span>';
				$output.= '<span class="UID"> '.$overview[0]->uid.'</span>';

				$output.= '</div>';
				$message = trim( utf8_encode( quoted_printable_decode($message)));
				$this->main_model->taskemail($overview[0]->subject,$overview[0]->from,$overview[0]->to,date("Y-m-d H:i:s",strtotime($overview[0]->date)),$message);

				/* output the email body*/
				$output.= '<div class="body">'.$message.'</div>'; 
			}
			
			echo $output;
				
		} 
		//sleep(90);
 		//return $this->index();
     }
}
