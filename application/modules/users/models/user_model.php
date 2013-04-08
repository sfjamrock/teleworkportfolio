<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	
	// --------------------------------------------------------------------
	function get_stats_list($user_id)
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
		
		$sql = "SELECT  posted_on,message, firstname, lastname, picture, userA
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
		$sql="SELECT firstname, lastname, picture, userA
FROM follow
JOIN telework.a3m_account
ON telework.a3m_account.id=telework.follow.userA 
join telework.a3m_account_details 
on  telework.a3m_account_details.account_id=telework.follow.userA
WHERE userB = $user_id";
		$query = $this->db->query($sql);
		return $query->result();
	} 

/*return all users a user is following*/
		function following($user_id)
	{
		$sql="SELECT firstname, lastname, picture, userA
FROM follow
JOIN telework.a3m_account
ON telework.a3m_account.id=telework.follow.userB 
join telework.a3m_account_details 
on  telework.a3m_account_details.account_id=telework.follow.userB
WHERE userA = $user_id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function userid_lookup($username)
	{
$test=implode("",$username);
	$query = $this->db->get_where('a3m_account', array('username' => $test));
return $query->result();

	}
}


/* End of file account_model.php */
/* Location: ./application/modules/account/models/account_model.php */