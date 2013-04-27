<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
function index()
	{
	if ($this->authentication->is_signed_in())
		{
			$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
		}
		$this->load->view('contact', isset($data) ? $data : NULL);
	}
function send_contact_us_info()
	{
		$this->form_validation->set_rules(array(
			array('field'=>'contact_us_firstname', 'label'=>'firstname', 'rules'=>'trim|required|alpha_dash|min_length[2]|max_length[25]'),
			array('field'=>'contact_us_lastname', 'label'=>'lastname', 'rules'=>'trim|required|alpha_dash|min_length[2]|max_length[25]'),
			array('field'=>'contact_us_comment', 'label'=>'comment', 'rules'=>'trim|required|min_length[6]'),
			array('field'=>'contact_us_email', 'label'=>'Email', 'rules'=>'trim|required|valid_email|max_length[160]')
		));
		if ($this->form_validation->run() === TRUE) 
		{
				$first = $this->input->post('contact_us_firstname');
				$last = $this->input->post('contact_us_lastname');
				$comment = $this->input->post('contact_us_comment');
			   //email sent from contact us page. 
			    $to =  "sfuller@teleworkportfolio.com"; 
			    $from = $this->input->post('contact_us_email') ;
			    $subject = "Someone has contacting Telework Portfolio" ;
			    //begin of HTML message 
			    $message =" <html> 
			  <body bgcolor='#DCEEFC'> 
			 $first $last
<br> 
			    
			      <br> $comment</body> 
			</html> ";
			   //end of message 
			    $headers  = "From: $from\r\n"; 
			    $headers .= "Content-type: text/html\r\n"; 
			
			    //options to send to cc+bcc 
			    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
			    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
			     
			    // now lets send the email. 
			    mail($to, $subject, $message, $headers); 
			 
			//response to contact us form.
				$first = $this->input->post('contact_us_firstname');
				$last = $this->input->post('contact_us_lastname');
				$comment = $this->input->post('contact_us_comment');
 
			    $to =  $this->input->post('contact_us_email') ; 
			    $from = "sfuller@teleworkportfolio.com";
			    $subject = "Thanks for contacting Telework Portfolio - where we make telework, work for you" ;
			    //begin of HTML message 
			    $message =" <html> 
			  <body bgcolor='#DCEEFC'> 
			     
			   Hi $first $last <br> <br>
			    
			      <br>
			Thanks for contacting us at Telework Portfolio, your message is important to us. <br><br>
			Someone will get back to you within 48 hours. Thanks for your time<br>
			
			Cheers<br>
			Telework Portfolio team
			
			  </body> 
			</html> ";
			   //end of message 
			    $headers  = "From: $from\r\n"; 
			    $headers .= "Content-type: text/html\r\n"; 
			
			    //options to send to cc+bcc 
			    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
			    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
			     
			    // now lets send the email. 
			    mail($to, $subject, $message, $headers); 
			
			$error = 'Your Message has been sent';
			$this->session->set_flashdata('error',$error);
			redirect('contact_us');

		}
		else
		{
			$error = 'There was an error please fill out form correctly before pressing send';
			$this->session->set_flashdata('error',$error);
			redirect('contact_us');
		}


	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */