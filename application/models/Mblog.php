<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mblog extends CI_Model {

	public function create($data){
		return $this->db->insert('blog', $data);
	}

	public function read(){
		$this->db->select('a.id_blog, a.judul_blog, a.isi_blog, a.foto_blog, a.thumb_blog, a.publish, b.id_kategori_blog, b.kategori_blog, c.id_admin, c.nama_admin, a.created_at as tanggal');
		$this->db->join('kategori_blog b', 'a.id_kategori_blog = b.id_kategori_blog');
		$this->db->join('admin c', 'a.id_admin = c.id_admin');
		return $this->db->get('blog a');
	}

	public function readById($id){
		$this->db->select('a.id_blog, a.judul_blog, a.isi_blog, a.foto_blog, a.thumb_blog, a.publish, b.id_kategori_blog, b.kategori_blog, c.id_admin, c.nama_admin, a.created_at as tanggal');
		$this->db->join('kategori_blog b', 'a.id_kategori_blog = b.id_kategori_blog');
		$this->db->join('admin c', 'a.id_admin = c.id_admin');
		$this->db->where('a.id_blog', $id);
		return $this->db->get('blog a');
	}

	public function update($data, $id){
		$this->db->where('id_blog', $id);
		return $this->db->update('blog', $data);
	}

	public function delete($id){
		$this->db->where('id_blog', $id);
		return $this->db->delete('blog');
	}

}

/* End of file Mblog.php */
/* Location: ./application/models/Mblog.php */