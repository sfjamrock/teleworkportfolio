<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {
	
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