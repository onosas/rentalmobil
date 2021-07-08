<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function users_view($id){
        return $this->db->query("SELECT * FROM `users` WHERE username='$id' AND role='Admin'");
    }

}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */
/* Author: ./onosas */