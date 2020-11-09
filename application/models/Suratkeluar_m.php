<?php
	/**
	*
	*/
	class Suratkeluar_m extends CI_Model
	{

		public function getSurat()
		{
			$query = $this->db->get("surat_keluar");
			return $query->result_array();
		}

		public function tambahSurat($data)
		{
			return $this->db->insert("surat_keluar", $data);
		}

		public function editSurat($where, $data)
		{
			$this->db->where($where);
			$this->db->update("surat_keluar", $data);
		}

		public function hapusSurat($data)
		{
			$query = $this->db->delete('surat_keluar', $data);
			return $query;
		}

		public function detailSurat($where)
		{
			$query = $this->db->get_where("surat_keluar", $where);
			return $query->row_array();
		}

		public function jumlahSurat()
		{
			return $this->db->count_all_results('surat_keluar');
		}

	}
?>
