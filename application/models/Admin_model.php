<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function getByID($id)
	{
		return $this->db->get_where('t_admin', ['id' => $id])->row_array();
	}
}
