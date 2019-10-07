<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mblog');
		$this->load->model('Mkategori_blog');

		if ($this->session->userdata('login') != 'berhasil') {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('blog', 'r');
		$data['title']			= 'Data Blog - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Data Blog';
		$data['content']		= 'blog';
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= '#';
		$data['data']			= $this->Mblog->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function tambah(){
		akses('blog', 'c');
		$data['title']			= 'Tambah Data Blog - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Tambah Data Blog';
		$data['content']		= 'tambah-blog';
		$data['jumlah']			= 2;
		$data['b1']				= 'Data Blog';
		$data['b1a']			= site_url('sysadmin/blog');
		$data['b2']				= $data['subtitle'];
		$data['b2a']			= '#';
		$data['kategori']		= $this->Mkategori_blog->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		echo json_encode($this->input->post());
	}

}