<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
	public function getAll()
	{
		return $this->db->get('t_mahasiswa')->result_array();
	}

	public function get()
	{
		$nim = $this->session->userdata('nim');
		return $this->db->get_where('t_mahasiswa', ['nim' => $nim])->row_array();
	}

	public function getByNIM($nim)
	{
		return $this->db->get_where('t_mahasiswa', ['nim' => $nim])->row_array();
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
			'nim'   	  		=> htmlspecialchars($this->input->post('nim', true)),
			'nama'        		=> htmlspecialchars($this->input->post('nama', true)),
			'jurusan'			=> '',
			'jk'				=> '',
			'ttl'				=> '',
			'alamat'			=> '',
			'telepon'			=> '',
			'email'       		=> htmlspecialchars($this->input->post('email', true)),
			'password'    		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'gambar'			=> $picture,
			'role_id'     		=> 3,
			'tanggal_dibuat'	=> mdate('%d %M %Y %h:%i %A')

		];

		$this->db->insert('t_mahasiswa', $data);
	}

	public function ubah($nim)
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
			'nim'   	  		=> htmlspecialchars($this->input->post('nim', true)),
			'nama'        		=> htmlspecialchars($this->input->post('nama', true)),
			'jurusan'			=> htmlspecialchars($this->input->post('jurusan', true)),
			'jk'				=> htmlspecialchars($this->input->post('jk', true)),
			'ttl'				=> htmlspecialchars($this->input->post('ttl', true)),
			'alamat'			=> htmlspecialchars($this->input->post('alamat', true)),
			'telepon'			=> htmlspecialchars($this->input->post('telepon', true)),
			'email'       		=> htmlspecialchars($this->input->post('email', true)),
			'gambar'			=> $picture
		];

		$this->db->where('nim', $this->input->post('nim'));
		$this->db->update('t_mahasiswa', $data);
	}

	public function hapus($nim)
	{
		$this->db->delete('t_mahasiswa', ['nim' => $nim]);
	}
}
