<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mclient extends CI_Model {

	public function read(){
		return $this->db->get('client');
	}

	public function insert($data){
		return $this->db->insert('client', $data);
	}

	public function update($data, $id){
		$this->db->where('id_client', $id);
		return $this->db->update('client', $data);
	}

	public function delete($id){
		$this->db->where('id_client', $id);
		return $this->db->delete('client');
	}

	public function readById(){
		$this->db->where('id_client', $id);
		return $this->db->get('client');
	}

}

/* End of file Mclient.php */
/* Location: ./application/models/Mclient.php */