<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if( $this->session->userdata('role_id') == 1 ) { redirect('dashboard'); }
		if( $this->session->userdata('role_id') == 2 ) { redirect('dashboard'); }
		if( $this->session->userdata('role_id') == 3) { redirect('home'); }
	}

	public function index()
	{
		$this->Auth_model->registration();
	}
}
