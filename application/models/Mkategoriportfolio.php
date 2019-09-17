<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkategoriportfolio extends CI_Model {

	public function read(){
		return $this->db->get('kategori_portfolio');
	}

	public function insert($data){
		return $this->db->insert('kategori_portfolio', $data);
	}

	public function update($data, $id){
		$this->db->where('id_kategori', $id);
		return $this->db->update('kategori_portfolio', $data);
	}

	public function delete($id){
		$this->db->where('id_kategori', $id);
		return $this->db->delete('kategori_portfolio');
	}

	public function readById(){
		$this->db->where('id_kategori', $id);
		return $this->db->get('kategori_portfolio');
	}

}

/* End of file Mkategoriportfolio.php */
/* Location: ./application/models/Mkategoriportfolio.php */