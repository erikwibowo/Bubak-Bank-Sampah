<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MlevelAdmin extends CI_Model {

	public function create($data){
		return $this->db->insert('tb_level_admin', $data);
	}

	public function read(){
		return $this->db->get('tb_level_admin');
	}

	public function readById($id){
		$this->db->where('id_level_admin', $id);
		return $this->db->get('tb_level_admin');
	}

	public function update($data, $id){
		$this->db->where('id_level_admin', $id);
		return $this->db->update('tb_level_admin', $data);
	}

	public function delete($id){
		$this->db->where('id_level_admin', $id);
		return $this->db->delete('tb_level_admin');
	}

}

/* End of file MlevelAdmin.php */
/* Location: ./application/models/MlevelAdmin.php */