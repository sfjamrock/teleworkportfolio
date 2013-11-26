<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {
	
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

	function user_groups()
	{
		$sql = "SELECT name, COUNT(user_id) AS members, picture , cusername
				FROM company 
				JOIN telework_requests
				ON telework_requests.cid=company.cid
				WHERE telework_requests.user_status = 1
				LIMIT 0, 20";

	    $query = $this->db->query($sql);
		return $query->result();
	}

}