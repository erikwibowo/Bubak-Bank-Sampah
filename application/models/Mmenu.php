<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmenu extends CI_Model {

	public function create($data){
		return $this->db->insert('menu', $data);
	}

	public function read(){
		return $this->db->get('menu');
	}

	public function readById($id){
		$this->db->where('id_menu', $id);
		return $this->db->get('menu');
	}

	public function readParent(){
		$type_menu = array('P', 'S');
		$this->db->where_in('type_menu', $type_menu);
		$this->db->order_by('nama_menu', 'asc');
		return $this->db->get('menu');
	}

	public function readChild($parent){
		$this->db->where('type_menu', 'C');
		$this->db->where('parent', $parent);
		$this->db->order_by('nama_menu', 'asc');
		return $this->db->get('menu');
	}

	public function update($data, $id){
		$this->db->where('id_menu', $id);
		return $this->db->update('menu', $data);
	}

	public function delete($id){
		$this->db->where('id_menu', $id);
		return $this->db->delete('menu');
	}

	public function deleteChild($id){
		$this->db->where('parent', $id);
		return $this->db->delete('menu');
	}

}

/* End of file Mmenu.php */
/* Location: ./application/models/Mmenu.php */