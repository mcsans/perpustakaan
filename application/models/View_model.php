<?php

class View_model extends CI_Model {

    public function admin($view, $data)
    {
        if( $this->session->userdata('role_id') == 1 ) {
            $data['userdata'] = $this->Admin_model->getById($this->session->userdata('id'));
        }
        if( $this->session->userdata('role_id') == 2 ) {
            $data['userdata'] = $this->Petugas_model->getByNIP($this->session->userdata('id'));
        }
        
        $this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/'. $view,$data);
		$this->load->view('templates/admin/footer');
    }

    public function user($view, $data)
    {
        if( $this->session->userdata('role_id') == 3 ) {
            $data['userdata'] = $this->Mahasiswa_model->getByNIM($this->session->userdata('id'));
        }
        
        $this->load->view('templates/user/header', $data);
		$this->load->view('user/'. $view,$data);
		$this->load->view('templates/user/footer');
    }

    public function auth($view, $data)
    {
        $this->load->view('templates/auth/header', $data);
        $this->load->view('auth/'. $view,$data);
        $this->load->view('templates/auth/footer');
    }

}
