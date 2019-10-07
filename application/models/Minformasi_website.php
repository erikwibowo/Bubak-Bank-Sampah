<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Minformasi_website extends CI_Model {

	public function read(){
		return $this->db->get('informasi_website');
	}

	public function update($data, $id){
		$this->db->where('id_informasi_website', $id);
		return $this->db->update('informasi_website', $data);
	}

}