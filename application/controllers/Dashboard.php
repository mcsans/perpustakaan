<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		redirect('admin/dashboard');
	}
}
