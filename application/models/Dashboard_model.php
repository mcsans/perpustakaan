<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
	public function getBuku()
	{
		return $this->db->get('t_buku')->num_rows();
	}

	public function getPinjaman()
	{
		return $this->db->get('t_pinjaman')->num_rows();
	}

	public function getMahasiswa()
	{
		return $this->db->get('t_mahasiswa')->num_rows();
	}

	public function getPetugas()
	{
		return $this->db->get('t_petugas')->num_rows();
	}
}
