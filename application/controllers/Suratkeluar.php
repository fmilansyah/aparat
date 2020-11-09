<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratkeluar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("suratkeluar_m");
	}

	public function tambah()
	{
		$data = array('no_agenda' => $this->input->post('no_agenda'), 'id' => $this->input->post('id'), 'jenis_surat' => $this->input->post('jenis_surat'), 'tanggal_kirim' => $this->input->post('tanggal_kirim'), 'no_surat' => $this->input->post('no_surat'), 'pengirim' => $this->input->post('pengirim'), 'perihal' => $this->input->post('perihal'));
		$this->suratkeluar_m->tambahSurat($data);
		echo "<script>alert('Berhasil : Surat sudah ditambahkan!');history.go(-1);</script>";
	}

	public function edit()
	{
		$where =  array('no_agenda' => $this->input->post('no_agenda'));
		$data = array('id' => $this->input->post('id'), 'jenis_surat' => $this->input->post('jenis_surat'), 'tanggal_kirim' => $this->input->post('tanggal_kirim'), 'no_surat' => $this->input->post('no_surat'), 'pengirim' => $this->input->post('pengirim'), 'perihal' => $this->input->post('perihal'));
		$this->suratkeluar_m->editSurat($where, $data);
		echo "<script>alert('Berhasil : Surat sudah diedit!');history.go(-1);</script>";
	}

	public function hapus($no_agenda)
	{
		$data = array('no_agenda' => $no_agenda);
		$this->suratkeluar_m->hapusSurat($data);
		echo "<script>alert('Berhasil : Surat sudah dihapus!');history.go(-1);</script>";
	}

	public function pdf()
	{
		$this->load->library("Pdf");
		$data['datasurat'] = $this->suratkeluar_m->getSurat();
		$this->load->view("sekretaris/suratkeluar_pdf", $data);
	}

}
