<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('MlevelAdmin');
	}

	public function index(){
		$data['title']			= "Admin - Admin Luwakode";
		$data['subtitle']		= "Admin";
		$data['content']		= "admin";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['master_data']	= "active";
		$data['menu']			= "active";
		$data['data']			= $this->Madmin->read()->result();
		$data['level']			= $this->MlevelAdmin->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function data_admin(){
		$id = $this->input->post('id');
		echo json_encode($this->Madmin->readById($id)->result());
	}

	public function create(){
		//echo json_encode($this->input->post());
		$data = array(
			'nama_admin'	=> $this->input->post('nama_admin'),
			'username_admin'	=> $this->input->post('username_admin'),
			'password_admin'	=> password_hash($this->input->post('password_admin'), PASSWORD_DEFAULT),
			'id_level_admin'	=> $this->input->post('id_level_admin')
		);
		if ($this->Madmin->create($data)) {
			$this->session->set_flashdata('notif', 'Admin berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

	public function update(){
		//echo json_encode($this->input->post());
		if (empty($this->input->post('password_admin'))) {
			$data = array(
				'nama_admin'	=> $this->input->post('nama_admin'),
				'username_admin'	=> $this->input->post('username_admin'),
				'id_level_admin'	=> $this->input->post('id_level_admin')
			);
		}else{
			$data = array(
				'nama_admin'	=> $this->input->post('nama_admin'),
				'username_admin'	=> $this->input->post('username_admin'),
				'password_admin'	=> password_hash($this->input->post('password_admin'), PASSWORD_DEFAULT),
				'id_level_admin'	=> $this->input->post('id_level_admin')
			);
		}
		if ($this->Madmin->update($data, $this->input->post('id_admin'))) {
			$this->session->set_flashdata('notif', 'Admin berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

	public function aktifkan($id){
		//echo json_encode($this->input->post());
		$data = array(
			'aktif'	=> 1
		);
		if ($this->Madmin->update($data, $id)) {
			$this->session->set_flashdata('notif', 'Admin berhasil diaktifkan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal diaktifkan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

	public function nonaktifkan($id){
		//echo json_encode($this->input->post());
		$data = array(
			'aktif'	=> 0
		);
		if ($this->Madmin->update($data, $id)) {
			$this->session->set_flashdata('notif', 'Admin berhasil nonaktifkan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal nonaktifkan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

	public function delete($id){
		//echo json_encode($this->input->post());
		if ($this->Madmin->delete($id)) {
			$this->session->set_flashdata('notif', 'Admin berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/sysadmin/Admin.php */