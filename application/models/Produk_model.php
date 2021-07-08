<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function merk(){
		return $this->db->query("SELECT * FROM merk ORDER BY id_merk DESC");
	}

	public function tambah_merk(){

		$data = array('nama_merk'  => $this->input->post('a'), 
					  'aktif'	   => $this->input->post('b'),
					  'created_at' => date("Y-m-d H:i:s"));
		$this->db->insert('merk', $data);
	}

	public function edit_merk($id){
		return $this->db->query("SELECT * FROM merk WHERE id_merk='$id'");
	}

	public function update_merk(){

		$data = array('nama_merk'  => $this->input->post('a'),
					  'aktif'	   => $this->input->post('b'), 
					  'created_at' => date("Y-m-d H:i:s"));
		$this->db->where('id_merk', $this->input->post('id'));
		$this->db->update('merk', $data);
	}

	public function merk_delete($id){
		return $this->db->query("DELETE FROM merk where id_merk='$id'");
	}

	public function mobil(){
		return $this->db->query("SELECT * FROM mobil a JOIN merk b ON a.id_merk=b.id_merk  ORDER BY a.id_mobil DESC");
	}

	public function tambah_mobil(){
		$config['upload_path']   = 'assets/foto_mobil/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
        $config['max_size']      = '100000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('h');
        $hasil=$this->upload->data();
		$data = array('id_merk'    => $this->input->post('a'),
					  'nama_mobil' => $this->input->post('b'),
					  'nopol'	   => $this->input->post('c'),
					  'tahun'	   => $this->input->post('d'),
					  'warna'	   => $this->input->post('e'),
					  'jml_kursi'  => $this->input->post('f'),
					  'hrg_rental' => $this->input->post('g'),
					  'foto' 	   => $hasil['file_name'],
					  'created_at' => date("Y-m-d H:i:s"));
		$this->db->insert('mobil', $data);
	}

	public function edit_mobil($id){
		return $this->db->query("SELECT * FROM mobil WHERE id_mobil='$id'");
	}

	public function update_mobil(){
		$config['upload_path']   = 'assets/foto_mobil/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
        $config['max_size']      = '100000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('h');
        $hasil=$this->upload->data();
        if ($hasil['file_name'] == ''){
		$data = array('id_merk'    => $this->input->post('a'),
					  'nama_mobil' => $this->input->post('b'),
					  'nopol'	   => $this->input->post('c'),
					  'tahun'	   => $this->input->post('d'),
					  'warna'	   => $this->input->post('e'),
					  'jml_kursi'  => $this->input->post('f'),
					  'hrg_rental' => $this->input->post('g'),
					  'created_at' => date("Y-m-d H:i:s"));
		}else{
		$data = array('id_merk'    => $this->input->post('a'),
					  'nama_mobil' => $this->input->post('b'),
					  'nopol'	   => $this->input->post('c'),
					  'tahun'	   => $this->input->post('d'),
					  'warna'	   => $this->input->post('e'),
					  'jml_kursi'  => $this->input->post('f'),
					  'hrg_rental' => $this->input->post('g'),
					  'foto' 	   => $hasil['file_name'],
					  'created_at' => date("Y-m-d H:i:s"));	
		}
		$this->db->where('id_mobil', $this->input->post('id'));
		$this->db->update('mobil', $data);
	}

	public function mobil_detail($id){
		return $this->db->query("SELECT * FROM mobil a JOIN merk b ON a.id_merk=b.id_merk where id_mobil='$id'");
	}

	public function detail_produk($id){
		return $this->db->query("SELECT * FROM mobil a JOIN merk b ON a.id_merk=b.id_merk JOIN gallery c ON a.id_mobil=c.id_mobil WHERE a.id_mobil='$id'");
	}

	public function latest_car(){
		return $this->db->query("SELECT * FROM mobil a JOIN merk b ON a.id_merk=b.id_merk ORDER BY a.id_mobil");
	}

	public function mobil_delete($id){
		return $this->db->query("DELETE FROM mobil where id_mobil='$id'");
	}

}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */
/* Author: onosas/2021 */