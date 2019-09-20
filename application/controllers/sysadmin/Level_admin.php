<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MlevelAdmin');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses($this->session->userdata('id_level_admin'), 'level-admin', 'r');
		$data['title']			= "Level Admin - Admin Luwakode";
		$data['subtitle']		= "Level Admin";
		$data['content']		= "level-admin";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->MlevelAdmin->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function data_level(){
		$id = $this->input->post('id');
		echo json_encode($this->MlevelAdmin->readById($id)->result());
	}

	public function create(){
		akses($this->session->userdata('id_level_admin'), 'level-admin', 'c');
		//echo json_encode($this->input->post());
		if ($this->MlevelAdmin->create($this->input->post())) {
			$this->session->set_flashdata('notif', 'Level Admin berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Level Admin gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/level-admin','refresh');
	}

	public function update(){
		akses($this->session->userdata('id_level_admin'), 'level-admin', 'u');
		//echo json_encode($this->input->post());
		if ($this->MlevelAdmin->update($this->input->post(), $this->input->post('id_level_admin'))) {
			$this->session->set_flashdata('notif', 'Level Admin berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Level Admin gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/level-admin','refresh');
	}

	public function delete($id){
		akses($this->session->userdata('id_level_admin'), 'level-admin', 'd');
		//echo json_encode($this->input->post());
		if ($this->MlevelAdmin->delete($id)) {
			$this->session->set_flashdata('notif', 'Level Admin berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Level Admin gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/level-admin','refresh');
	}

}

/* End of file Level_admin.php */
/* Location: ./application/controllers/sysadmin/Level_admin.php */