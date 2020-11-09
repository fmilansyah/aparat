<?php
	/**
	* 
	*/
	class Login_m extends CI_Model
	{
		public function cekLogin($data)
		{
			$query = $this->db->get_where('petugas', $data);
			return $query;
		}
	}
?>