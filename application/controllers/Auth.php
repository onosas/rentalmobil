<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('a', 'Username', 'trim|required|min_length[3]|max_length[12]|is_unique[users.username]',  [
	        'required'   => 'Username Tidak Boleh Kosong!',
	        'is_unique'  => 'Username sudah terdaftar!',
	        'min_length' => 'Username terlalu pendek!',
	        'max_length' => 'Username maksimal 12 karakter!'
	         ]);

		$this->form_validation->set_rules('b', 'no_telpon', 'required|trim|numeric|min_length[10]|max_length[13]', [
             'required'   => 'No Telpon Tidak boleh kosong!',
             'numeric'	  => 'Harus berupa angka',
             'min_length' => 'No Telpon Minimal 10 karakter!',
             'max_length' => 'No Telpon terlalu panjang!Maksimal 13 karakter'
             ]);

		$this->form_validation->set_rules('c', 'Password', 'required|trim|min_length[6]|max_length[24]', [
             'required'   => 'Password Tidak boleh kosong!',
             'min_length' => 'Password Minimal 6 karakter!',
             'max_length' => 'Password terlalu panjang!Maksimal 24 karakter'
             ]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Register';
            $this->templates->load('templates2', 'auth/v_register', $data);
		}else{
			$this->auth->register();
			$this->session->set_flashdata('success', 'Register Berhasil, Silahkan Login');
			redirect('home','refresh');
		}
	}

	public function login() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required',  [
			'required'   => 'Masukkan Username Anda!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required',  [
			'required'   => 'Masukkan Password Anda!'
		]);
        if ($this->form_validation->run() == false) {
        	$data['title'] = 'Login';
        	$this->load->view('auth/v_login', $data);
        }else{
        	//validasinya sukses
            $this->_login();
        }
	}

	private function _login()
    {
		
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		

		$user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == aktif) {
                if (password_verify($password, $user['password'])) {
                    $data = [
						"id_users"   => $user['id_users'],
						"username"   => $user['username'],
                        "role"       => $user['role']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role'] == "Admin") {
                        redirect('admin');
					} else{
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Password Anda Salah!. ');
                    redirect('home');
                }
            } else {
				$this->session->set_flashdata('error', 'Username/Password Tidak Ditemukan! Anda Belum Terdaftar... ');
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('error', 'Username Anda Salah!. ');
            redirect('home');
        }
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
/* Author: Onosas/2021 */