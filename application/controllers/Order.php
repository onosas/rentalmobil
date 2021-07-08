<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$id             = $this->uri->segment(3);
        $data['record'] = $this->booking->order($id);
        $data['title'] = 'Order';
        $this->templates->load('templates2', 'order/list_order', $data);
	}

	public function bukti_transfer(){

		$id = $this->uri->segment(3);
        if (isset($_POST['submit'])){
            $this->booking->transfer();
            $this->booking->update_rek();
            $this->session->set_flashdata('success', 'Bukti pembayaran berhasil ditransfer');
            redirect('order');
        }else{
            $data['rows']   = $this->booking->tfaja($id)->row_array();
            $data['title'] = 'Upload Bukti Transfer';
            $this->templates->load('templates2', 'order/bukti_tf', $data);
        }
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */