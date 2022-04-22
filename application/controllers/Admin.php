<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$data['title'] = 'Admin | Dashboard';
		$this->View_model->admin('dashboard/index', $data);
	}

	public function dashboard()
	{
		$data['buku'] = $this->Dashboard_model->getBuku();
		$data['pinjaman'] = $this->Dashboard_model->getPinjaman();
		$data['mahasiswa'] = $this->Dashboard_model->getMahasiswa();
		$data['petugas'] = $this->Dashboard_model->getPetugas();
		$data['title'] = 'Admin | Dashboard';
		$this->View_model->admin('dashboard/index', $data);
	}

	public function petugas()
	{
		$data['title'] = 'Admin | Petugas';
		$data['petugas'] = $this->Petugas_model->getAll();
		$this->View_model->admin('petugas/index', $data);
	}

	public function mahasiswa()
	{
		$data['title'] = 'Admin | Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAll();
		$this->View_model->admin('mahasiswa/index', $data);
	}

	public function buku()
	{
		$data['title'] = 'Admin | Buku';
		$data['buku'] = $this->Buku_model->getAll();
		$this->View_model->admin('buku/index', $data);
	}

	public function pinjaman()
	{
		$data['title'] = 'Admin | Pinjaman';
		$data['pinjaman'] = $this->Pinjaman_model->getAll();
		$this->View_model->admin('pinjaman/index', $data);
	}
}
