<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('petugas_m');
		if ($this->session->userdata('id')=="") {
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$this->load->view('admin/header', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function admin()
	{
		$data['title'] = "Admin";
		$data['daftaradmin'] = $this->petugas_m->hakAdmin()->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/admin', $data);
		$this->load->view('admin/footer');
	}

	public function sekretaris()
	{
		$data['title'] = "Sekretaris";
		$data['daftarsekretaris'] = $this->petugas_m->hakSekretaris()->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sekretaris', $data);
		$this->load->view('admin/footer');
	}

	public function manager()
	{
		$data['title'] = "Manager";
		$data['daftarmanager'] = $this->petugas_m->hakManager()->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/manager', $data);
		$this->load->view('admin/footer');
	}

	public function tambahPetugas()
	{
		$data = array('id' => $this->input->post('id'), 'nama_depan' => $this->input->post('nama_depan'), 'nama_belakang' => $this->input->post('nama_belakang'), 'password' => $this->input->post('password'), 'hak' => $this->input->post('hak'));
		$this->petugas_m->tambahPetugas($data);
		if ($data['hak'] == "Admin") {
			echo "<script>alert('Berhasil : Admin sudah ditambahkan!');history.go(-1);</script>";
		}
		elseif ($data['hak'] == "Sekretaris") {
			echo "<script>alert('Berhasil : Sekretaris sudah ditambahkan!');history.go(-1);</script>";
		}
		else {
			echo "<script>alert('Berhasil : Manager sudah ditambahkan!');history.go(-1);</script>";
		}
	}

	public function hapusPetugas($id, $hak)
	{
		$data = array('id' => $id);
		$this->petugas_m->hapusPetugas($data);
		if ($hak == "Admin") {
			echo "<script>alert('Berhasil : Admin sudah dihapus!');history.go(-1);</script>";
		}
		elseif ($hak == "Sekretaris") {
			echo "<script>alert('Berhasil : Sekretaris sudah dihapus!');history.go(-1);</script>";
		}
		else {
			echo "<script>alert('Berhasil : Manager sudah dihapus!');history.go(-1);</script>";
		}
	}

	public function editPetugas()
	{
		$data = array('nama_depan' => $this->input->post('nama_depan'), 'nama_belakang' => $this->input->post('nama_belakang'), 'password' => $this->input->post('password'), 'hak' => $this->input->post('hak'));
		$where = array('id' => $this->input->post('id'));
		$this->petugas_m->editPetugas($where, $data);
		if ($data['hak'] == "Admin") {
			redirect('admin/admin');
		}
		elseif ($data['hak'] == "Sekretaris") {
			redirect('admin/sekretaris');
		}
		else {
			redirect('admin/manager');
		}
	}

	public function keluar()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama_depan');
		$this->session->unset_userdata('nama_belakang');
		$this->session->unset_userdata('hak');
		$this->session->sess_destroy();
		redirect('login');
	}

}
