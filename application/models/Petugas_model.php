<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {
	public function getAll()
	{
		return $this->db->get('t_petugas')->result_array();
	}

	public function get()
	{
		$nip = $this->session->userdata('nip');
		return $this->db->get_where('t_petugas', ['nip' => $nip])->row_array();
	}

	public function getByNIP($nip)
	{
		return $this->db->get_where('t_petugas', ['nip' => $nip])->row_array();
	}

	public function tambah()
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = 'default.jpg';
		} else {
			$config['upload_path']          = 'assets/img/profil';
			$config['allowed_types']        = 'jpg|jpeg|png';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$picture = $this->upload->data('file_name');
			}
		}

		$data = [
			'nip'   	  		=> htmlspecialchars($this->input->post('nip', true)),
			'nama'        		=> htmlspecialchars($this->input->post('nama', true)),
			'jk'				=> htmlspecialchars($this->input->post('jk', true)),
			'ttl'				=> htmlspecialchars($this->input->post('ttl', true)),
			'alamat'			=> htmlspecialchars($this->input->post('alamat', true)),
			'telepon'			=> htmlspecialchars($this->input->post('telepon', true)),
			'email'       		=> htmlspecialchars($this->input->post('email', true)),
			'password'    		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'gambar'			=> $picture,
			'role_id'     		=> 2,
			'tanggal_dibuat'	=> mdate('%d %M %Y %h:%i %A')

		];

		$this->db->insert('t_petugas', $data);
	}

	public function ubah($nip)
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = $this->input->post('img');
		} else {
			$config['upload_path']          = 'assets/img/profil';
			$config['allowed_types']        = 'jpg|jpeg|png';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$picture = $this->upload->data('file_name');
			}
		}

		$data = [
			'nip'   	  		=> htmlspecialchars($this->input->post('nip', true)),
			'nama'        		=> htmlspecialchars($this->input->post('nama', true)),
			'jk'				=> htmlspecialchars($this->input->post('jk', true)),
			'ttl'				=> htmlspecialchars($this->input->post('ttl', true)),
			'alamat'			=> htmlspecialchars($this->input->post('alamat', true)),
			'telepon'			=> htmlspecialchars($this->input->post('telepon', true)),
			'email'       		=> htmlspecialchars($this->input->post('email', true)),
			'gambar'			=> $picture
		];

		$this->db->where('nip', $this->input->post('nip'));
		$this->db->update('t_petugas', $data);
	}

	public function hapus($nip)
	{
		$this->db->delete('t_petugas', ['nip' => $nip]);
	}
}
