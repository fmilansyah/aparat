<?php
	/**
	*
	*/
	class Petugas_m extends CI_Model
	{
		public function hakAdmin()
        {
            return $this->db->get_where('petugas', array('hak' => 'Admin'));
        }
		public function hakSekretaris()
        {
            return $this->db->get_where('petugas', array('hak' => 'Sekretaris'));
        }
        public function hakManager()
        {
            return $this->db->get_where('petugas', array('hak' => 'Manager'));
        }
		public function tambahPetugas($data)
		{
			$query = $this->db->insert('petugas', $data);
			return $query;
		}
		public function hapusPetugas($data)
		{
			$query = $this->db->delete('petugas', $data);
			return $query;
		}
		public function editPetugas($where, $data)
		{
			$this->db->where($where);
			$this->db->update('petugas', $data);
		}
	}
?>
