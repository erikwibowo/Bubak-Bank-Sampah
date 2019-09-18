<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	public function create($data){
		return $this->db->insert('admin', $data);
	}

	public function read(){
		$this->db->join('level_admin b', 'a.id_level_admin = b.id_level_admin');
		return $this->db->get('admin a');
	}

	public function readById($id){
		$this->db->join('level_admin b', 'a.id_level_admin = b.id_level_admin');
		$this->db->where('a.id_admin', $id);
		return $this->db->get('admin a');
	}

	public function update($data, $id){
		$this->db->where('id_admin', $id);
		return $this->db->update('admin', $data);
	}

	public function delete($id){
		$this->db->where('id_admin', $id);
		return $this->db->delete('admin');
	}

	public function auth($username){
		$this->db->join('level_admin b', 'a.id_level_admin = b.id_level_admin');
		$this->db->where('a.username_admin', $username);
		return $this->db->get('admin a');
	}

}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */