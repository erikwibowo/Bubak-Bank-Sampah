<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mnasabah extends CI_Model {

	public function create($data){
		return $this->db->insert('nasabah', $data);
	}

	public function read(){
		return $this->db->get('nasabah');
	}

	public function readById($id){
		$this->db->where('id_nasabah', $id);
		return $this->db->get('nasabah');
	}

	public function update($data, $id){
		$this->db->where('id_nasabah', $id);
		return $this->db->update('nasabah', $data);
	}

	public function delete($id){
		$this->db->where('id_nasabah', $id);
		return $this->db->delete('nasabah');
	}

}

/* End of file Mnasabah.php */
/* Location: ./application/models/Mnasabah.php */