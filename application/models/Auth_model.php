<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function register(){

		$data = array('username' 		=> $this->input->post('a'),
					  'no_telpon' 		=> $this->input->post('b'),
					  'password' 		=> password_hash(($this->input->post('c')), PASSWORD_DEFAULT),
					  'repassword' 		=> $this->input->post('c'),
					  'role' 			=> 'Konsumen',
					  'is_active' 		=> 'aktif',
					  'tanggal_daftar' 	=> date('Y-m-d H:i:s'));
		$this->db->insert('users', $data);
	}

}

/* End of file Auth_model.php */
/* Location: ./application/models/Users_model.php */
/* Author: Onosas/2021 */