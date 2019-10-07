<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mkategori_blog');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('kategori-blog', 'r');
		$data['title']			= "Kategori Blog - Admin ".web_info('nama_website');
		$data['subtitle']		= "Kategori Blog";
		$data['content']		= "kategori-blog";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mkategori_blog->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('kategori-blog', 'c');
		if ($this->Mkategori_blog->create($this->input->post())) {
			$this->session->set_flashdata('notif', 'Kategori Blog berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Blog gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-blog','refresh');
	}

	public function delete($id){
		akses('kategori-blog', 'd');
		if ($this->Mkategori_blog->delete($id)) {
			$this->session->set_flashdata('notif', 'Kategori Blog berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Blog gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-blog','refresh');
	}

	public function update(){
		akses('kategori-blog', 'u');
		if ($this->Mkategori_blog->update($this->input->post(), $this->input->post('id_kategori_blog'))) {
			$this->session->set_flashdata('notif', 'Kategori Blog berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Blog gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-blog','refresh');
	}

}

/* End of file Kategori_blog.php */
/* Location: ./application/controllers/sysadmin/Kategori_blog.php */