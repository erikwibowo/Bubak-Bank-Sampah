<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfitur extends CI_Model {

	public function read(){
		return $this->db->get('fitur');
	}

	public function insert($data){
		return $this->db->insert('fitur', $data);
	}

	public function update($data, $id){
		$this->db->where('id_fitur', $id);
		return $this->db->update('fitur', $data);
	}

	public function delete($id){
		$this->db->where('id_fitur', $id);
		return $this->db->delete('fitur');
	}

	public function readById(){
		$this->db->where('id_fitur', $id);
		return $this->db->get('fitur');
	}

}

/* End of file Mfitur.php */
/* Location: ./application/models/Mfitur.php */