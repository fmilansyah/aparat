<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratmasuk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("suratmasuk_m");
	}

	public function tambah()
	{
		$data = array('no_agenda' => $this->input->post('no_agenda'), 'id' => $this->input->post('id'), 'jenis_surat' => $this->input->post('jenis_surat'), 'tanggal_kirim' => $this->input->post('tanggal_kirim'), 'tanggal_terima' => $this->input->post('tanggal_terima'), 'no_surat' => $this->input->post('no_surat'), 'pengirim' => $this->input->post('pengirim'), 'perihal' => $this->input->post('perihal'));
		$this->suratmasuk_m->tambahSurat($data);
		echo "<script>alert('Berhasil : Surat sudah ditambahkan!');history.go(-1);</script>";
	}

	public function edit()
	{
		$where =  array('no_agenda' => $this->input->post('no_agenda'));
		$data = array('id' => $this->input->post('id'), 'jenis_surat' => $this->input->post('jenis_surat'), 'tanggal_kirim' => $this->input->post('tanggal_kirim'), 'tanggal_terima' => $this->input->post('tanggal_terima'), 'no_surat' => $this->input->post('no_surat'), 'pengirim' => $this->input->post('pengirim'), 'perihal' => $this->input->post('perihal'));
		$this->suratmasuk_m->editSurat($where, $data);
		echo "<script>alert('Berhasil : Surat sudah diedit!');history.go(-1);</script>";
	}

	public function hapus($no_agenda)
	{
		$data = array('no_agenda' => $no_agenda);
		$this->suratmasuk_m->hapusSurat($data);
		echo "<script>alert('Berhasil : Surat sudah dihapus!');history.go(-1);</script>";
	}

	public function pdf()
	{
		$this->load->library("Pdf");
		$data['datasurat'] = $this->suratmasuk_m->getSurat();
		$this->load->view("sekretaris/suratmasuk_pdf", $data);
	}

}
