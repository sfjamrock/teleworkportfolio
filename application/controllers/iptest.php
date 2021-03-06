<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iptest extends CI_Controller {


	 function __construct()
	 {
	   parent::__construct();
		$this->load->helper(array('language', 'url', 'form', 'account/ssl'));
		$this->load->config('account/account');
        $this->load->library(array('account/authentication', 'form_validation'));
		$this->load->model(array('account/account_model', 'account/account_details_model','main_model', 'company/company_model', 'users/user_model'));
		$this->load->language(array('general', 'account/account_profile'));
	 }
function index()
	{
	/*NEW UI DATA REQUIPMENT TEST -START AREA*/

			$cid = 22;
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
			$data['timesheet'] = $this->company_model->timesheet_lookup($cid,$start,$end);
			$data['timesheet_user'] = $this->company_model->timesheet_user_lookup($cid,$start,$end);
			$data['user_timesheet'] = $this->company_model->user_timesheet_lookup($cid,$start,$end);
			$data['location_user'] = $this->company_model->location_user_lookup($cid,$start,$end);
			$data['location_lookup'] = $this->company_model->location_lookup($cid);
			$data['scheduler'] = $this->company_model->scheduler_lookup($cid);
			$data['scheduler_date'] = $this->company_model->scheduler_date_lookup($cid);
			$data['scheduler_user'] = $this->company_model->scheduler_user_lookup($cid);

	/*NEW UI DATA REQUIPMENT TEST -END AREA*/


		$rows = $this->main_model->map_users();
	    $data['mapchallenge'] = $rows ;
		$this->load->view('test3', isset($data) ? $data : NULL);

	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */