<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( !$this->session->userdata('role_id') ) { 
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Kamu belum login !</div>');
			redirect('login'); 
		}
		if( $this->session->userdata('role_id') == 1 ) { redirect('dashboard'); }
		if( $this->session->userdata('role_id') == 2 ) { redirect('dashboard'); }
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['buku'] = $this->Buku_model->getAll();
		if( $this->input->post('keyword') ) {
            $data['buku'] = $this->Buku_model->getKeyword();
        }
		$this->View_model->user('home/index', $data);
	}

	public function buku($id)
	{
		

		$this->form_validation->set_rules('id_buku', 'Buku', 'required|trim|numeric');
		$this->form_validation->set_rules('nim_mahasiswa', 'NIM', 'required|trim|numeric');
		$this->form_validation->set_rules('durasi', 'Durasi', 'required|trim|numeric|greater_than[0]|less_than[31]', [
			'greater_than' => 'Durasi harus 1 hari atau lebih',
			'less_than' => 'Durasi tidak boleh lebih dari 30 hari'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Detail Buku';
			$data['buku'] = $this->Buku_model->getById($id);
			$data['stat'] = $this->Pinjaman_model->getByBuku($id, $this->session->userdata('id'));
			$this->View_model->user('home/buku', $data);
		} else {
			$this->Pinjaman_model->pinjam();
			$this->session->set_flashdata('notification', 'dipinjam');
			redirect('home');
		}
	}
}
