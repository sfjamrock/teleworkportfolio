<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tp_model extends CI_Model {


function clock_in()
{
$data = array(
				'status' => $this->input->post('status'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'user_id' => $this->session->userdata('account_id'),
				'location_id' => $this->input->post('jobsite'),
				'clock_in' => mdate('%Y-%m-%d %H:%i:%s', now()),
				'created_date' => mdate('%Y-%m-%d %H:%i:%s', now())
				);
$query = $this->db->insert('timesheet',$data);
		
		if($query){
			return true;
		}else {
			return false;
		}
}


function GetAutocomplete($options = array())
    {
	
	    $this->db->select('*');
		$this->db->from('occupation_data');
	    $this->db->like('title', $options['keyword'], 'after');
   		$query = $this->db->get();
		return $query->result();

    }
function GetDescription($term)
{
		$sql = "select description from occupation_data where title = '$term'";
	    $query = $this->db->query($sql);
 		return $query->result();
}
function Check_if_user_checkin_today($user_id)
{
		$sql = "SELECT id FROM telework_tracker
				where user_id = $user_id and DATE(date) = DATE(NOW())";
	    $query = $this->db->query($sql);
 		return $query->result();
}

function GetTask($term)
{
		$sql = "SELECT task_id,task FROM occupation_data JOIN task_statements ON task_statements.onetsoc_code = occupation_data.onetsoc_code WHERE title LIKE '$term'";
	    $query = $this->db->query($sql);
 		return $query->result();
}
function self_tracker($a,$b,$c)
{
	$a=implode(",",$a);
	
	$data = array(
					'job_title'=> $this->input->post('title'),
					'eligible_task_list' => $a,
					'eligible_num' => $b,
					'non_eligible_num' => $c,
					'user_id' => $this->session->userdata('account_id'),
					'date' => mdate('%Y-%m-%d %H:%i:%s', now())
					);
	$query = $this->db->insert('eligible_tracker',$data);
}
function start_tracker()
{
$data = array(

				'mile' => $this->input->post('mile'),
				'time' => $this->input->post('time'),
				'money' => $this->input->post('money'),
				'user_id' => $this->session->userdata('account_id'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'date' => mdate('%Y-%m-%d %H:%i:%s', now())
				);
$query = $this->db->insert('telework_tracker',$data);
		
		if($query){
			return true;
		}else {
			return false;
		}
}



function user_exist()
{
		$user_id = $this->session->userdata('account_id');
		$sql = "select * from telework_tracker where user_id = $user_id";
		$query = $this->db->query($sql);
 		if($query->num_rows()>0){
 			return false;
		}else{
			return true;
		}
}

function update_tracker()
{

		$user_id = $this->session->userdata('account_id');
		$sql = "select * from telework_tracker where user_id = $user_id";
		$query = $this->db->query($sql);
 		$row = $query->row();

		$sql2 = "select t.user_id, t.date, t.money, t.time, t.mile
		from telework_tracker t
		inner join (
		    select user_id, max(date) as MaxDate
		    from telework_tracker
		    group by user_id
		) tm on t.user_id = tm.user_id and t.date = tm.MaxDate
		where t.user_id =$user_id";
		$query2 = $this->db->query($sql2);
		$result = $query2->row();

		$data = array(
				'mile' => $row->mile + $result->mile,
				'time' => $row->time + $result->time,
				'money' => $row->money + $result->money,
				'user_id' => $this->session->userdata('account_id'),
				'date' => mdate('%Y-%m-%d %H:%i:%s', now())
				);
		$query = $this->db->insert('telework_tracker',$data);

 
}

	function get_by_id($account_id)
	{ 	
		$sql = "select t.user_id, t.date, t.money, t.time, t.mile
		from telework_tracker t
		inner join (
		    select user_id, max(date) as MaxDate
		    from telework_tracker
		    group by user_id
		) tm on t.user_id = tm.user_id and t.date = tm.MaxDate
		where t.user_id =$account_id";
		
		return $this->db->query($sql)->row();
	}
function check_by_id($account_id)
	{ 	
		$sql = "select *
		from eligible_tracker t
		inner join (
		    select user_id, max(date) as MaxDate
		    from eligible_tracker
		    group by user_id
		) tm on t.user_id = tm.user_id and t.date = tm.MaxDate
		where t.user_id =$account_id";
		
		return $this->db->query($sql)->row();
	}
 function qa($p)
{ 
	$data = array( 'long' =>$p);

	$query = $this->db->insert('qa',$data);
}

	
}