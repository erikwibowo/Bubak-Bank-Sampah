<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mnasabah');
		$this->load->model('Mjenis_sampah');
		$this->load->model('Mtransaksi');
		
		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
		
	}

	public function index(){
		$data['title']			= "Dashboard - Admin ".web_info('nama_website');
		$data['subtitle']		= "Dashboard";
		$data['content']		= "dashboard";
		$data['dashboard']		= "active";
		$data['nasabah']		= $this->Mnasabah->read()->result();
		$data['jenis_sampah']	= $this->Mjenis_sampah->read()->result();
		$data['jtransaksi']		= $this->Mtransaksi->read()->num_rows();
		$data['jnasabah']		= $this->Mnasabah->read()->num_rows();
		$data['jdebet']			= $this->Mtransaksi->readByJenis("Debet")->num_rows();
		$data['jkredit']		= $this->Mtransaksi->readByJenis("Kredit")->num_rows();
		$this->load->view('sysadmin/index', $data);
	}

	public function tabel(){
		$data['title']			= "Tabel - Admin ".web_info('nama_website');
		$data['subtitle']		= "Tabel";
		$data['content']		= "tabel";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['tabel']			= "active";
		$this->load->view('sysadmin/index', $data);
	}

	public function form(){
		$data['title']			= "Form - Admin ".web_info('nama_website');
		$data['subtitle']		= "Form";
		$data['content']		= "form";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['form']			= "active";
		$this->load->view('sysadmin/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/sysadmin/Dashboard.php */