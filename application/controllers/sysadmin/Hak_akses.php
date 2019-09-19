<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_akses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhakakses');
		$this->load->model('Madmin');
		$this->load->model('MlevelAdmin');
	}

	public function index(){
		$data['title']			= "Hak Akses - Admin Luwakode";
		$data['subtitle']		= "Hak Akses";
		$data['content']		= "hak-akses";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mhakakses->read()->result();
		$data['level']			= $this->MlevelAdmin->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		if ($this->Mhakakses->create($this->input->post())) {
			$this->session->set_flashdata('notif', 'Hak akses berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Hak akses gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/hak-akses','refresh');
	}

	public function delete($id){
		if ($this->Mhakakses->delete($id)) {
			$this->session->set_flashdata('notif', 'Hak akses berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Hak akses gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/hak-akses','refresh');
	}

}

/* End of file Hak_akses.php */
/* Location: ./application/controllers/sysadmin/Hak_akses.php */