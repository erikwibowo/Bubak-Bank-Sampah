<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mportfolio extends CI_Model {

	public function read(){
		$this->db->join('kategori_portfolio b', 'a.id_kategori = b.id_kategori');
		return $this->db->get('portfolio a');
	}

	public function insert($data){
		return $this->db->insert('portfolio', $data);
	}

	public function update($data, $id){
		$this->db->where('id_portfolio', $id);
		return $this->db->update('portfolio', $data);
	}

	public function delete($id){
		$this->db->where('id_portfolio', $id);
		return $this->db->delete('portfolio');
	}

	public function readById($id){
		$this->db->where('id_portfolio', $id);
		return $this->db->get('portfolio');
	}

	public function readByKat($id){
		$this->db->where('id_kategori', $id);
		return $this->db->get('portfolio');
	}

}

/* End of file Mportfolio.php */
/* Location: ./application/models/Mportfolio.php */