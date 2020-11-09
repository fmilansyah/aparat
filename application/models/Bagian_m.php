<?php
	/**
	* 
	*/
	class Bagian_m extends CI_Model
	{
		
		public function getBagian()
		{
			$query = $this->db->get("kepala_bagian");
			return $query->result_array();
		}

		public function tambahBagian($data)
		{
			return $this->db->insert("kepala_bagian", $data);
		}

		public function editBagian($where, $data)
		{
			$this->db->where($where);
			$this->db->update("kepala_bagian", $data);
		}

		public function hapusBagian($data)
		{
			$query = $this->db->delete('kepala_bagian', $data);
			return $query;
		}

		public function jumlahBagian()
		{
			return $this->db->count_all_results('kepala_bagian');
		}

	}
?>