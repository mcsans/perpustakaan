<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( !$this->session->userdata('role_id') ) { 
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Kamu belum login !</div>');
			redirect('login'); 
		}
		if( $this->session->userdata('role_id') == 3 ) { redirect('home'); }
	}

	public function index()
	{
		redirect('admin/mahasiswa');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim|numeric|is_unique[t_mahasiswa.nim]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_mahasiswa.email]|is_unique[t_petugas.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'DAFTAR';
			$this->View_model->admin('mahasiswa/tambah', $data);
		} else {
			$this->Mahasiswa_model->tambah();
			$this->session->set_flashdata('notification', 'ditambakan');
			redirect('admin/mahasiswa');
		}
	}

	public function ubah($nim)
	{
		$mahasiswa = $this->Mahasiswa_model->getByNIM($nim);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		if( $mahasiswa['nim'] != $this->input->post('nim')) {
			$this->form_validation->set_rules('nim', 'NIM', 'required|trim|numeric|is_unique[t_mahasiswa.nim]');
		}
		if( $mahasiswa['email'] != $this->input->post('email')) {
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_mahasiswa.email]|is_unique[t_petugas.email]');
		}

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Ubah Data Mahasiswa';
			$data['mahasiswa'] = $mahasiswa;
			$this->View_model->admin('mahasiswa/ubah', $data);
		} else {
			$this->Mahasiswa_model->ubah($nim);
			$this->session->set_flashdata('notification', 'diubah');
			redirect('admin/mahasiswa');
		}
	}

	public function hapus($nim)
	{
		$this->Mahasiswa_model->hapus($nim);
		$this->session->set_flashdata('notification', 'dihapus');
		redirect('admin/mahasiswa');
	}
}
