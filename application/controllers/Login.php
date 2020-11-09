<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('login_m');
		if ($this->session->userdata('hak')=="Admin") {
			redirect('admin');
		}
		if ($this->session->userdata('hak')=="Sekretaris") {
			redirect('sekretaris');
		}
		if ($this->session->userdata('hak')=="Manager") {
			redirect('manager');
		}
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function prosesLogin()
	{
		$data = array('id' => $this->input->post('id'), 'password' => $this->input->post('password'));
		$hasil = $this->login_m->cekLogin($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $set_sess) {
				$sess_data['id'] = $set_sess->id;
				$sess_data['nama_depan'] = $set_sess->nama_depan;
				$sess_data['nama_belakang'] = $set_sess->nama_belakang;
				$sess_data['hak'] = $set_sess->hak;
				$this->session->set_userdata($sess_data);
			}
			if ($sess_data['hak'] == "Admin") {
				redirect('admin');
			}
			elseif ($sess_data['hak'] == "Sekretaris") {
				redirect('sekretaris');
			}
			elseif ($sess_data['hak'] == "Manager") {
				redirect('manager');
			}
			else {
			echo "<script>alert('Gagal : Hak anda tidak ada!');history.go(-1);</script>";
		}
		}
		else {
			echo "<script>alert('Gagal : Periksa kembali Username dan Password!');history.go(-1);</script>";
		}
	}

}
