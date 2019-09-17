<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	public function create($data){
		return $this->db->insert('tb_admin', $data);
	}

	public function read(){
		$this->db->join('tb_level_admin b', 'a.id_level_admin = b.id_level_admin');
		return $this->db->get('tb_admin a');
	}

	public function readById($id){
		$this->db->join('tb_level_admin b', 'a.id_level_admin = b.id_level_admin');
		$this->db->where('a.id_admin', $id);
		return $this->db->get('tb_admin a');
	}

	public function update($data, $id){
		$this->db->where('id_admin', $id);
		return $this->db->update('tb_admin', $data);
	}

	public function delete($id){
		$this->db->where('id_admin', $id);
		return $this->db->delete('tb_admin');
	}

}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */