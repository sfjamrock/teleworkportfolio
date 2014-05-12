<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule extends CI_Controller {

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
			redirect('sign_in/?continue='.urlencode(base_url().'timesheet'));
		}
		
			// get user access rights to analytics start
			if (!$this->company_model->manager_lookup($this->session->userdata('account_id')))
			{
				redirect('sign_in/?continue='.urlencode(base_url().'timesheet'));
			}

			// get user_id using username in url start 		
			$cusername = $this->uri->segment(1);
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end 
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
			// get user access rights to analytics end
			$data['user_schedule'] = $this->company_model->user_schedule_lookup($cid,$start,$end);
			$data['schedule'] = $this->company_model->schedule_edit_lookup($cid,$start,$end);
			$data['location_schedule'] = $this->company_model->location_user_schedule($cid,$start,$end);


			$data['company'] = $this->company_model->company_lookup($cid);
			$data['product'] = $this->company_model->product_lookup($cid);
			$data['schedule_lookup'] = $this->company_model->schedule_lookup($cid);
			$data['location_lookup'] = $this->company_model->location_lookup($cid);
			


			$this->load->view('scheduler', isset($data) ? $data : NULL);

		
		
	 }
	function schedule_create()
	{

			// get user_id using username in url start 		
			$cusername = $_POST["company"];
			$cid = $this->company_model->cid_lookup($cusername);
			$cid = $cid ['0']->cid;
			// get user_id using username in url end 

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

			$lid = $this->input->post('location');
			$user_id = $this->input->post('user_id');
			
 			for ($a=0;$a<7;$a++)
			    {
					$edate = date('Y-m-d H:i:s', strtotime($dates[$a].' '.$this->input->post('end_'.$a)));
					$sdate = date('Y-m-d H:i:s', strtotime($dates[$a].' '.$this->input->post('start_'.$a)));
				
					$this->company_model->add_schedule($cid,$this->session->userdata('account_id'),$lid,$user_id,$sdate,$edate);					
			    }		
			
			$url = htmlspecialchars($_POST["company"]).'/schedule';
			redirect($url);
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */