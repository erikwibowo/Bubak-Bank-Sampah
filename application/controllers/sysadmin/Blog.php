<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


			public function __construct(){
parent::__construct();$this->load->model('Mblog');

if ($this->session->userdata('login') != 'berhasil') {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
			}
}public function index(){
			akses($this->session->userdata('id_level_admin'), 'blog', 'r');
			$data['title']			= 'Data Blog - Admin Luwakode';
			$data['subtitle']		= 'Data Blog';
			$data['content']		= 'blog';
			$data['jumlah']			= 1;
			$data['b1']				= $data['subtitle'];
			$data['b1a']			= '#';
			$data['data']			= '';
			$this->load->view('sysadmin/index', $data);
			}

}