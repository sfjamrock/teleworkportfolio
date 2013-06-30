<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model {
	
	// --------------------------------------------------------------------
	function map_users()
	{
		$sql = "select user_id,latitude, longitude, city, state, date
				FROM telework_tracker WHERE date IN (
				SELECT MAX( date )
				FROM telework_tracker GROUP BY user_id
  				)  ORDER BY user_id ASC , date DESC";

	    $query = $this->db->query($sql);
		return $query->result();
	   
	}
}