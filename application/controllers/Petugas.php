<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

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
		redirect('admin/petugas');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim|numeric|is_unique[t_petugas.nip]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_petugas.email]|is_unique[t_mahasiswa.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'DAFTAR';
			$this->View_model->admin('petugas/tambah', $data);
		} else {
			$this->Petugas_model->tambah();
			$this->session->set_flashdata('notification', 'ditambakan');
			redirect('admin/petugas');
		}
	}

	public function ubah($nip)
	{
		$petugas = $this->Petugas_model->getByNIP($nip);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		if( $petugas['nip'] != $this->input->post('nip')) {
			$this->form_validation->set_rules('nip', 'NIP', 'required|trim|numeric|is_unique[t_petugas.nip]');
		}
		if( $petugas['email'] != $this->input->post('email')) {
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_petugas.email]|is_unique[t_mahasiswa.email]');
		}

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Ubah Data Petugas';
			$data['petugas'] = $petugas;
			$this->View_model->admin('petugas/ubah', $data);
		} else {
			$this->Petugas_model->ubah($nip);
			$this->session->set_flashdata('notification', 'diubah');
			redirect('admin/petugas');
		}
	}

	public function hapus($nip)
	{
		$this->Petugas_model->hapus($nip);
		$this->session->set_flashdata('notification', 'dihapus');
		redirect('admin/petugas');
	}
}
