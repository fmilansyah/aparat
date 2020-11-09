<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disposisi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('disposisi_m');
		$this->load->library('Pdf');
	}

    public function tambahDisposisi()
    {
        $data = array("no_disposisi" => $this->input->post("no_disposisi"), "no_agenda" => $this->input->post("no_agenda"), "no_surat" => $this->input->post("no_surat"), "kepada" => $this->input->post("kepada"), "keterangan" => $this->input->post("keterangan"), "status_surat" => $this->input->post("status_surat"), "tanggapan" => $this->input->post("tanggapan"));
        $this->disposisi_m->tambahDisposisi($data);
        echo "<script>alert('Berhasil : Disposisi sudah ditambahkan!');window.location.href='http://localhost/ujikom/manager/';</script>";
    }

	public function hapus($no_disposisi)
	{
		$data = array("no_disposisi"=>$no_disposisi);
		$this->disposisi_m->hapusDisposisi($data);
		echo "<script>alert('Berhasil : Disposisi sudah dihapus!');history.go(-1);</script>";
	}

	public function pdf()
	{
		$data['disposisi'] = $this->disposisi_m->getDisposisi();
		$this->load->view("sekretaris/disposisi_pdf", $data);
	}

}
