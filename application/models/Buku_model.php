<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {
	public function getAll()
	{
		return $this->db->get('t_buku')->result_array();
	}

	public function get()
	{
		$id = $this->session->userdata('id');
		return $this->db->get_where('t_buku', ['id' => $id])->row_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('t_buku', ['id' => $id])->row_array();
	}

	
    public function getKeyword()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        $this->db->or_like('pengarang', $keyword);
        $this->db->or_like('penerbit', $keyword);
        return $this->db->get('t_buku')->result_array();
    }

	public function tambah()
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = 'default.jpg';
		} else {
			$config['upload_path']          = 'assets/img/cover_buku';
			$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$picture = $this->upload->data('file_name');
			}
		}

		$data = [
			'judul'        		=> htmlspecialchars($this->input->post('judul', true)),
			'pengarang'        	=> htmlspecialchars($this->input->post('pengarang', true)),
			'penerbit'        	=> htmlspecialchars($this->input->post('penerbit', true)),
			'tahun_terbit'      => htmlspecialchars($this->input->post('tahun_terbit', true)),
			'jumlah_halaman'    => htmlspecialchars($this->input->post('jumlah_halaman', true)),
			'isbn'        		=> htmlspecialchars($this->input->post('isbn', true)),
			'gambar'			=> $picture,
			'stok'				=> htmlspecialchars($this->input->post('stok', true))

		];

		$this->db->insert('t_buku', $data);
	}

	public function ubah($id)
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = $this->input->post('img');
		} else {
			$config['upload_path']          = 'assets/img/cover_buku';
			$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$picture = $this->upload->data('file_name');
			}
		}

		$data = [
			'judul'        		=> htmlspecialchars($this->input->post('judul', true)),
			'pengarang'        	=> htmlspecialchars($this->input->post('pengarang', true)),
			'penerbit'        	=> htmlspecialchars($this->input->post('penerbit', true)),
			'tahun_terbit'      => htmlspecialchars($this->input->post('tahun_terbit', true)),
			'jumlah_halaman'    => htmlspecialchars($this->input->post('jumlah_halaman', true)),
			'isbn'        		=> htmlspecialchars($this->input->post('isbn', true)),
			'gambar'			=> $picture,
			'stok'				=> htmlspecialchars($this->input->post('stok', true))
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('t_buku', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('t_buku', ['id' => $id]);
	}
}
