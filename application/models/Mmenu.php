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

	public function readByAdmin($id_level_admin){
		return $this->db->query("SELECT id_menu, nama_menu from menu WHERE id_menu NOT IN (SELECT id_menu from hak_akses WHERE id_level_admin = '$id_level_admin') ORDER BY nama_menu");
	}

	public function readParent(){
		$type_menu = array('P', 'S');
		$this->db->where_in('type_menu', $type_menu);
		$this->db->order_by('nama_menu', 'asc');
		return $this->db->get('menu');
	}

	public function readParentHakAkses($id_level_admin){
		$type_menu = array('P', 'S');
		$this->db->join('hak_akses b', 'a.id_menu = b.id_menu');
		$this->db->where_in('a.type_menu', $type_menu);
		$this->db->where('b.id_level_admin', $id_level_admin);
		$this->db->order_by('a.nama_menu', 'asc');
		return $this->db->get('menu a');
	}

	public function readChild($parent){
		$this->db->where('type_menu', 'C');
		$this->db->where('parent', $parent);
		$this->db->order_by('nama_menu', 'asc');
		return $this->db->get('menu');
	}

	public function readChildHakAkses($id_level_admin, $parent){
		$this->db->join('hak_akses b', 'a.id_menu = b.id_menu');
		$this->db->where('a.type_menu', 'C');
		$this->db->where('a.parent', $parent);
		$this->db->where('b.id_level_admin', $id_level_admin);
		$this->db->order_by('a.nama_menu', 'asc');
		return $this->db->get('menu a');
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