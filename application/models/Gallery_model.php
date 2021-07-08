<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function view_gallery(){
		return $this->db->query("SELECT * FROM gallery a JOIN mobil b ON a.id_mobil=b.id_mobil JOIN merk c ON b.id_merk=c.id_merk ORDER BY a.id_gallery DESC");
	}

	public function tambah_gallery(){

		$config['upload_path']   = 'assets/img_gallery/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|JPEG|PNG';
		$config['max_size']		 = '100000';
		$this->load->library('upload', $config);
		$this->upload->do_upload('d');
		$hasil= $this->upload->data();
		$data = array('id_mobil' 		=> $this->input->post('a'), 
					  'judul_gallery' 	=> $this->input->post('b'),
					  'keterangan' 		=> $this->input->post('c'),
					  'foto_gallery' 	=> $hasil['file_name'],
					  'create_gallery' 	=> date('Y-m-d H:i:s'));
		$this->db->insert('gallery', $data);
	}

	public function edit_gallery($id){
		return $this->db->query("SELECT * FROM gallery WHERE id_gallery='$id' ");
	}

	public function update_gallery(){

		$config['upload_path'] 	 = 'assets/img_gallery/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|JPEG|PNG';
		$config['max_size']  	 = '100000';
		$this->load->library('upload', $config);
		$this->upload->do_upload('d');
		$hasil = $this->upload->data();
		if ($hasil['file_name'] == '') {
			$data = array('id_mobil' 	=> $this->input->post('a'), 
					  'judul_gallery' 	=> $this->input->post('b'),
					  'keterangan' 		=> $this->input->post('c'),
					  'create_gallery' 	=> date('Y-m-d H:i:s'));
		}else{
			$data = array('id_mobil' 	=> $this->input->post('a'), 
					  'judul_gallery' 	=> $this->input->post('b'),
					  'keterangan' 		=> $this->input->post('c'),
					  'foto_gallery' 	=> $hasil['file_name'],
					  'create_gallery' 	=> date('Y-m-d H:i:s'));
		}
		$this->db->where('id_gallery', $this->input->post('id'));
		$this->db->update('gallery', $data);
	}

	public function gallery_delete($id){
		return $this->db->query("DELETE FROM gallery WHERE id_gallery='$id'");
	}

}

/* End of file Gallery_model.php */
/* Location: ./application/models/Gallery_model.php */
/* Author: ./onosas */