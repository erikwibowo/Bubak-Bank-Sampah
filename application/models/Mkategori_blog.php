<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkategori_blog extends CI_Model {

	public function create($data){
		return $this->db->insert('kategori_blog', $data);
	}

	public function read(){
		return $this->db->get('kategori_blog');
	}

	public function readById($id){
		$this->db->where('id_kategori_blog', $id);
		return $this->db->get('kategori_blog');
	}

	public function update($data, $id){
		$this->db->where('id_kategori_blog', $id);
		return $this->db->update('kategori_blog', $data);
	}

	public function delete($id){
		$this->db->where('id_kategori_blog', $id);
		return $this->db->delete('kategori_blog');
	}

}

/* End of file Mkategori_blog.php */
/* Location: ./application/controllers/sysadmin/Mkategori_blog.php */