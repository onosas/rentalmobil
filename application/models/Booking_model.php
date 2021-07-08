<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function booking(){
		return $this->db->query("SELECT * FROM booking a JOIN users b ON a.nama_lengkap=b.nama_lengkap JOIN mobil c ON a.id_mobil=c.id_mobil JOIN merk d ON c.id_merk=d.id_merk WHERE a.status='Dibooking' ORDER BY a.id_booking DESC");
	}

	public function addbooking(){
		return $this->db->query("SELECT * FROM mobil a JOIN merk b ON a.id_merk=b.id_merk ORDER BY a.id_mobil DESC");
	}

	public function tambah_booking(){
		$data = array('nama_lengkap'  => $this->input->post('d'),
					  'no_trx'  	          => $this->input->post('o'),
					  'alamat' 		          => $this->input->post('e'),
					  'alamat_saatini'      => $this->input->post('ee'),
					  'status_rmh' 	        => $this->input->post('eee'),
					  'gender' 		          => $this->input->post('f'),
					  'no_ktp' 		          => $this->input->post('g'),
					  'no_telpon' 	        => $this->input->post('b'),
					  'id_mobil'	          => $this->input->post('h'),
					  'lama_sewa'	          => $this->input->post('i'),
					  'hrg_rental'	        => $this->input->post('j'),
					  'total'		            => $this->input->post('k'),
					  'tujuan'              => $this->input->post('l'),
					  'tgl_ambil'           => $this->input->post('m'),
					  'jam_ambil'           => $this->input->post('mm'),
					  'tgl_kembali'         => $this->input->post('n'),
					  'jam_kembali'         => $this->input->post('nn'),
					  'status'		          => 'Dibooking',
					  'role' 		            => 'Konsumen', 
					  'created_at'          => date("Y-m-d H:i:s"));
		$this->db->insert('booking', $data);
	}

	public function tambah_users(){
		$data = array('nama_lengkap'  => $this->input->post('d'),
					  'alamat' 		          => $this->input->post('e'),
					  'gender' 		          => $this->input->post('f'),
					  'no_ktp' 		          => $this->input->post('g'),
					  'no_telpon' 	        => $this->input->post('b'),
					  'role' 		            => 'Konsumen', 
					  'tanggal_daftar'      => date("Y-m-d H:i:s"));
		$this->db->insert('users', $data);
	}

	public function edit_booking($id){
		return $this->db->query("SELECT * FROM booking WHERE id_booking='$id'");
	}

	public function update_booking(){
		
		$data = array('nama_lengkap'  => $this->input->post('d'),
					  'alamat' 		          => $this->input->post('e'),
					  'alamat_saatini'      => $this->input->post('ee'),
					  'status_rmh' 	        => $this->input->post('eee'),
					  'gender' 		          => $this->input->post('f'),
					  'no_ktp' 		          => $this->input->post('g'),
					  'no_telpon' 	        => $this->input->post('b'),
					  'id_mobil'	          => $this->input->post('h'),
					  'lama_sewa'	          => $this->input->post('i'),
					  'hrg_rental'	        => $this->input->post('j'),
					  'total'		            => $this->input->post('k'),
					  'tujuan'              => $this->input->post('l'),
					  'tgl_ambil'           => $this->input->post('m'),
					  'jam_ambil'           => $this->input->post('mm'),
					  'tgl_kembali'         => $this->input->post('n'),
					  'jam_kembali'         => $this->input->post('nn'),
					  'status'		          => 'Dibooking',
					  'role' 		            => 'Konsumen', 
					  'created_at'          => date("Y-m-d H:i:s"));
		$this->db->where('id_booking', $this->input->post('id'));
		$this->db->update('booking', $data);
	}

	public function detail_booking($id){
		return $this->db->query("SELECT * FROM booking a JOIN users b ON a.nama_lengkap=b.nama_lengkap JOIN mobil c ON a.id_mobil=c.id_mobil JOIN merk d ON c.id_merk=d.id_merk JOIN jaminan e ON a.no_trx=e.no_trx WHERE a.id_booking='$id' ORDER BY a.id_booking DESC");
	}

  public function statusupdate($id){
    return $this->db->query("UPDATE booking SET status='Kembali' WHERE id_booking='$id'");
  }

	public function booking_delete($id){
		return $this->db->query("DELETE FROM booking where id_booking='$id'");
	}

	public function tambah_jaminan(){
		$files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for($i=0; $i<$cpt; $i++){
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
                $this->load->library('upload');
                $this->upload->initialize($this->set_upload_options());
                $this->upload->do_upload();
                $fileName = $this->upload->data()['file_name'];
                $images[] = $fileName;
            }
            $fileName = implode(';',$images);
            $fileName = str_replace(' ','_',$fileName);
            if (trim($fileName)!=''){
            	$data = array('no_trx'			  => $this->input->post('a'),
                            'nama_lengkap'	=> $this->input->post('b'),
                            'ktp'				    => $this->input->post('c'),
                            'milik_ktp'		  => $this->input->post('d'),
                            'nama_unit'		  => $this->input->post('e'),
                            'nopol_unit'		=> $this->input->post('f'),
                            'thn_unit'		  => $this->input->post('g'),
                            'wrn_unit'		  => $this->input->post('h'),
                            'no_hp'			    => $this->input->post('i'),
                            'milik_hp'		  => $this->input->post('j'),
                            'no_telp'			  => $this->input->post('k'),
                            'milik_telp'		=> $this->input->post('l'),
                            'an_stnk'       => $this->input->post('m'),
                            'foto_jaminan'	=> $fileName,
                            'tgl_create'		=> date('Y-m-d H:i:s'));
            }else{
            	$data = array('no_trx'			  => $this->input->post('a'),
                            'nama_lengkap'	=> $this->input->post('b'),
                            'ktp'				    => $this->input->post('c'),
                            'milik_ktp'		  => $this->input->post('d'),
                            'nama_unit'		  => $this->input->post('e'),
                            'nopol_unit'		=> $this->input->post('f'),
                            'thn_unit'		  => $this->input->post('g'),
                            'wrn_unit'		  => $this->input->post('h'),
                            'no_hp'			    => $this->input->post('i'),
                            'milik_hp'		  => $this->input->post('j'),
                            'no_telp'			  => $this->input->post('k'),
                            'milik_telp'		=> $this->input->post('l'),
                            'an_stnk'       => $this->input->post('m'),
                            'tgl_create'		=> date('Y-m-d H:i:s'));

            }
        $this->db->insert('jaminan', $data);
	}

	private function set_upload_options(){
        $config = array();
        $config['upload_path'] = 'assets/foto_jaminan/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG|PNG';
        $config['max_size'] = '500000'; // kb
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload', $config);
      return $config;
    }

    public function edit_jaminan($id){
		return $this->db->query("SELECT * FROM jaminan WHERE id_jaminan='$id'");
	}

    public function update_jaminan(){
		$files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for($i=0; $i<$cpt; $i++){
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
                $this->load->library('upload');
                $this->upload->initialize($this->set_upload_options());
                $this->upload->do_upload();
                $fileName = $this->upload->data()['file_name'];
                $images[] = $fileName;
            }
            $fileName = implode(';',$images);
            $fileName = str_replace(' ','_',$fileName);
            if (trim($fileName)!=''){
            	$data = array('no_trx'			    => $this->input->post('a'),
                              'nama_lengkap'	=> $this->input->post('b'),
                              'ktp'				    => $this->input->post('c'),
                              'milik_ktp'		  => $this->input->post('d'),
                              'nama_unit'		  => $this->input->post('e'),
                              'nopol_unit'		=> $this->input->post('f'),
                              'thn_unit'		  => $this->input->post('g'),
                              'wrn_unit'		  => $this->input->post('h'),
                              'no_hp'			    => $this->input->post('i'),
                              'milik_hp'		  => $this->input->post('j'),
                              'no_telp'			  => $this->input->post('k'),
                              'milik_telp'		=> $this->input->post('l'),
                              'an_stnk'       => $this->input->post('m'),
                              'foto_jaminan'	=> $fileName,
                              'tgl_create'		=> date('Y-m-d H:i:s'));
            }else{
            	$data = array('no_trx'			    => $this->input->post('a'),
                              'nama_lengkap'	=> $this->input->post('b'),
                              'ktp'				    => $this->input->post('c'),
                              'milik_ktp'		  => $this->input->post('d'),
                              'nama_unit'		  => $this->input->post('e'),
                              'nopol_unit'		=> $this->input->post('f'),
                              'thn_unit'		  => $this->input->post('g'),
                              'wrn_unit'		  => $this->input->post('h'),
                              'no_hp'			    => $this->input->post('i'),
                              'milik_hp'		  => $this->input->post('j'),
                              'no_telp'			  => $this->input->post('k'),
                              'milik_telp'		=> $this->input->post('l'),
                              'an_stnk'       => $this->input->post('m'),
                              'tgl_create'		=> date('Y-m-d H:i:s'));

            }
        $this->db->where('id_jaminan', $this->input->post('id'));
        $this->db->update('jaminan', $data);
	}

	public function jaminan_delete($id){
		return $this->db->query("DELETE FROM jaminan where id_jaminan='$id'");
	}

  // Booking User
  
  public function proses_order(){
    $cart = $this->cart->contents();
    foreach ($cart as $item) {
      $idt  = $item['id'];
      $lama = $item['qty'];
      $hrg  = $item['price'];
      $tot  = $item['total'];
    }
    $data = array('nama_lengkap'  => $this->input->post('d'),
            'no_trx'              => $this->input->post('o'),
            'alamat'              => $this->input->post('e'),
            'alamat_saatini'      => $this->input->post('ee'),
            'status_rmh'          => $this->input->post('eee'),
            'gender'              => $this->input->post('f'),
            'no_ktp'              => $this->input->post('g'),
            'no_telpon'           => $this->input->post('b'),
            'id_mobil'            => $idt,
            'lama_sewa'           => $lama,
            'hrg_rental'          => $hrg,
            'total'               => $tot,
            'tujuan'              => $this->input->post('l'),
            'tgl_ambil'           => $this->input->post('m'),
            'jam_ambil'           => $this->input->post('mm'),
            'tgl_kembali'         => $this->input->post('n'),
            'jam_kembali'         => $this->input->post('nn'),
            'status'              => 'Dibooking',
            'role'                => 'Konsumen', 
            'created_at'          => date("Y-m-d H:i:s"));
    $this->db->insert('booking', $data);
  }

  public function update_users(){
    $data = array('nama_lengkap'  => $this->input->post('d'),
            'alamat'              => $this->input->post('e'),
            'gender'              => $this->input->post('f'),
            'no_ktp'              => $this->input->post('g'),
            'no_telpon'           => $this->input->post('b'),
            'role'                => 'Konsumen', 
            'tanggal_daftar'      => date("Y-m-d H:i:s"));
    $this->db->where('username', $this->session->userdata('username'));
    $this->db->update('users', $data);
  }

  public function order($id){
    return $this->db->query("SELECT * FROM booking a JOIN users b ON a.nama_lengkap=b.nama_lengkap JOIN mobil c ON a.id_mobil=c.id_mobil JOIN merk d ON c.id_merk=d.id_merk JOIN jaminan e ON a.no_trx=e.no_trx WHERE b.username='".$this->session->userdata['username']."' ORDER BY a.id_booking DESC");
  }

  public function tfaja($id){
    return $this->db->query("SELECT * FROM booking a JOIN users b ON a.nama_lengkap=b.nama_lengkap WHERE a.id_booking='$id'");
  }

  public function transfer(){

    $config['upload_path']   = 'assets/bukti/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|JPEG|PNG';
    $config['max_size']    = '100000';
    $this->load->library('upload', $config);
    $this->upload->do_upload('d');
    $hasil= $this->upload->data();
    $data = array('gbr_tf'  => $hasil['file_name']);
    $this->db->where('id_booking', $this->input->post('id'));
    $this->db->update('booking', $data);
  }

  public function update_rek(){

    $data = array('nama_bank'   => $this->input->post('a'), 
                  'no_rekening' => $this->input->post('b'),
                  'an_rekening' => $this->input->post('c'));
    $this->db->where('username', $this->session->userdata['username']);
    $this->db->update('users', $data);
  }

}

/* End of file Booking_model.php */
/* Location: ./application/models/Booking_model.php */
/* Author: onosas/2021 */