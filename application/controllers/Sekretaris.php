<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekretaris extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->library("Pdf");
		$this->load->model("suratmasuk_m");
		$this->load->model("suratkeluar_m");
		$this->load->model("disposisi_m");
		$this->load->model("bagian_m");
		if ($this->session->userdata('id')=="") {
            redirect('login');
        }
	}

	public function getNama()
	{
		$data['namauser'] = ucwords($this->session->userdata('nama_depan'))." ".ucwords($this->session->userdata('nama_belakang'));
		return $data['namauser'];
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['nama'] = self::getNama();
		$data['jumlahsurat'] = $this->suratmasuk_m->jumlahSurat();
		$data['jumlahdisposisi'] = $this->disposisi_m->jumlahDisposisi();
		$data['jumlahsuratkeluar'] = $this->suratkeluar_m->jumlahSurat();
		$data['jumlahbagian'] = $this->bagian_m->jumlahBagian();
		$this->load->view('sekretaris/header', $data);
		$this->load->view('sekretaris/dashboard');
		$this->load->view('sekretaris/footer');
	}

	public function suratMasuk()
	{
		$data['title'] = "Surat Masuk";
		$data['nama'] = self::getNama();
		$data['datasurat'] = $this->suratmasuk_m->getSurat();
		$this->load->view('sekretaris/header', $data);
		$this->load->view('sekretaris/suratmasuk', $data);
		$this->load->view('sekretaris/footer');
	}

	public function suratKeluar()
	{
		$data['title'] = "Surat Keluar";
		$data['nama'] = self::getNama();
		$data['datasurat'] = $this->suratkeluar_m->getSurat();
		$this->load->view('sekretaris/header', $data);
		$this->load->view('sekretaris/suratkeluar', $data);
		$this->load->view('sekretaris/footer');
	}

	public function disposisi()
	{
		$data['title'] = "Disposisi";
		$data['nama'] = self::getNama();
		$data['disposisi'] = $this->disposisi_m->getDisposisi();
		$this->load->view('sekretaris/header', $data);
		$this->load->view('sekretaris/disposisi', $data);
		$this->load->view('sekretaris/footer');
	}

	public function bagian()
	{
		$data['title'] = "Bagian";
		$data['nama'] = self::getNama();
		$data['databagian'] = $this->bagian_m->getBagian();
		$this->load->view('sekretaris/header', $data);
		$this->load->view('sekretaris/bagian', $data);
		$this->load->view('sekretaris/footer');
	}

	public function detailSuratPdf($no_agenda)
	{
		$noagenda = array("no_agenda"=>$no_agenda);
		$data['detail'] = $this->suratmasuk_m->detailSurat($noagenda);
		$this->load->view('sekretaris/detailsurat_pdf', $data);
	}

	public function buktiDisposisi($no_agenda)
	{
		$data['detail'] = $this->disposisi_m->detailDisposisi($no_agenda)->row_array();
		$this->load->view('sekretaris/buktidisposisi_pdf', $data);
	}

	public function tandaTerima($no_agenda)
	{
		$noagenda = array("no_agenda"=>$no_agenda);
		$data['detail'] = $this->suratmasuk_m->detailSurat($noagenda);
		$this->load->view('sekretaris/tandaterima_pdf', $data);
	}

	public function detailSuratKeluarPdf($no_agenda)
	{
		$noagenda = array("no_agenda"=>$no_agenda);
		$data['detail'] = $this->suratkeluar_m->detailSurat($noagenda);
		$this->load->view('sekretaris/detailsuratkeluar_pdf', $data);
	}

}
