<?php date_default_timezone_set('America/New_York');?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_model extends CI_Model {

	function user_timesheet_lookup($cid,$start,$end)
	{
		$sql="Select distinct(timesheet.user_id) ,firstname, lastname
				FROM a3m_account_details
				join timesheet
				on timesheet.user_id = a3m_account_details.account_id 
                join location
				on location.location_id = timesheet.location_id
				where location.cid = $cid and clock_in between '$start' and '$end'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function location_user_lookup($cid,$start,$end)
	{
		$sql="SELECT distinct( timesheet.location_id), name, user_id, cid
			FROM timesheet
			join location
			on location.location_id = timesheet.location_id
      		join a3m_account_details
      		on a3m_account_details.account_id = timesheet.user_id
			where cid = $cid and clock_in between '$start' and '$end'
			ORDER BY clock_in ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function timesheet_lookup($cid,$start,$end)
	{
		$sql="SELECT user_id, timesheet.location_id, clock_in,clock_out, cid
			FROM timesheet
			join location
			on location.location_id = timesheet.location_id
			where cid = $cid and clock_in BETWEEN '$start' and '$end'
			ORDER BY clock_in ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function timesheet_user_lookup($cid,$start,$end)
	{
		$sql="Select distinct(timesheet.user_id) ,firstname, lastname,location.cid,location.location_id
				FROM a3m_account_details
				join timesheet
				on timesheet.user_id = a3m_account_details.account_id 
				join location
				on location.location_id=timesheet.location_id
				where location.cid = $cid and clock_in between '$start' and '$end'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function location_lookup($cid)
	{
		$sql="SELECT location_id, cid, name, address
			FROM  location 
		 	WHERE cid =$cid";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function manager_lookup($user_id)
	{
		$sql="SELECT * FROM company where manager_id=$user_id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function scheduler_date_lookup($cid)
	{
		$sql="Select distinct(DATE_FORMAT(clock_in,'%m /%d/ %Y')) as clock_in,firstname, lastname,  DATE_FORMAT(clock_out,'%T') as clock_out, timesheet.user_id 
				From timesheet
				Join location on location.location_id=timesheet.location_id
				Join a3m_account_details on timesheet.user_id = a3m_account_details.account_id
				where cid = $cid";
		$query = $this->db->query($sql);
		return $query->result();
	}

		function scheduler_user_lookup($cid)
	{
		$sql="Select distinct(DATE_FORMAT(clock_in,'%T')) as clock_in,firstname, lastname,  DATE_FORMAT(clock_out,'%T') as clock_out, timesheet.user_id 
				From timesheet
				Join location on location.location_id=timesheet.location_id
				Join a3m_account_details on timesheet.user_id = a3m_account_details.account_id
				where cid = $cid
				limit  1";
		$query = $this->db->query($sql);
		return $query->result();
	}


	function scheduler_lookup($cid)
	{
		$sql="Select distinct(DATE_FORMAT(clock_in,'%T')) as clock_in,firstname, lastname,  DATE_FORMAT(clock_out,'%T') as clock_out, timesheet.user_id 
				From timesheet
				Join location on location.location_id=timesheet.location_id
				Join a3m_account_details on timesheet.user_id = a3m_account_details.account_id
				where cid = $cid";
		$query = $this->db->query($sql);
		return $query->result();
	}
	

	function chart_day($cid)
	{
		$sql="SELECT count(Distinct telework_tracker.id) as count, DAYNAME(date) as Day 
				FROM telework_tracker 
				join telework_requests
				on telework_tracker.user_id=telework_requests.user_id
				where cid=$cid and user_status=1
				group by Day 
				ORDER BY Day";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function chart_city($cid)
	{
		$sql="SELECT count(Distinct telework_tracker.id) as count, city, state
				FROM telework_tracker 
				join telework_requests
				on telework_tracker.user_id=telework_requests.user_id
				where cid=$cid and user_status=1
				group by city
				ORDER BY city";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function enroll_count($cid)
	{
		$sql = "SELECT count(DISTINCT user_id) as count 
				FROM telework_requests 
				WHERE cid = $cid and user_status = 1";

	    $query = $this->db->query($sql);
		return $query->row();
	}
	function active_count($cid)
	{
		$sql = "select count(DISTINCT telework_tracker.user_id) as count
				from telework_tracker
				join telework_requests
				on telework_tracker.user_id=telework_requests.user_id
				where cid=$cid and user_status=1 and DATE(date) = DATE(NOW());";

	    $query = $this->db->query($sql);
		return $query->row();
	}


	function saving_lookup($cid)
	{
		return $this->db->get_where('business_saving_config', array('cid' => $cid))->row();
	}
	function track_count($cid)
	{
		$sql = "select count(DISTINCT id) as count
				from telework_tracker
				join telework_requests
				on telework_tracker.user_id=telework_requests.user_id
				where cid=$cid and user_status=1";

	    $query = $this->db->query($sql);
		return $query->row();
	}

	
	function map_users($cid)
	{
		$sql = "select timesheet.user_id,username, firstname, lastname,latitude, longitude,  location.name,picture, max(timesheet.created_date)
				FROM timesheet
				join telework_requests
				on  timesheet.user_id = telework_requests.user_id
        		join location
				on  timesheet.location_id = location.location_id 
				join a3m_account_details
				on  a3m_account_details.account_id = telework_requests.user_id 
				join a3m_account
				on  a3m_account.id = telework_requests.user_id 
				where telework_requests.cid = $cid and user_status = 1 and DATE( timesheet.created_date) = DATE(NOW())
				group by timesheet.user_id
				ORDER BY user_id ASC , timesheet.created_date DESC;";

	    $query = $this->db->query($sql);
		return $query->result();
	   
	}
	function reserve($cid)
	{
		$sql = "SELECT username, firstname, lastname, picture, DATE_FORMAT(reserved_date,'%b %d %Y') as date, office
				FROM reserve_space
				join telework_requests
				on  reserve_space.user_id = telework_requests.user_id 
				join a3m_account_details
				on  a3m_account_details.account_id = telework_requests.user_id
				join a3m_account
				on  a3m_account.id = telework_requests.user_id  
				where reserve_space.cid = $cid and status = 1 and DATE(reserved_date) = DATE(NOW()) 
				group by office";
	    $query = $this->db->query($sql);
		return $query->result();
	}

	function space($cid)
	{
		$sql = "SELECT * FROM space WHERE cid = $cid and status = 0";
	    $query = $this->db->query($sql);
		return $query->result();
	}

	function equipment_user_lookup($cid)
	{
		//look up company id using company username 
		$sql="SELECT equipment.user_id, firstname, lastname, picture,username  
			FROM `equipment` 
			join telework_requests
			on equipment.user_id=telework_requests.user_id 
			join a3m_account_details
			on equipment.user_id=a3m_account_details.account_id
			join a3m_account
			on equipment.user_id=a3m_account.id              
			WHERE cid=$cid and user_status =1
			group by equipment.user_id;";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function equipment_lookup($cid)
	{
		//look up company id using company username 
		$sql="SELECT equipment.user_id,`item`,`description`,`manufacturer`,`model`,`model_num`,`condition`,`appraised`,`value`,DATE_FORMAT(issue_date, '%m/%d/%Y') as date,`return_date`
			FROM `equipment` 
			join telework_requests
			on equipment.user_id=telework_requests.user_id 
			WHERE cid=$cid and user_status =1";
		$query = $this->db->query($sql);
		return $query->result();
	}


	function cid_lookup($cusername)
	{
		//look up company id using company username 
		$sql="SELECT cid FROM company where cusername like  '$cusername'";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function company_lookup($cid)
	{
		return $this->db->get_where('company', array('cid' => $cid))->row();
	}

	function join($userA, $userB)
	{
		// Add user to company teleworker requests list
		//userA is company
		//userB is user
		
		$this->db->insert('telework_requests', array(
			'cid' => $userA, 
			'user_id' => $userB,
			'user_status'=> 0,
			'submit_date'=> mdate('%Y-%m-%d %H:%i:%s', now())

		));
	}
	function accept($userA, $userB)
	{
		// enroll user into company teleworker list
		//userA is company
		//userB is user
		$this->db->update('telework_requests', array(
			'user_status'=> 1,
			'approve_date'=> mdate('%Y-%m-%d %H:%i:%s', now())

		), array(
			'user_id' => $userB, 
			'cid'=>$userA
		)); 
	}
	function reject($userA, $userB)
	{
		// remove user from company teleworker list
		//userA is company
		//userB is user
		$this->db->update('telework_requests', array(
			'user_status'=> 2,
			'deny_date'=> mdate('%Y-%m-%d %H:%i:%s', now())

		), array(
			'user_id' => $userB, 
			'cid'=>$userA
		)); 
	}


	function join_lookup($cid)
	{
		// Look up users that join a company telework program
		
		$sql = "SELECT user_id, username, firstname, lastname, city , state, picture, submit_date 
				FROM telework_requests JOIN a3m_account_details 
				ON a3m_account_details.account_id = telework_requests.user_id 
				JOIN a3m_account on a3m_account.id = telework_requests.user_id  
				WHERE cid = $cid and user_status = 0 group by user_id";

	    $query = $this->db->query($sql);
		return $query->result();
	}
	function enroll_lookup($cid)
	{
		// Look up users that join a company telework program
		
		$sql = "SELECT user_id, username, firstname, lastname, city , state, picture, submit_date 
				FROM telework_requests JOIN a3m_account_details 
				ON a3m_account_details.account_id = telework_requests.user_id 
				JOIN a3m_account on a3m_account.id = telework_requests.user_id  
				WHERE cid = $cid and user_status = 1 group by user_id";

	    $query = $this->db->query($sql);
		return $query->result();
	}
	function leader($cid)
	{
		// Look up users that are in the company telework program and are teleworking 

		$sql = "SELECT  count(DISTINCT telework_tracker.id) as count,telework_tracker.user_id, username, firstname, lastname, cid, user_status,picture, MAX( date ) as date 
				FROM telework_tracker
				join telework_requests
				on  telework_tracker.user_id = telework_requests.user_id 
				join a3m_account_details
				on  a3m_account_details.account_id = telework_requests.user_id
				join a3m_account
				on  a3m_account.id = telework_requests.user_id  
				where cid = $cid and user_status = 1 
				group by telework_tracker.user_id
				limit 10";

	    $query = $this->db->query($sql);
		return $query->result();
	}


	function create($cusername)
	{

		$query = $this->db->insert('company', array(
		'name'=> $this->input->post('cname'),
		'address1'=> $this->input->post('caddress1'),
		'address2'=> $this->input->post('caddress2'),
		'city'=> $this->input->post('city'),
		'state'=> $this->input->post('state'),
		'zip_code'=> $this->input->post('zip'),
		'phone'=> $this->input->post('phone'),
		'entity'=> $this->input->post('check'),
		'tm_id'=> $this->session->userdata('account_id'),
		'cusername'=> $cusername,
		'sign_up_date' => mdate('%Y-%m-%d %H:%i:%s', now())

		));
		
		if($query){

			return true;
		}else {

			return false;
		}

	}


	
}


/* End of file account_model.php */
/* Location: ./application/modules/account/models/account_model.php */