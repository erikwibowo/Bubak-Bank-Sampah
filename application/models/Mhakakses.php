<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhakakses extends CI_Model {

	public function read(){
		$this->db->select('a.id_hak_akses, b.id_level_admin, c.id_menu, b.nama_level_admin, c.nama_menu, a.c, a.r, a.u, a.d, a.created_at, a.updated_at');
		$this->db->join('level_admin b', 'b.id_level_admin = a.id_level_admin');
		$this->db->join('menu c', 'c.id_menu = a.id_menu');
		return $this->db->get('hak_akses a');
	}

	public function readById($id){
		$this->db->select('a.id_hak_akses, b.id_level_admin, c.id_menu, b.nama_level_admin, c.nama_menu, a.c, a.r, a.u, a.d, a.created_at, a.updated_at');
		$this->db->join('level_admin b', 'b.id_level_admin = a.id_level_admin');
		$this->db->join('menu c', 'c.id_menu = a.id_menu');
		$this->db->where('a.id_hak_akses', $id);
		return $this->db->get('hak_akses a');
	}

	public function readAkses($id_level_admin, $url_menu){
		$this->db->select('a.id_hak_akses, b.id_level_admin, c.id_menu, b.nama_level_admin, c.nama_menu, a.c, a.r, a.u, a.d, a.created_at, a.updated_at');
		$this->db->join('level_admin b', 'b.id_level_admin = a.id_level_admin');
		$this->db->join('menu c', 'c.id_menu = a.id_menu');
		$this->db->where('b.id_level_admin', $id_level_admin);
		$this->db->where('c.url_menu', $url_menu);
		return $this->db->get('hak_akses a');
	}

	public function create($data){
		return $this->db->insert('hak_akses', $data);
	}

	public function update($data, $id){
		$this->db->where('id_hak_akses', $id);
		return $this->db->update('hak_akses', $data);
	}

	public function delete($id){
		$this->db->where('id_hak_akses', $id);
		return $this->db->delete('hak_akses');
	}

}

/* End of file Mhakakses.php */
/* Location: ./application/models/Mhakakses.php */