<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_sampah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mjenis_sampah');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('jenis-sampah', 'r');
		$data['title']			= "Jenis Sampah - Admin ".web_info('nama_website');
		$data['subtitle']		= "Jenis Sampah";
		$data['content']		= "jenis-sampah";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mjenis_sampah->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('jenis-sampah', 'c');
		if ($this->Mjenis_sampah->create($this->input->post())) {
			$this->session->set_flashdata('notif', 'Jenis Sampah berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Jenis Sampah gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/jenis-sampah','refresh');
	}

	public function delete($id){
		akses('jenis-sampah', 'd');
		if ($this->Mjenis_sampah->delete($id)) {
			$this->session->set_flashdata('notif', 'Jenis Sampah berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Jenis Sampah gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/jenis-sampah','refresh');
	}

	public function update(){
		akses('jenis-sampah', 'u');
		if ($this->Mjenis_sampah->update($this->input->post(), $this->input->post('id_jenis_sampah'))) {
			$this->session->set_flashdata('notif', 'Jenis Sampah berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Jenis Sampah gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/jenis-sampah','refresh');
	}

}

/* End of file Jenis_sampah.php */
/* Location: ./application/controllers/sysadmin/Jenis_sampah.php */