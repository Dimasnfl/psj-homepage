<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 function __construct() {
	 	parent::__construct();
	 	$this->load->model('M_tipe_produk');
	 }

	function index()
	{
		$data['jml_petani'] 	= $this->M_tipe_produk->total_petani();
		$data['jml_produk'] 	= $this->M_tipe_produk->total_produk();
		$data['jml_transaksi'] 	= $this->M_tipe_produk->total_transaksi();

		$data['data']=$this->M_tipe_produk->select_all();
		// $data = $this->M_tipe_produk->select_all();
		$this->load->view('welcome_message',$data);
	}
	function rupiah ($harga) {
		$hasil = 'Rp ' . number_format($harga, 2, ",", ".");
		return $hasil;
	  }
	
}
