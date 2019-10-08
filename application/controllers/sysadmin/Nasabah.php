<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mnasabah');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('nasabah', 'r');
		$data['title']			= "Nasabah - Admin ".web_info('nama_website');
		$data['subtitle']		= "Nasabah";
		$data['content']		= "nasabah";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mnasabah->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('nasabah', 'c');
		$data = array(
			'nik_nasabah'				=> $this->input->post('nik_nasabah'),
			'nama_nasabah'				=> $this->input->post('nama_nasabah'),
			'jk_nasabah'				=> $this->input->post('jk_nasabah'),
			'tempat_lahir_nasabah'		=> $this->input->post('tempat_lahir_nasabah'),
			'tgl_lahir_nasabah'			=> date("Y-m-d", strtotime($this->input->post('tgl_lahir_nasabah'))),
			'alamat_nasabah'			=> $this->input->post('alamat_nasabah'),
			'no_hp_nasabah'				=> $this->input->post('no_hp_nasabah'),
			'password_nasabah'			=> password_hash($this->input->post('password_nasabah'), PASSWORD_DEFAULT),
			'status'					=> $this->input->post('status'),
		);
		if ($this->Mnasabah->create($data)) {
			$this->session->set_flashdata('notif', 'Nasabah berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Nasabah gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/nasabah','refresh');
	}

	public function update(){
		akses('nasabah', 'u');
		if (!empty($this->input->post('password_nasabah'))) {
			$data = array(
				'nik_nasabah'				=> $this->input->post('nik_nasabah'),
				'nama_nasabah'				=> $this->input->post('nama_nasabah'),
				'jk_nasabah'				=> $this->input->post('jk_nasabah'),
				'tempat_lahir_nasabah'		=> $this->input->post('tempat_lahir_nasabah'),
				'tgl_lahir_nasabah'			=> date("Y-m-d", strtotime($this->input->post('tgl_lahir_nasabah'))),
				'alamat_nasabah'			=> $this->input->post('alamat_nasabah'),
				'no_hp_nasabah'				=> $this->input->post('no_hp_nasabah'),
				'password_nasabah'			=> password_hash($this->input->post('password_nasabah'), PASSWORD_DEFAULT),
				'status'					=> $this->input->post('status'),
			);
		}else{
			$data = array(
				'nik_nasabah'				=> $this->input->post('nik_nasabah'),
				'nama_nasabah'				=> $this->input->post('nama_nasabah'),
				'jk_nasabah'				=> $this->input->post('jk_nasabah'),
				'tempat_lahir_nasabah'		=> $this->input->post('tempat_lahir_nasabah'),
				'tgl_lahir_nasabah'			=> date("Y-m-d", strtotime($this->input->post('tgl_lahir_nasabah'))),
				'alamat_nasabah'			=> $this->input->post('alamat_nasabah'),
				'no_hp_nasabah'				=> $this->input->post('no_hp_nasabah'),
				'status'					=> $this->input->post('status'),
			);
			}
		if ($this->Mnasabah->update($data, $this->input->post('id_nasabah'))) {
			$this->session->set_flashdata('notif', 'Nasabah berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Nasabah gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/nasabah','refresh');
	}

	public function delete($id){
		if ($this->Mnasabah->delete($id)) {
			$this->session->set_flashdata('notif', 'Nasabah berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Nasabah gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/nasabah','refresh');
	}

}

/* End of file Nasabah.php */
/* Location: ./application/controllers/sysadmin/Nasabah.php */