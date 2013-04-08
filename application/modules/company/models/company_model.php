<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_model extends CI_Model {
	
		function enroll($userA, $userB)
	{
		// Add user to company teleworker requests list
		
		$this->db->insert('telework_requests', array(
			'userA' => $userA, 
			'userB' => $userB
		));
	}
	
}


/* End of file account_model.php */
/* Location: ./application/modules/account/models/account_model.php */