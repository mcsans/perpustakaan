<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman_model extends CI_Model {
	public function getAll()
	{
		return $this->db->get('t_pinjaman')->result_array();
	}

	public function get()
	{
		$id = $this->session->userdata('id');
		return $this->db->get_where('t_pinjaman', ['id' => $id])->row_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('t_pinjaman', ['id' => $id])->row_array();
	}
	
	public function getByBuku($id, $nim)
	{
		return $this->db->get_where('t_pinjaman', ['id_buku' => $id, 'nim_mahasiswa' => $nim, 'status_pengembalian' => 'belum'])->row_array();
	}
	
	public function denda($id)
	{
		$pjm = $this->getById($id);
		$timeNow = strtotime(mdate('%d %M %Y %h:%i %A'));
		$tglPinjam = strtotime($pjm['tanggal_pinjam']);
		$tglkadaluarsa = strtotime($pjm['tanggal_kadaluarsa']);
		$cek = $timeNow - $tglkadaluarsa;

		if( $cek > 86400 && $pjm['status_pengembalian'] == 'belum') {
			$denda = round($cek / 24 / 3600) * 2500;
		} else {
			$denda = 0;
		}

		$data = [
			'denda'	=> $denda
		];
		$this->db->where('id', $pjm['id']);
		$this->db->update('t_pinjaman', $data);

		return $denda;
	}

	public function pinjam()
	{
		$time = mdate('%d %M %Y %h:%i %A');
		$worldTime = strtotime($time);
		$pengembalian = $this->input->post('durasi', true) * 24 * 3600 + $worldTime;
		$pengembalian = mdate('%d %M %Y %h:%i %A', $pengembalian);

		$data = [
			'id_buku'        		=> htmlspecialchars($this->input->post('id_buku', true)),
			'nim_mahasiswa'        	=> htmlspecialchars($this->input->post('nim_mahasiswa', true)),
			'tanggal_pinjam'        => $time,
			'tanggal_kadaluarsa'   	=> $pengembalian,
			'status_pengembalian'	=> 'belum',
			'denda'        			=> ''

		];
		$this->db->insert('t_pinjaman', $data);

		$data = [
			'stok'	=> htmlspecialchars($this->input->post('stok', true)) - 1
		];
		$this->db->where('id', $this->input->post('id_buku'));
		$this->db->update('t_buku', $data);
	}

	public function pengembalian($id)
	{
		$pjm = $this->getById($id);
		$buku = $this->Buku_model->getById($pjm['id_buku']);

		$data = [
			'status_pengembalian'	=> 'sudah'
		];
		$this->db->where('id', $id);
		$this->db->update('t_pinjaman', $data);

		$data = [
			'stok'	=> $buku['stok'] + 1
		];
		$this->db->where('id', $pjm['id_buku']);
		$this->db->update('t_buku', $data);
	}
}
