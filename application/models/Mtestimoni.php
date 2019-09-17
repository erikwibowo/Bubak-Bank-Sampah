<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtestimoni extends CI_Model {

	public function read(){
		return $this->db->get('testimoni');
	}

	public function insert($data){
		return $this->db->insert('testimoni', $data);
	}

	public function update($data, $id){
		$this->db->where('id_testimoni', $id);
		return $this->db->update('testimoni', $data);
	}

	public function delete($id){
		$this->db->where('id_testimoni', $id);
		return $this->db->delete('testimoni');
	}

	public function readById(){
		$this->db->where('id_testimoni', $id);
		return $this->db->get('testimoni');
	}

}

/* End of file Mtestimoni.php */
/* Location: ./application/models/Mtestimoni.php */