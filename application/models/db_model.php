<?php 
	class Db_model extends CI_Model
	{
		function get_product($p_name)
		{
			$query = $this->db->get_where('products', array('name' => $p_name));
			return $query->result();
		}
	}
