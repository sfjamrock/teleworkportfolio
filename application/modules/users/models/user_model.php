<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	
	// --------------------------------------------------------------------
	function employer_lookup($user_id)
	{
		$sql = "select name, cusername
				from company
				join telework_requests
				on telework_requests.cid=company.cid
				where user_status = 1 and user_id = $user_id
				group by user_id";

	    $query = $this->db->query($sql);
		return $query->row();

	}

	function get_stats_list($user_id)
	{
		$sql = "SELECT job_title  FROM eligible_tracker where user_id='$user_id'";
	    $query = $this->db->query($sql);
		return $query->result();
	}
function history ($user_id)
{
		$sql = "select user_id, money,time, mile, city, state,DATE_FORMAT(date,'%b %d %Y %h:%i %p') as date1
		        from telework_tracker
		        where user_id='$user_id'
        		order by date DESC
		        limit 20";
	    $query = $this->db->query($sql);
		return $query->result();

}
	function get_stats_list2($user_id)
	{
		$sql = "SELECT eligible_task_list  FROM eligible_tracker where user_id='$user_id'";
	    $query = $this->db->query($sql);
		return $query->result();
	}

	function get_task_list($task_id)
	{
		$sql = "SELECT onetsoc_code, task  FROM task_statements where task_id='$task_id'";
	    $query = $this->db->query($sql);
		return $query->result();
	}
	function get_description_task_list($title)
	{
		$sql = "SELECT title, description, task_id, task FROM occupation_data JOIN task_statements ON task_statements.onetsoc_code = occupation_data.onetsoc_code WHERE title = '$title' ";
	    $query = $this->db->query($sql);
		return $query->result();
	}
	function get_similar_user_occupation($title,$user_id)
	{
		$sql = "select username, account_id, picture, firstname, lastname, job_title, city, state 
from a3m_account_details  
JOIN eligible_tracker ON a3m_account_details.account_id = eligible_tracker.user_id
join a3m_account on a3m_account_details.account_id = a3m_account.id where job_title = '$title' and account_id !=$user_id limit 3";
	    $query = $this->db->query($sql);
		return $query->result();
	}



	/**
	 * Follow a user
	 *
	 * @access public
	 * @param string $userA logged in user
	 * @param string $userB user profile being followed
	 */
	function follow($userA, $userB)
	{
		// Added User to user following list
		
		$this->load->helper('date');
		$this->db->insert('follow', array(
			'userA' => $userA, 
			'userB' => $userB, 
			'follow_since' => mdate('%Y-%m-%d %H:%i:%s', now())
		));
	}
	
		/**
	 * Follow a wall
	 *
	 * @access public
	 * @param string $userA logged in user
	 * @param string $userB user wall
	 * @return int insert id
	 */
	function wall($message, $userA, $userB)
	{
		
		$this->load->helper('date');
		$this->db->insert('users_activity', array(
			'message' => $message, 
			'userA' => $userA, 
			'userB'=>$userB,
			'posted_on' => mdate('%Y-%m-%d %H:%i:%s', now())
		));

	     return $message;
	   
	}
			/*
	 * @access public
	 * @param string $userA logged in user
	 * @param string $userB user wall
	 * @return int insert id
	 */
	function update_wall($user_id)
	{
		
		$sql = "SELECT  posted_on,message, firstname, lastname, picture, userA,username
				FROM users_activity
				JOIN a3m_account
				ON a3m_account.id=users_activity.userA 
				join a3m_account_details 
				on  a3m_account_details.account_id=users_activity.userA 
				where users_activity.userA ='$user_id'
				 order by posted_on DESC
                ";
	    $query = $this->db->query($sql);
		return $query->result();
	   
	}
/*return all user that are following a user*/
	function follower($user_id)
	{
		$sql="SELECT firstname, lastname, picture, userA, username
FROM follow
JOIN a3m_account
ON a3m_account.id=follow.userA 
join a3m_account_details 
on  a3m_account_details.account_id=follow.userA
WHERE userB = $user_id";
		$query = $this->db->query($sql);
		return $query->result();
	} 

/*return all users a user is following*/
		function following($user_id)
	{
		$sql="SELECT firstname, lastname, picture, userA, username
FROM follow
JOIN a3m_account
ON a3m_account.id=follow.userB 
join a3m_account_details 
on  a3m_account_details.account_id=follow.userB
WHERE userA = $user_id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function userid_lookup($username)
	{
		$sql="SELECT id FROM a3m_account where username like '$username'";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function userstats_lookup($user_id)
	{
		$sql="SELECT count(id)as num, sum(mile) as mile, sum(time) as time, sum(money)as money FROM telework_tracker where user_id = $user_id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function userstats_chart($user_id)
	{
		$sql="SELECT count(user_id) as count, DAYNAME(date) as Day FROM telework_tracker where user_id = $user_id group by Day ORDER BY Day";
		$query = $this->db->query($sql);
		return $query->result();
	}

}


/* End of file account_model.php */
/* Location: ./application/modules/account/models/account_model.php */