<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("suratmasuk_m");
		$this->load->model("suratkeluar_m");
		$this->load->model("bagian_m");
		$this->load->model("disposisi_m");
		if ($this->session->userdata('id')=="") {
            redirect('login');
        }
	}

	public function getNama()
	{
		$data['namauser'] = ucwords($this->session->userdata('nama_depan'))." ".ucwords($this->session->userdata('nama_belakang'));
		return $data['namauser'];
	}

	public function belumDibaca()
	{
		return $this->suratmasuk_m->belumDibaca();
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['nama'] = self::getNama();
		$data['belumdibaca'] = self::belumDibaca();
		$data['jumlahsurat'] = $this->suratmasuk_m->jumlahSurat();
		$data['jumlahdisposisi'] = $this->disposisi_m->jumlahDisposisi();
		$data['jumlahsuratkeluar'] = $this->suratkeluar_m->jumlahSurat();
		$data['jumlah'] = $this->suratmasuk_m->jumlahBelumDibaca();
		$this->load->view('manager/header', $data);
		$this->load->view('manager/dashboard');
		$this->load->view('manager/footer', $data);
	}

	public function detailSurat($no_agenda)
	{
		$noagenda = array("no_agenda" => $no_agenda);
		$this->suratmasuk_m->sudahDibaca($noagenda);
		$data['title'] = "Detail Surat";
		$data['nama'] = self::getNama();
		$noagenda = array("no_agenda"=>$no_agenda);
		$data['belumdibaca'] = self::belumDibaca();
		$data['detail'] = $this->suratmasuk_m->detailSurat($noagenda);
		$data['jumlah'] = $this->suratmasuk_m->jumlahBelumDibaca();
		$data['bagian'] = $this->bagian_m->getBagian();
		$this->load->view('manager/header', $data);
		$this->load->view('manager/detailsurat', $data);
		$this->load->view('manager/footer', $data);
	}

	public function suratMasuk()
	{
		$data['title'] = "Surat Masuk";
		$data['nama'] = self::getNama();
		$data['belumdibaca'] = self::belumDibaca();
		$data['jumlah'] = $this->suratmasuk_m->jumlahBelumDibaca();
		$data['datasurat'] = $this->suratmasuk_m->getSurat();
		$this->load->view('manager/header', $data);
		$this->load->view('manager/suratmasuk', $data);
		$this->load->view('manager/footer');
	}

	public function suratKeluar()
	{
		$data['title'] = "Surat Keluar";
		$data['nama'] = self::getNama();
		$data['belumdibaca'] = self::belumDibaca();
		$data['jumlah'] = $this->suratmasuk_m->jumlahBelumDibaca();
		$data['datasurat'] = $this->suratkeluar_m->getSurat();
		$this->load->view('manager/header', $data);
		$this->load->view('manager/suratkeluar', $data);
		$this->load->view('manager/footer');
	}

	public function disposisi()
	{
		$data['title'] = "Disposisi";
		$data['nama'] = self::getNama();
		$data['belumdibaca'] = self::belumDibaca();
		$data['jumlah'] = $this->suratmasuk_m->jumlahBelumDibaca();
		$data['disposisi'] = $this->disposisi_m->getDisposisi();
		$this->load->view('manager/header', $data);
		$this->load->view('manager/disposisi', $data);
		$this->load->view('manager/footer');
	}

	public function pdf($no_agenda)
	{
		$this->load->library("Pdf");
		$noagenda = array("no_agenda"=>$no_agenda);
		$data['detail'] = $this->suratmasuk_m->detailSurat($noagenda);
		$this->load->view('manager/detailsurat_pdf', $data);;
	}

}
