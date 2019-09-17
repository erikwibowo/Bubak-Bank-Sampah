<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mmenu');
	}

	public function index(){
		$data['title']			= "Menu - Admin Luwakode";
		$data['subtitle']		= "Menu";
		$data['content']		= "menu";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['master_data']	= "active";
		$data['menu']			= "active";
		$data['data']			= $this->Mmenu->readParent()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		//echo json_encode($this->input->post());
		if ($this->Mmenu->create($this->input->post())) {
			$this->session->set_flashdata('notif', 'Menu berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Menu gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/menu','refresh');
	}

	public function update(){
		//echo json_encode($this->input->post());
		if ($this->Mmenu->update($this->input->post(), $this->input->post('id_menu'))) {
			$this->session->set_flashdata('notif', 'Menu berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Menu gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/menu','refresh');
	}

	public function delete($id){
		//echo json_encode($this->input->post());
		if ($this->Mmenu->delete($id)) {
			$this->Mmenu->deleteChild($id);
			$this->session->set_flashdata('notif', 'Menu berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Menu gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/menu','refresh');
	}

	public function data_menu(){
		$id_menu = $this->input->post('id');
		echo json_encode($this->Mmenu->readById($id_menu)->result());
	}

}

/* End of file Menu.php */
/* Location: ./application/controllers/sysadmin/Menu.php */