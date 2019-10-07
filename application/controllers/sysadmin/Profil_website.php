<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_website extends CI_Controller {
	public function __construct(){
		parent::__construct();$this->load->model('Mprofil');

		if ($this->session->userdata('login') != 'berhasil') {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('profil-website', 'r');
		$data['title']			= 'Data Informasi website - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Data Informasi website';
		$data['content']		= 'profil-website';
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= '#';
		$data['data']			= '';
		$this->load->view('sysadmin/index', $data);
	}

	public function update(){
		akses('profil-website', 'u');
		// echo json_encode($this->input->post()); die();
		if ($this->Mprofil->update($this->input->post(), $this->input->post('id_profil'))) {
			$this->session->set_flashdata('notif', 'Informasi berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Informasi gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/profil-website','refresh');
	}

}