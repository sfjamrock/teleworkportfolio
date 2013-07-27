<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {
	
	/**
	 * Get account by id
	 *
	 * @access public
	 * @param string $account_id
	 * @return object account object
	 */
	function get_by_id($account_id)
	{
		return $this->db->get_where('a3m_account', array('id' => $account_id))->row();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get account by username
	 *
	 * @access public
	 * @param string $username
	 * @return object account object
	 */
	function get_by_username($username)
	{
		return $this->db->get_where('a3m_account', array('username' => $username))->row();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get account by email
	 *
	 * @access public
	 * @param string $email
	 * @return object account object
	 */
	function get_by_email($email)
	{
		return $this->db->get_where('a3m_account', array('email' => $email))->row();
	}


	//check if username is exists or not
	function check_if_username_exists($username)
	{
		return $this->db->get_where('a3m_account', array('username like' => '%'.$username.'%'))->result();
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get account by username or email
	 *
	 * @access public
	 * @param string $username_email
	 * @return object account object
	 */
	function get_by_username_email($username_email)
	{
		return $this->db->from('a3m_account')->where('username', $username_email)->or_where('email', $username_email)->get()->row();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Create an account
	 *
	 * @access public
	 * @param string $username
	 * @param string $hashed_password
	 * @return int insert id
	 */
	function create($email = NULL, $password = NULL,$username=NULL)
	{
		// Create password hash using phpass
		if ($password !== NULL)
		{
			$this->load->helper('account/phpass');
			$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
			$hashed_password = $hasher->HashPassword($password);
		}
		
		$this->load->helper('date');
		$this->db->insert('a3m_account', array(
			'email' => $email, 
			'password' => isset($hashed_password) ? $hashed_password : NULL, 
			'createdon' => mdate('%Y-%m-%d %H:%i:%s', now()),
			'username'=>$username
		));
		
		return $this->db->insert_id();
	}	// --------------------------------------------------------------------
	
	/**
	 * Change account username
	 *
	 * @access public
	 * @param int $account_id
	 * @param int $new_username
	 * @return void
	 */
	function update_username($account_id, $new_username)
	{
		$this->db->update('a3m_account', array('username' => $new_username), array('id' => $account_id));
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Change account email
	 *
	 * @access public
	 * @param int $account_id
	 * @param int $new_email
	 * @return void
	 */
	function update_email($account_id, $new_email)
	{
		$this->db->update('a3m_account', array('email' => $new_email), array('id' => $account_id));
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Change account password
	 *
	 * @access public
	 * @param int $account_id
	 * @param int $hashed_password
	 * @return void
	 */
	function update_password($account_id, $password_new)
	{
		$this->load->helper('account/phpass');
		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
		$new_hashed_password = $hasher->HashPassword($password_new);
		
		$this->db->update('a3m_account', array('password' => $new_hashed_password), array('id' => $account_id));
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Update account last signed in dateime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function update_last_signed_in_datetime($account_id)
	{
		$this->load->helper('date');
		
		$this->db->update('a3m_account', array('lastsignedinon' => mdate('%Y-%m-%d %H:%i:%s', now())), array('id' => $account_id));
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Update password reset sent datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return int password reset time
	 */
	function update_reset_sent_datetime($account_id)
	{
		$this->load->helper('date');
		
		$resetsenton = mdate('%Y-%m-%d %H:%i:%s', now());
		
		$this->db->update('a3m_account', array('resetsenton' => $resetsenton), array('id' => $account_id));
		
		return strtotime($resetsenton);
	}
	
	/**
	 * Remove password reset datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function remove_reset_sent_datetime($account_id)
	{
		$this->db->update('a3m_account', array('resetsenton' => NULL), array('id' => $account_id));
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Update account deleted datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function update_deleted_datetime($account_id)
	{
		$this->load->helper('date');
		
		$this->db->update('a3m_account', array('deletedon' => mdate('%Y-%m-%d %H:%i:%s', now())), array('id' => $account_id));
	}
	
	/**
	 * Remove account deleted datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function remove_deleted_datetime($account_id)
	{
		$this->db->update('a3m_account', array('deletedon' => NULL), array('id' => $account_id));
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Update account suspended datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function update_suspended_datetime($account_id)
	{
		$this->load->helper('date');
		
		$this->db->update('a3m_account', array('suspendedon' => mdate('%Y-%m-%d %H:%i:%s', now())), array('id' => $account_id));
	}
	
	/**
	 * Remove account suspended datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function remove_suspended_datetime($account_id)
	{
		$this->db->update('a3m_account', array('suspendedon' => NULL), array('id' => $account_id));
	}
	
	/*
	@Developer: Nivesh Saharan
	@Description: Model function for the Conversations
	@Date: 01-05-2013
	*/
	function conversations()
	{
		$userid=$this->session->userdata('account_id');
		$condition="select conversations.*, a3m_account.username, a3m_account.id as user_id from conversations,a3m_account where (conversations.sender_id='".$userid."' or conversations.receiver_id='".$userid."') and (a3m_account.id=conversations.sender_id or a3m_account.id=conversations.receiver_id) and a3m_account.id!='".$userid."'  order by date_time desc";
		//echo $this->db->num_rows($condition);die;
		return $messages=$this->db->query($condition)->result();
	}
	/*
	@Developer: Nivesh Saharan
	@Description: Model function for the Conversations by user id
	@Date: 01-05-2013
	*/
	function conversation_by_id($user_id)
	{
		$this->set_read($user_id);
		$userid=$this->session->userdata('account_id');
		$condition="select conversations.*, a3m_account.username, a3m_account.id as user_id from conversations,a3m_account where ((conversations.sender_id='".$userid."' and conversations.receiver_id='".$user_id."') or (conversations.sender_id='".$user_id."' and conversations.receiver_id='".$userid."')) and (a3m_account.id=conversations.sender_id or a3m_account.id=conversations.receiver_id) and a3m_account.id!='".$userid."'  order by date_time asc";
		//echo $this->db->num_rows($condition);die;
		return $messages=$this->db->query($condition)->result();
	}
	
	/*
	@Developer: Nivesh Saharan
	@Description: Set message as read
	@Date: 01-05-2013
	*/
	function set_read($user_id)
	{
		$condition="update conversations set is_unread='0' where sender_id='".$user_id."'";
		$this->db->query($condition);
	}
	
	/*
	@Developer: Nivesh Saharan
	@Description: Send message
	@Date: 01-05-2013
	*/
	function send_message($content,$file_name,$receiver_id)
	{
		$userid=$this->session->userdata('account_id');
		$condition="insert into conversations(sender_id,receiver_id,content,date_time,attached_file) values('".$userid."','".$receiver_id."','".$content."','".date('Y-m-d H:i:s')."','".$file_name."')";
		$this->db->query($condition);
	}
	
}


/* End of file account_model.php */
/* Location: ./application/modules/account/models/account_model.php */