<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model','teleworkwizard/tp_model','user_model', 'company/company_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
	 
	 function index()
	 {
		if ( ! $this->authentication->is_signed_in()) 
		{
			redirect('sign_in/?continue='.urlencode(base_url().'timesheet'));
		}
		

		if ($this->authentication->is_signed_in())
		{
		/*NEW UI DATA REQUIPMENT TEST -START AREA*/

			// get user_id and company_id start	
			$user_id=$this->session->userdata('account_id');
			$cid = $this->user_model->employer_lookup($user_id)->cid;
			// get user_id and company_id end 

			// get date range for timesheet start
			if (is_null($this->input->post('week')))
			$date = date('d-m-Y');
			elseif (isset($_POST["week"]))
			$date = $_POST["week"];
			else $date = date('d-m-Y');
			    // Assuming $date is in format DD-MM-YYYY
			    list($day, $month, $year) = explode("-", $date);
			
			    // Get the weekday of the given date
			    $wkday = date('l',mktime('0','0','0', $month, $day, $year));
			
			    switch($wkday) {
			        case 'Sunday': $numDays = 0; break; 
			        case 'Monday': $numDays = 1; break;
			        case 'Tuesday': $numDays = 2; break;
			        case 'Wednesday': $numDays = 3; break;
			        case 'Thursday': $numDays = 4; break;
			        case 'Friday': $numDays = 5; break;
			        case 'Saturday': $numDays = 6; break;
			  
			    }
			
			    // Timestamp of the monday for that week
			    $start = mktime('0','0','0', $month, $day-$numDays, $year);
			
			    $seconds_in_a_day = 86400;
			
			    // Get date for 7 days from Monday (inclusive)
			    for($i=0; $i<7; $i++)
			    {
			        $dates[$i] = date('Y-m-d',$start+($seconds_in_a_day*$i));
			    }
				$data['dates']=$dates;
			//get current date for timesheet end

			$start = $dates[0];
			$end   = $dates[6];

			$data['schedule'] = $this->user_model->user_schedule($user_id,$start,$end);

			$data['location_user'] = $this->company_model->location_user_lookup($cid,$start,$end);
			$data['product'] = $this->company_model->product_lookup($cid);
			$data['employer'] = $this->user_model->employer_lookup($user_id);
			$data['account'] = $this->account_model->get_by_id($user_id);
			$data['company'] = $this->company_model->company_lookup($cid);
			$data['account_details'] = $this->account_details_model->get_by_account_id($user_id);

			$this->load->view('schedule', isset($data) ? $data : NULL);
		}
		else
		redirect('');

	} 

	 


}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */