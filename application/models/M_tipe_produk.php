<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tipe_produk extends CI_Model
{


	function get_all_produk()
	{
		$hasil = $this->db->get('tipe_produk');
		$hasil = $this->db->get('tipe_produk');

		return $hasil->result();
	}

	function select_all()
	{
		$this->db->select('*');
		$this->db->from('tipe_produk');
		$this->db->order_by('id', 'desc');
		$this->db->order_by('parent_id', 'desc');
		$this->db->where('deleted_at is NULL', NULL);
		$this->db->where('terbaru', 1);
		$query = $this->db->get();
		return $query->result();
	}

	public function total_produk()
	{
		$this->db->select('produk.id,user.nik as user_nik, user.nama as user_nama, tipe_produk.nama as tipe_produk_nama, produk.tgl_tanam, produk.tgl_panen, produk.berat_panen,  tipe_produk.harga as tipe_produk_harga, produk.luas_lahan, produk.alamat, status_produk.nama as status_produk_nama');
		$this->db->from('produk');
		$this->db->order_by('id', 'desc');
		$this->db->join('user', 'user.id = produk.id_user');
		$this->db->join('tipe_produk', 'tipe_produk.id = produk.id_tipe_produk');
		$this->db->join('status_produk', 'status_produk.id = produk.id_status_produk');
		$data = $this->db->get('');

		return $data->num_rows();
	}


	public function total_transaksi()
	{
		$data = $this->db->get('transaksi');

		return $data->num_rows();
	}



	public function total_petani()
	{
		$this->db->select('user.*, desa.nama as desa_nama, SUM(produk.luas_lahan) as total_luas_lahan');
		$this->db->from('user');
		$this->db->order_by('nama', 'asc');
		$this->db->join('desa', 'desa.id = user.id_desa');
		$this->db->join('produk', 'produk.id_user = user.id');
		$this->db->group_by('produk.id_user');
		$data = $this->db->get('');

		return $data->num_rows();
	}
}
