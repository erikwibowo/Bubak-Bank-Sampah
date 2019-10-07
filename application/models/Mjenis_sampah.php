<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjenis_sampah extends CI_Model {

	public function create($data){
		return $this->db->insert('jenis_sampah', $data);
	}

	public function read(){
		return $this->db->get('jenis_sampah');
	}

	public function readById($id){
		$this->db->where('id_jenis_sampah', $id);
		return $this->db->get('jenis_sampah');
	}

	public function update($data, $id){
		$this->db->where('id_jenis_sampah', $id);
		return $this->db->update('jenis_sampah', $data);
	}

	public function delete($id){
		$this->db->where('id_jenis_sampah', $id);
		return $this->db->delete('jenis_sampah');
	}

}

/* End of file Mjenis_sampah.php */
/* Location: ./application/models/Mjenis_sampah.php */