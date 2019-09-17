<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mslider extends CI_Model {

	public function read(){
		return $this->db->get('slider');
	}

	public function insert($data){
		return $this->db->insert('slider', $data);
	}

	public function update($data, $id){
		$this->db->where('id_slider', $id);
		return $this->db->update('slider', $data);
	}

	public function delete($id){
		$this->db->where('id_slider', $id);
		return $this->db->delete('slider');
	}

	public function readById(){
		$this->db->where('id_slider', $id);
		return $this->db->get('slider');
	}

	public function readAktif(){
		$this->db->where('aktif', 1);
		return $this->db->get('slider');
	}

}

/* End of file Mslider.php */
/* Location: ./application/models/Mslider.php */