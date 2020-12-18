<?php
class User_model extends CI_Model 
{
	/*Insert*/
	/*Insert*/
	function insert($data)
	{
          $this->db->insert('user',$data);
          return $this->db->insert_id();
	}
	
}