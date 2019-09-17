<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlayanan extends CI_Model {

	public function read(){
		return $this->db->get('layanan');
	}

	public function insert($data){
		return $this->db->insert('layanan', $data);
	}

	public function update($data, $id){
		$this->db->where('id_layanan', $id);
		return $this->db->update('layanan', $data);
	}

	public function delete($id){
		$this->db->where('id_layanan', $id);
		return $this->db->delete('layanan');
	}

	public function readById(){
		$this->db->where('id_layanan', $id);
		return $this->db->get('layanan');
	}

}

/* End of file Mlayanan.php */
/* Location: ./application/models/Mlayanan.php */