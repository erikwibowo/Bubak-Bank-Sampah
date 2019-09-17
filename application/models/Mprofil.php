<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofil extends CI_Model {

	public function read(){
		return $this->db->get('profil');
	}

	public function insert($data){
		return $this->db->insert('profil', $data);
	}

	public function update($data, $id){
		$this->db->where('id_profil', $id);
		return $this->db->update('profil', $data);
	}

	public function delete($id){
		$this->db->where('id_profil', $id);
		return $this->db->delete('profil');
	}

	public function readById(){
		$this->db->where('id_profil', $id);
		return $this->db->get('profil');
	}

}

/* End of file Mpofil.php */
/* Location: ./application/models/Mpofil.php */