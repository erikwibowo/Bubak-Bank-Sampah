<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtransaksi extends CI_Model {

	public function create($data){
		return $this->db->insert('transaksi', $data);
	}

	public function read(){
		$this->db->select('a.id_transaksi, a.jenis_transaksi, b.id_nasabah, b.nik_nasabah, b.nama_nasabah, c.nama_jenis_sampah, a.jumlah_sampah, a.nominal_transaksi, a.deskripsi_transaksi, a.created_at as tanggal, d.id_admin, d.nama_admin');
		$this->db->join('nasabah b', 'a.id_nasabah = b.id_nasabah');
		$this->db->join('jenis_sampah c', 'c.id_jenis_sampah = a.id_jenis_sampah');
		$this->db->join('admin d', 'a.id_admin = d.id_admin');
		return $this->db->get('transaksi a');
	}

	public function readById($id){
		$this->db->select('a.id_transaksi, a.jenis_transaksi, b.id_nasabah, b.nik_nasabah, b.nama_nasabah, c.nama_jenis_sampah, a.jumlah_sampah, a.nominal_transaksi, a.deskripsi_transaksi, a.created_at as tanggal, d.id_admin, d.nama_admin');
		$this->db->join('nasabah b', 'a.id_nasabah = b.id_nasabah');
		$this->db->join('jenis_sampah c', 'c.id_jenis_sampah = a.id_jenis_sampah');
		$this->db->join('admin d', 'a.id_admin = d.id_admin');
		$this->db->where('a.id_transaksi', $id);
		return $this->db->get('transaksi a');
	}

	public function readByJenis($jenis){
		$this->db->select('a.id_transaksi, a.jenis_transaksi, b.id_nasabah, b.nik_nasabah, b.nama_nasabah, c.nama_jenis_sampah, a.jumlah_sampah, a.nominal_transaksi, a.deskripsi_transaksi, a.created_at as tanggal, d.id_admin, d.nama_admin');
		$this->db->join('nasabah b', 'a.id_nasabah = b.id_nasabah');
		$this->db->join('jenis_sampah c', 'c.id_jenis_sampah = a.id_jenis_sampah');
		$this->db->join('admin d', 'a.id_admin = d.id_admin');
		$this->db->where('a.jenis_transaksi', $jenis);
		return $this->db->get('transaksi a');
	}

	public function readByNasabah($id_nasabah){
		$this->db->select('a.id_transaksi, a.jenis_transaksi, b.id_nasabah, b.nik_nasabah, b.nama_nasabah, c.nama_jenis_sampah, a.jumlah_sampah, a.nominal_transaksi, a.deskripsi_transaksi, a.created_at as tanggal, d.id_admin, d.nama_admin');
		$this->db->join('nasabah b', 'a.id_nasabah = b.id_nasabah');
		$this->db->join('jenis_sampah c', 'c.id_jenis_sampah = a.id_jenis_sampah');
		$this->db->join('admin d', 'a.id_admin = d.id_admin');
		$this->db->where('a.id_nasabah', $id_nasabah);
		return $this->db->get('transaksi a');
	}

	public function update($data, $id){
		$this->db->where('id_transaksi', $id);
		return $this->db->update('transaksi', $data);
	}

	public function delete($id){
		$this->db->where('id_transaksi', $id);
		return $this->db->delete('transaksi');
	}

}

/* End of file Mtransaksi.php */
/* Location: ./application/models/Mtransaksi.php */