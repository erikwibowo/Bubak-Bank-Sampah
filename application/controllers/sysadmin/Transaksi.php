<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mtransaksi');
		$this->load->model('Mnasabah');
		$this->load->model('Mjenis_sampah');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('transaksi', 'r');
		$data['title']			= "Transaksi - Admin ".web_info('nama_website');
		$data['subtitle']		= "Transaksi";
		$data['content']		= "transaksi";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mtransaksi->read()->result();
		$data['nasabah']		= $this->Mnasabah->read()->result();
		$data['jenis_sampah']	= $this->Mjenis_sampah->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('transaksi', 'c');
		if ($this->Mtransaksi->create($this->input->post())) {
			$this->session->set_flashdata('notif', 'Transaksi berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Transaksi gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin','refresh');
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/sysadmin/Transaksi.php */