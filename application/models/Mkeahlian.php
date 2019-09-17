<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkeahlian extends CI_Model {

	public function read(){
		return $this->db->get('keahlian');
	}

	public function insert($data){
		return $this->db->insert('keahlian', $data);
	}

	public function update($data, $id){
		$this->db->where('id_keahlian', $id);
		return $this->db->update('keahlian', $data);
	}

	public function delete($id){
		$this->db->where('id_keahlian', $id);
		return $this->db->delete('keahlian');
	}

	public function readById(){
		$this->db->where('id_keahlian', $id);
		return $this->db->get('keahlian');
	}

}

/* End of file Mkeahlian.php */
/* Location: ./application/models/Mkeahlian.php */