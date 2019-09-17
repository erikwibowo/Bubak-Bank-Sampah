<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpesan extends CI_Model {

	public function read(){
		return $this->db->get('pesan');
	}

	public function insert($data){
		return $this->db->insert('pesan', $data);
	}

	public function update($data, $id){
		$this->db->where('id_pesan', $id);
		return $this->db->update('pesan', $data);
	}

	public function delete($id){
		$this->db->where('id_pesan', $id);
		return $this->db->delete('pesan');
	}

	public function readById(){
		$this->db->where('id_pesan', $id);
		return $this->db->get('pesan');
	}

}

/* End of file Mpesan.php */
/* Location: ./application/models/Mpesan.php */