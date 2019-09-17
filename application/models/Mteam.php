<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mteam extends CI_Model {

	public function read(){
		return $this->db->get('team');
	}

	public function insert($data){
		return $this->db->insert('team', $data);
	}

	public function update($data, $id){
		$this->db->where('id_team', $id);
		return $this->db->update('team', $data);
	}

	public function delete($id){
		$this->db->where('id_team', $id);
		return $this->db->delete('team');
	}

	public function readById(){
		$this->db->where('id_team', $id);
		return $this->db->get('team');
	}

}

/* End of file Mteam.php */
/* Location: ./application/models/Mteam.php */