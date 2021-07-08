<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library('cart');
	}

	public function index()
	{
		
		$data['title']  = 'Booking Mobil';
		$data['row']    = $this->produk->mobil()->row_array();
		$data['cart']   = $this->cart->contents();
		$this->templates->load('templates2', 'booking/list_booking', $data);
	}

	public function tambah_booking(){

		$data = array('id'       => $this->input->post('id'),
                  'id_merk'  => $this->input->post('id_merk'),
                  'foto'     => $this->input->post('foto'),
                  'mobil'    => $this->input->post('mobil'),
                  'name'     => $this->input->post('nama'),
                  'price'    => $this->input->post('harga'),
                  'qty'      => $this->input->post('qty'),
                  'total'    => $this->input->post('harga')*$this->input->post('qty'));
        $this->cart->insert($data);
		redirect('booking',$data);
	}

	public function hapus($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
            }
        redirect('booking');
    }

    public function ubah_cart()
    {
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid   = $cart['rowid'];
            $id_merk = $cart['id_merk'];
            $mobil   = $cart['mobil'];
            $price   = $cart['price'];
            $foto    = $cart['foto'];
            $total   = $price * $cart['qty'];
            $qty     = $cart['qty'];
            $data    = array('rowid'  => $rowid,
                            'id_merk' => $id_merk,
                            'mobil'   => $mobil,
                            'price'   => $price,
                            'foto'    => $foto,
                            'total'   => $total,
                            'qty'     => $qty);
            $this->cart->update($data);
        }
        redirect('booking');
    }

    public function checkout(){

      $this->form_validation->set_rules('d', 'Nama Lengkap', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
      $this->form_validation->set_rules('e', 'Alamat Lengkap', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
        $this->form_validation->set_rules('ee', 'Alamat Saat Ini', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
        $this->form_validation->set_rules('eee', 'Status Rumah', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
      $this->form_validation->set_rules('f', 'Jenis Kelamin', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
      $this->form_validation->set_rules('g', 'Nomor KTP', 'required|trim|numeric|min_length[16]|max_length[16]',  [
             'required'   => 'Harus diisi!',
             'numeric'    => 'Harus Berupa Angka',
             'min_length' => 'Tidak boleh Kurang dari 16 Digit',
             'max_length' => 'Tidak boleh lebih dari 16 Digit'
         ]);
      $this->form_validation->set_rules('b', 'no_telpon', 'required|trim|numeric|min_length[10]|max_length[13]', [
             'required'   => 'No Telpon Tidak boleh kosong!',
             'numeric'    => 'Harus berupa angka',
             'min_length' => 'No Telpon Minimal 10 karakter!',
             'max_length' => 'No Telpon terlalu panjang!Maksimal 13 karakter'
             ]);
      $this->form_validation->set_rules('l', 'Tujuan', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
      $this->form_validation->set_rules('m', 'Tanggal Ambil', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
        $this->form_validation->set_rules('mm', 'Tanggal Ambil', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
      $this->form_validation->set_rules('n', 'Tanggal Kembali', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
        $this->form_validation->set_rules('nn', 'Tanggal Ambil', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
      if ($this->form_validation->run() == FALSE){
      $data['title']  = 'Checkout';
      $data['row']    = $this->produk->mobil()->row_array();
      $data['cart']   = $this->cart->contents();
      $this->templates->load('templates2', 'booking/check_out', $data);
      }else{
        $this->booking->proses_order();
        $this->booking->update_users();
        $this->neraca->add_pemasukan();
        $this->neraca->add_neraca();
        $this->cart->destroy();
        $data['no_trx']       = $this->input->post('o');
        $data['nama_lengkap'] = $this->input->post('d');
        $data['title1']       = 'Booking';
        $data['title2']       = 'Tambah Jaminan Sewa';
        $this->session->set_flashdata('success', 'Order anda telah berhasil, silahkan lanjutkan proses selanjutnya!');
        $this->templates->load('templates2', 'booking/list_jaminan', $data);
       }
    }

    public function addjaminan(){
        
        if (isset($_POST['submit'])){
            $this->booking->tambah_jaminan();
            $this->session->set_flashdata('success', 'Jaminan Sewa Berhasil Ditambahkan');
            redirect('home');
        }else{
            $data['no_trx']       = $this->input->post('o');
            $data['nama_lengkap'] = $this->input->post('d');
            $data['title1']       = 'Booking';
            $data['title2']       = 'Tambah Jaminan Sewa';
            $this->templates->load('templates2', 'booking/list_jaminan', $data);
        }
    }

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */
/* Author: Onosas/2021 */