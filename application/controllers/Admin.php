<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		cek_session_admin();

		$data['title'] = 'Dashboard';
        $data['total_income'] = $this->home->tot_income();
        $data['total_kredit'] = $this->home->tot_kredit();
		$this->templates->load('admin/templates', 'admin/dashboard', $data);
	}

	public function merk(){
		cek_session_admin();
		
		if (isset($_POST['submit'])){
            $this->produk->tambah_merk();
            $this->session->set_flashdata('success', 'Nama Merk Berhasil Ditambahkan');
            redirect('admin/merk');
        }else{
            $data['record'] = $this->produk->merk();
            $data['title1'] = 'Merk';
			$data['title2'] = 'Data & Tambah Merk';
			$this->templates->load('admin/templates', 'admin/merk/list_merk', $data);
        }
	}

	public function editmerk(){
		cek_session_admin();

		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
            $this->produk->update_merk();
            $this->session->set_flashdata('success', 'Nama Merk Berhasil Diupdate');
            redirect('admin/merk');
        }else{
            $data['record'] = $this->produk->merk();
            $data['rows']   = $this->produk->edit_merk($id)->row_array();
            $data['title1'] = 'Merk';
			$data['title2'] = 'Data & Edit Merk';
			$this->templates->load('admin/templates', 'admin/merk/list_merkedit', $data);
        }
	}

	public function delete_merk(){
        $id = $this->uri->segment(3);
        $this->produk->merk_delete($id);
        redirect('admin/merk');
    }

    public function mobil(){
		cek_session_admin();
		
		if (isset($_POST['submit'])){
            $this->produk->tambah_mobil();
            $this->session->set_flashdata('success', 'Mobil Berhasil Ditambahkan');
            redirect('admin/mobil');
        }else{
            $data['record'] = $this->produk->mobil();
            $data['merk']   = $this->produk->merk();
            $data['title1'] = 'Mobil';
			$data['title2'] = 'Data & Tambah Mobil';
			$this->templates->load('admin/templates', 'admin/mobil/list_mobil', $data);
        }
	}

	public function editmobil(){
		cek_session_admin();

		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
            $this->produk->update_mobil();
            $this->session->set_flashdata('success', 'Mobil Berhasil Diupdate');
            redirect('admin/mobil');
        }else{
            $data['record'] = $this->produk->mobil();
            $data['rows']   = $this->produk->edit_mobil($id)->row_array();
            $data['merk']   = $this->produk->merk();
            $data['title1'] = 'Mobil';
			$data['title2'] = 'Data & Edit Mobil';
			$this->templates->load('admin/templates', 'admin/mobil/list_mobiledit', $data);
        }
	}

	public function detailmobil(){
		cek_session_admin();

		$id 			= $this->uri->segment(3);
		$data['row'] 	= $this->produk->mobil_detail($id)->row_array();
		$data['title1'] = 'Mobil';
		$data['title2'] = 'Detail Mobil';
		$this->templates->load('admin/templates', 'admin/mobil/list_mobildetail', $data);
	}

	public function delete_mobil(){
        $id = $this->uri->segment(3);
        $this->produk->mobil_delete($id);
        redirect('admin/mobil');
    }

    public function booking(){
    	cek_session_admin();

    	$data['record'] = $this->booking->booking();
        $data['title1'] = 'Booking';
		$data['title2'] = 'Daftar Booking Mobil';
		$this->templates->load('admin/templates', 'admin/booking/list_booking', $data);
    }

    public function tambahbooking(){
    	cek_session_admin();
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
             'numeric'	  => 'Harus berupa angka',
             'min_length' => 'No Telpon Minimal 10 karakter!',
             'max_length' => 'No Telpon terlalu panjang!Maksimal 13 karakter'
             ]);
    	$this->form_validation->set_rules('h', 'Nama Mobil', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
    	$this->form_validation->set_rules('i', 'Lama Sewa', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
    	$this->form_validation->set_rules('j', 'Harga Sewa', 'required|trim',  [
             'required'   => 'Harus diisi!'
         ]);
    	$this->form_validation->set_rules('k', 'Total Sewa', 'required|trim',  [
             'required'   => 'Harus diisi!'
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
            $data['record'] = $this->booking->addbooking();
            $data['title1'] = 'Booking';
			$data['title2'] = 'Tambah Booking Mobil';
			$this->templates->load('admin/templates', 'admin/booking/list_bookingtambah', $data);
        }else{
			$this->booking->tambah_booking();
            $this->booking->tambah_users();
            $this->neraca->tambah_pemasukan();
            $this->neraca->tambah_neraca();
            $data['no_trx']       = $this->input->post('o');
            $data['nama_lengkap'] = $this->input->post('d');
            $data['title1']       = 'Booking';
            $data['title2']       = 'Tambah Jaminan Sewa';
            $this->session->set_flashdata('success', 'Data Penyewa Berhasil Disimpan');
            $this->templates->load('admin/templates', 'admin/booking/list_jaminan', $data);
        }
    }

    public function editbooking(){
        cek_session_admin();

        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $this->booking->update_booking();
            $this->session->set_flashdata('success', 'Data Penyewa Berhasil Diupdate');
            redirect('admin/booking');
        }else{
            $data['record'] = $this->booking->addbooking();
            $data['rows']   = $this->booking->edit_booking($id)->row_array();
            $data['title1'] = 'Booking';
            $data['title2'] = 'Edit Booking Mobil';
            $this->templates->load('admin/templates', 'admin/booking/list_bookingedit', $data);
        }
    }

    public function detailbooking(){
        cek_session_admin();

        $id             = $this->uri->segment(3);
        $data['row']    = $this->booking->detail_booking($id)->row_array();
        $data['title1'] = 'Booking';
        $data['title2'] = 'Detail Sewa Mobil';
        $this->templates->load('admin/templates', 'admin/booking/list_bookingdetail', $data);
    }

    public function updatestatus(){

        $id = $this->uri->segment(3);
        $this->booking->statusupdate($id);
        $this->session->set_flashdata('success', 'Status Telah Berhasil Diupdate');
        redirect('admin/booking');
    }

    public function delete_booking(){
        $id = $this->uri->segment(3);
        $this->booking->booking_delete($id);
        redirect('admin/booking');
    }

    public function tambahjaminan(){
        cek_session_admin();
        
        if (isset($_POST['submit'])){
            $this->booking->tambah_jaminan();
            $this->session->set_flashdata('success', 'Jaminan Sewa Berhasil Ditambahkan');
            redirect('admin/booking');
        }else{
            $data['no_trx']       = $this->input->post('o');
            $data['nama_lengkap'] = $this->input->post('d');
            $data['title1']       = 'Booking';
            $data['title2']       = 'Tambah Jaminan Sewa';
            $this->templates->load('admin/templates', 'admin/booking/list_jaminan', $data);
        }
    }

    public function invoice(){
        cek_session_admin();

        $id             = $this->uri->segment(3);
        $data['row']    = $this->booking->detail_booking($id)->row_array();
        $data['idn']    =  $this->home->profile_perusahaan()->row_array();
        $data['title1'] = 'Booking';
        $data['title2'] = 'Costumer Agreement';
        // $this->templates->load('admin/templates', 'admin/booking/invoice', $data);
        $this->load->view('admin/booking/invoice', $data);
    }

    public function profileperusahaan(){
        cek_session_admin();

        if (isset($_POST['submit'])){
            $this->home->profileperusahaan_update();
            $this->session->set_flashdata('success', 'Profile Perusahaan Berhasil Diperbarui');
            redirect('admin/profileperusahaan');
        }else{
            $data['title1'] = 'Perusahaan';
            $data['title2'] = 'Website Perusahaan';
            $data['record'] = $this->home->profile_perusahaan()->row_array();
            $this->templates->load('admin/templates','admin/perusahaan/profile_perusahaan', $data);
        }
    }

    public function gallery(){
        cek_session_admin();

        $data['record'] = $this->gallery->view_gallery();
        $data['title1'] = 'Gallery';
        $data['title2'] = 'Daftar Gallery Mobil';
        $this->templates->load('admin/templates', 'admin/gallery/list_gallery', $data);
    }

    public function gallerytambah(){
        cek_session_admin();
        
        if (isset($_POST['submit'])){
            $this->gallery->tambah_gallery();
            $this->session->set_flashdata('success', 'Gallery Mobil Berhasil Ditambahkan');
            redirect('admin/gallery');
        }else{
            redirect('admin/gallery');
        }
    }

    public function editgallery(){
        cek_session_admin();

        $id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $this->gallery->update_gallery();
            $this->session->set_flashdata('success', 'Gallery Mobil Berhasil Diupdate');
            redirect('admin/gallery');
        }else{
            $data['record'] = $this->booking->addbooking();
            $data['rows']   = $this->gallery->edit_gallery($id)->row_array();
            $data['title1'] = 'Gallery';
            $data['title2'] = 'Edit Gallery Mobil';
            $this->templates->load('admin/templates', 'admin/gallery/list_galleryedit', $data);
        }
    }

    public function delete_gallery(){
        $id = $this->uri->segment(3);
        $this->gallery->gallery_delete($id);
        redirect('admin/gallery');
    }

    public function neraca(){
        cek_session_admin();

        $data['record'] = $this->neraca->data_neraca();
        $data['masuk']  = $this->neraca->list_pemasukan();
        $data['keluar'] = $this->neraca->list_pengeluaran();
        $data['title1'] = 'Neraca';
        $data['title2'] = 'Daftar Pemasukan & Pengeluaran Perusahaan';
        $this->templates->load('admin/templates', 'admin/neraca/v_neraca', $data);
    }

    public function pengeluarantambah(){
        cek_session_admin();
        
        if (isset($_POST['submit'])){
            $this->neraca->tambah_pengeluaran();
            $this->neraca->tambah_neraca();
            $this->session->set_flashdata('success', 'Pengeluaran Kas Berhasil Ditambahkan');
            redirect('admin/neraca');
        }else{
            redirect('admin/neraca');
        }
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
/* Author: Onosas/2021 */