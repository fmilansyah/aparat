<?php
	/**
	*
	*/
	class Disposisi_m extends CI_Model
	{

		public function getDisposisi()
		{
			$query = $this->db->get("disposisi");
			return $query->result_array();
		}

		public function tambahDisposisi($data)
		{
			return $this->db->insert("disposisi", $data);
		}

		public function editDisposisi($where, $data)
		{
			$this->db->where($where);
			$this->db->update("disposisi", $data);
		}

		public function hapusDisposisi($data)
		{
			$query = $this->db->delete('disposisi', $data);
			return $query;
		}

		public function detailDisposisi($where)
		{
			$sql = 'SELECT disposisi.*, surat_masuk.* FROM disposisi, surat_masuk WHERE disposisi.no_agenda="'.$where.'" AND surat_masuk.no_agenda="'.$where.'"';
			return $this->db->query($sql);
		}

		public function jumlahDisposisi()
		{
			return $this->db->count_all_results('disposisi');
		}

	}
?>
