<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("bagian_m");
	}

	public function tambah()
	{
		$data = array('nama_bagian' => $this->input->post('nama_bagian'), 'keterangan' => $this->input->post('keterangan'));
		$this->bagian_m->tambahBagian($data);
		echo "<script>alert('Berhasil : Bagian sudah ditambahkan!');history.go(-1);</script>";
	}

	public function edit()
	{
		$data = array('nama_bagian' => $this->input->post('nama_bagian'), 'keterangan' => $this->input->post('keterangan'));
		$where = array('id' => $this->input->post('id'));
		$this->bagian_m->editBagian($where, $data);
		echo "<script>alert('Berhasil : Bagian sudah diedit!');history.go(-1);</script>";
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->bagian_m->hapusBagian($where);
		echo "<script>alert('Berhasil : Surat sudah dihapus!');history.go(-1);</script>";
	}

}
