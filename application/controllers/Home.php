<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Rental CARS';
		$data['mobil'] = $this->produk->mobil();
		$data['cars']  = $this->produk->latest_car();
		$this->templates->load('templates', 'home', $data);
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['title'] = 'Detail Mobil';
		$data['row']   = $this->produk->detail_produk($id)->row_array();
		$data['rows']  = $this->produk->detail_produk($id)->row_array();
		$this->templates->load('templates2', 'detail', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
/* Author: Onosas/2021 */