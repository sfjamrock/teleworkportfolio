<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {


	function login($email, $password)
	 {

	   $this -> db -> select('user_id, random_id');
	   $this -> db -> from('users');
	   $this -> db -> where('email', $email);
	   $this -> db -> where('password', $password);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();

	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	 }
	}




/* End of file account_model.php */
/* Location: ./application/modules/account/models/account_model.php */