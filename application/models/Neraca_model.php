<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neraca_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function list_pemasukan(){

		return $this->db->query("SELECT * FROM pemasukan ORDER BY id_pemasukan");
	}

	public function list_pengeluaran(){
		return $this->db->query("SELECT * FROM pengeluaran ORDER BY id_pengeluaran");
	}

	public function data_neraca(){

		return $this->db->query("SELECT * FROM neraca ORDER BY id_neraca");
	}

	public function tambah_pemasukan(){

		$data = array('no_trx' 	=> $this->input->post('o'), 
					  'ket' 	=> $this->input->post('aa'),
					  'saldo' 	=> $this->input->post('k'),
					  'status' 	=> 'Dibooking',
					  'tgl_trx' => date('Y-m-d H:i:s'));
		$this->db->insert('pemasukan', $data);
	}

	public function tambah_pengeluaran(){

		$data = array('ktr' 	=> $this->input->post('aa'), 
					  'saldo' 	=> $this->input->post('b'),
					  'tgl_trx' => date('Y-m-d H:i:s'));
		$this->db->insert('pengeluaran', $data);
	}

	public function tambah_neraca(){
		$rows = $this->db->query("SELECT SUM(pemasukan) as total1 FROM neraca")->row_array();
		$row  = $this->db->query("SELECT SUM(pengeluaran) as total2 FROM neraca")->row_array();
		$nrc = $this->db->query("SELECT * FROM neraca")->row_array();
		$atu  = $this->input->post('c');
		$satu = $rows['total1'] - $atu;
		$tiga = $row['total2'] + $atu;
		$uta  = $this->input->post('k');
		$dua  = $rows['total1'] + $uta;
		$hasil= $dua - $tiga;
		$data = array('keterangan' 	=> $this->input->post('aa'), 
					  'pemasukan' 	=> $uta,
					  'pengeluaran' => $atu,
					  'saldobersih' => $hasil,
					  'tgl_trx' 	=>date('Y-m-d H:i:s'));
		$this->db->insert('neraca', $data);
	}

	// Users
	public function add_pemasukan(){
		$cart = $this->cart->contents();
	    foreach ($cart as $item) {
	      $idt  = $item['id'];
	      $lama = $item['qty'];
	      $hrg  = $item['price'];
	      $tot  = $item['total'];
	    }
		$data = array('no_trx' 	=> $this->input->post('o'), 
					  'ket' 	=> $this->input->post('aa'),
					  'saldo' 	=> $tot,
					  'status' 	=> 'Dibooking',
					  'tgl_trx' => date('Y-m-d H:i:s'));
		$this->db->insert('pemasukan', $data);
	}

	public function add_neraca(){
		$cart = $this->cart->contents();
	    foreach ($cart as $item) {
	      $idt  = $item['id'];
	      $lama = $item['qty'];
	      $hrg  = $item['price'];
	      $tot  = $item['total'];
	    }
		$rows = $this->db->query("SELECT SUM(pemasukan) as total1 FROM neraca")->row_array();
		$row  = $this->db->query("SELECT SUM(pengeluaran) as total2 FROM neraca")->row_array();
		$nrc = $this->db->query("SELECT * FROM neraca")->row_array();
		$atu  = $this->input->post('c');
		$satu = $rows['total1'] - $atu;
		$tiga = $row['total2'] + $atu;
		$uta  = $tot;
		$dua  = $rows['total1'] + $uta;
		$hasil= $dua - $tiga;
		$data = array('keterangan' 	=> $this->input->post('aa'), 
					  'pemasukan' 	=> $uta,
					  'pengeluaran' => $atu,
					  'saldobersih' => $hasil,
					  'tgl_trx' 	=>date('Y-m-d H:i:s'));
		$this->db->insert('neraca', $data);
	}

}

/* End of file Neraca_model.php */
/* Location: ./application/models/Neraca_model.php */