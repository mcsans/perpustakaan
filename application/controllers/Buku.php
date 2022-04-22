<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

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
		redirect('admin/buku');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		$this->form_validation->set_rules('stok', 'Stok', 'required|trim');
		$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'numeric');
		$this->form_validation->set_rules('jumlah_halaman', 'Jumlah Halaman', 'required|trim|numeric');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'DAFTAR';
			$this->View_model->admin('buku/tambah', $data);
		} else {
			$this->Buku_model->tambah();
			$this->session->set_flashdata('notification', 'ditambakan');
			redirect('admin/buku');
		}
	}

	public function ubah($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		$this->form_validation->set_rules('stok', 'Stok', 'required|trim');
		$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'numeric');
		$this->form_validation->set_rules('jumlah_halaman', 'Jumlah Halaman', 'required|trim|numeric');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Ubah Data buku';
			$data['buku'] = $this->Buku_model->getById($id);
			$this->View_model->admin('buku/ubah', $data);
		} else {
			$this->Buku_model->ubah($id);
			$this->session->set_flashdata('notification', 'diubah');
			redirect('admin/buku');
		}
	}

	public function hapus($id)
	{
		$this->Buku_model->hapus($id);
		$this->session->set_flashdata('notification', 'dihapus');
		redirect('admin/buku');
	}
}
