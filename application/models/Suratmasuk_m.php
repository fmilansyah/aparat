<?php
	/**
	*
	*/
	class Suratmasuk_m extends CI_Model
	{

		public function getSurat()
		{
			$query = $this->db->get("surat_masuk");
			return $query->result_array();
		}

		public function tambahSurat($data)
		{
			return $this->db->insert("surat_masuk", $data);
		}

		public function editSurat($where, $data)
		{
			$this->db->where($where);
			$this->db->update("surat_masuk", $data);
		}

		public function hapusSurat($data)
		{
			$query = $this->db->delete('surat_masuk', $data);
			return $query;
		}

		public function belumDibaca()
		{
			$query = $this->db->get_where("surat_masuk", array("status_dibaca"=>"N"));
			return $query->result_array();
		}

		public function sudahDibaca($where)
		{
			$this->db->where($where);
			$this->db->update("surat_masuk", array('status_dibaca'=>'Y'));
		}

		public function detailSurat($where)
		{
			$query = $this->db->get_where("surat_masuk", $where);
			return $query->row_array();
		}

		public function jumlahBelumDibaca()
		{
			$this->db->like('status_dibaca', 'N');
			$this->db->from('surat_masuk');
			return $this->db->count_all_results();
		}

		public function jumlahSurat()
		{
			return $this->db->count_all_results('surat_masuk');
		}

	}
?>
