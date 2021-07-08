<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}


	public function profile_perusahaan(){
		return $this->db->query("SELECT * FROM company ORDER BY id_company DESC LIMIT 1");
	}

	public function profileperusahaan_update(){
            $config['upload_path'] 	 = 'assets/images/';
            $config['allowed_types'] = 'gif|jpg|png|ico|jpeg|JPG|JPEG|PNG';
            $config['max_size'] 	 = '50000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('r');
            $hasil = $this->upload->data();

            if ($hasil['file_name'] == ''){
                    $data 	= array('nama_perusahaan'	=> $this->input->post('a'),
                                    'alamat_perusahaan'	=> $this->input->post('b'),
                                    'kota'			    => $this->input->post('c'),
                                    'provinsi'		    => $this->input->post('d'),
                                    'kodepos'		    => $this->input->post('e'),
                                    'nama_website'		=> $this->input->post('f'),
                                    'alamat_website'    => $this->input->post('g'),
                                    'email'	    		=> $this->input->post('h'),
                                    'no_telphone'		=> $this->input->post('j'),
                                    'facebook'   		=> $this->input->post('k'),
                                    'instagram'         => $this->input->post('l'),
                                    'twitter'           => $this->input->post('m'),
                                    'whatsapp'          => $this->input->post('n'),
                                    'meta_deskripsi'    => $this->input->post('o'),
                                    'meta_keyword'      => $this->input->post('p'),
                                    'author'          	=> $this->input->post('q'),
                                    'maps'          	=> $this->input->post('s'),
                                    'create_date'       => date('Y-m-d H:i:s'));
            }else{
                    $data   = array('nama_perusahaan'	=> $this->input->post('a'),
                                    'alamat_perusahaan'	=> $this->input->post('b'),
                                    'kota'			    => $this->input->post('c'),
                                    'provinsi'		    => $this->input->post('d'),
                                    'kodepos'		    => $this->input->post('e'),
                                    'nama_website'		=> $this->input->post('f'),
                                    'alamat_website'    => $this->input->post('g'),
                                    'email'	    		=> $this->input->post('h'),
                                    'no_telphone'		=> $this->input->post('j'),
                                    'facebook'   		=> $this->input->post('k'),
                                    'instagram'         => $this->input->post('l'),
                                    'twitter'           => $this->input->post('m'),
                                    'whatsapp'          => $this->input->post('n'),
                                    'meta_deskripsi'    => $this->input->post('o'),
                                    'meta_keyword'      => $this->input->post('p'),
                                    'author'          	=> $this->input->post('q'),
                                    'favicon'          	=> $hasil['file_name'],
                                    'maps'          	=> $this->input->post('s'),
                                    'create_date'       => date('Y-m-d H:i:s'));
            }
            $this->db->where('id_company',1);
            $this->db->update('company',$data);
    }

    public function tot_income(){

     $this->db->select('SUM(saldo) as total');
     return $this->db->get('pemasukan')->row()->total;

     }

     public function tot_kredit(){

     $this->db->select('SUM(saldo) as total');
     return $this->db->get('pengeluaran')->row()->total;

     }

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */
/* Author: ./onosas */