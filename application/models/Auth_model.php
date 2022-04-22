<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if( $this->form_validation->run() == false )  {
			$data['title'] = 'MASUK';
			$this->View_model->auth('login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email 	  = htmlspecialchars($this->input->post('email'));
		$password = htmlspecialchars($this->input->post('password'));

		$user = $this->db->get_where('t_admin', ['email' => $email])->row_array();
		if( !$user ) {
			$user = $this->db->get_where('t_petugas', ['email' => $email])->row_array();
			if( !$user ) { $user = $this->db->get_where('t_mahasiswa', ['email' => $email])->row_array(); }
			
			if( !$user ) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email Tidak Terdaftar</div>');
				redirect('login');

			} else {
				if( !password_verify($password, $user['password']) ) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Password Salah</div>');
					redirect('login');	

				} else {
					if( $user['role_id'] == 3) {
						$data = [
							'id'      => $user['nim'],
							'role_id' => $user['role_id']
						];
					} else {
						$data = [
							'id'      => $user['nip'],
							'role_id' => $user['role_id']
						];
					}

					$this->session->set_userdata($data);
					if( $user['role_id'] == 1 ) {
						redirect('dashboard');

					} else {
						redirect('dashboard');
						// $this->session->set_flashdata('notif', 'Login');
						// redirect('home');
					}
				}
				
			}
		} else {
			if( $password != $user['password'] ) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Password Salah</div>');
				redirect('login');	

			} else {
				$data = [
					'id'      => $user['id'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);

				redirect('dashboard');
			}
		}

	}

	public function registration()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim|numeric|is_unique[t_mahasiswa.nim]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[t_mahasiswa.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|min_length[8]|matches[password1]', [
			'min_length' => 'Password harus 8 karakter atau lebih.'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'DAFTAR';
			$this->View_model->auth('registration', $data);
		} else {
			$data = [
				'nim'   	  		=> htmlspecialchars($this->input->post('nim', true)),
				'nama'        		=> htmlspecialchars($this->input->post('nama', true)),
				'jurusan'			=> '',
				'jk'				=> '',
				'ttl'				=> '',
				'alamat'			=> '',
				'telepon'			=> '',
				'email'       		=> htmlspecialchars($this->input->post('email', true)),
				'password'    		=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'gambar'			=> 'default.jpg',
				'role_id'     		=> 3,
				'tanggal_dibuat'	=> mdate('%d %M %Y %h:%i %A')

			];

			$this->db->insert('t_mahasiswa', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Pendaftaran Berhasil</div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('notif', 'Logout');
	}
}
