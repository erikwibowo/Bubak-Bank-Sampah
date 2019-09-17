<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtentang extends CI_Model {

	public function read(){
		return $this->db->get('tentang');
	}

	public function insert($data){
		return $this->db->insert('tentang', $data);
	}

	public function update($data, $id){
		$this->db->where('id_tentang', $id);
		return $this->db->update('tentang', $data);
	}

	public function delete($id){
		$this->db->where('id_tentang', $id);
		return $this->db->delete('tentang');
	}

	public function readById(){
		$this->db->where('id_tentang', $id);
		return $this->db->get('tentang');
	}

}

/* End of file Mtentang.php */
/* Location: ./application/models/Mtentang.php */