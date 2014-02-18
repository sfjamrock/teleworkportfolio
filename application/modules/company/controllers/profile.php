<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

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
			redirect('sign_in/?continue='.urlencode(base_url().'dashboard'));
		}
		
			// get user access rights to analytics start
			if (!$this->company_model->manager_lookup($this->session->userdata('account_id')))
			{
				redirect('sign_in/?continue='.urlencode(base_url().'dashboard'));
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
			$data['timesheet'] = $this->company_model->timesheet_lookup($cid,$start,$end);
			$data['timesheet_user'] = $this->company_model->timesheet_user_lookup($cid,$start,$end);
			$data['user_timesheet'] = $this->company_model->user_timesheet_lookup($cid,$start,$end);
			$data['location_user'] = $this->company_model->location_user_lookup($cid,$start,$end);

			$data['location_lookup'] = $this->company_model->location_lookup($cid);
			$data['scheduler'] = $this->company_model->scheduler_lookup($cid);
			$data['scheduler_date'] = $this->company_model->scheduler_date_lookup($cid);
			$data['scheduler_user'] = $this->company_model->scheduler_user_lookup($cid);

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
			$data['product'] = $this->company_model->product_lookup($cid);
			

			$this->load->view('test', isset($data) ? $data : NULL);

		
		
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

	function accept()
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

	
			$this->company_model->accept($cid,$user_id);
			$this->session->set_flashdata('enroll', 'User as been enrolled into telework program.');
			$url = htmlspecialchars($_POST["company"]).'/analytics';
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
			$url = htmlspecialchars($_POST["company"]).'/analytics';
			redirect($url);
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
	function week() 
	{
	$cid =22;
	$data['user_schedule'] = $this->company_model->user_schedule_lookup($cid);

	$data['location_lookup'] = $this->company_model->location_lookup($cid);
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
			$user = array();
			$sun = array();
			$mon = array();
			$tue = array();
			$wed = array();
			$thu = array();
			$fri = array();
			$sat = array();


			//echo $this->input->post('location');
			//echo $this->input->post('user_id');
			print_r( $this->input->post('start_sun'));
			print_r( $this->input->post('start_mon'));
			print_r( $this->input->post('start_tue'));
			print_r( $this->input->post('start_wed'));
			print_r( $this->input->post('start_thu'));
			print_r( $this->input->post('start_fri'));
			print_r( $this->input->post('start_sat'));

			

			
			
			//$sun_start = $this->input->post('start_sun');
			
			

	$this->load->view('testcal', isset($data) ? $data : NULL);

			
	}


}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */