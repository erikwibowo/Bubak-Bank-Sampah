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
		akses($this->session->userdata('id_level_admin'), 'hak-akses', 'r');
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
		//echo json_encode($this->input->post()); die();
		akses($this->session->userdata('id_level_admin'), 'hak-akses', 'c');
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
		akses($this->session->userdata('id_level_admin'), 'hak-akses', 'd');
		if ($this->Mhakakses->delete($id)) {
			$this->session->set_flashdata('notif', 'Hak akses berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Hak akses gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/hak-akses','refresh');
	}

	public function update(){
		akses($this->session->userdata('id_level_admin'), 'hak-akses', 'u');

		$data = array(
			'c'					=> $this->input->post('c') == null ? 0:$this->input->post('c'),
			'r'					=> $this->input->post('r') == null ? 0:$this->input->post('r'),
			'u'					=> $this->input->post('u') == null ? 0:$this->input->post('u'),
			'd'					=> $this->input->post('d') == null ? 0:$this->input->post('d'),
		);

		//echo json_encode($data); die();
		$id = $this->input->post('id_hak_akses');
		if ($this->Mhakakses->update($data, $id)) {
			$this->session->set_flashdata('notif', 'Hak akses berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Hak akses gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/hak-akses','refresh');
	}

	public function data_hak_akses(){
		$id = $this->input->post('id');
		echo json_encode($this->Mhakakses->readById($id)->result());
	}

}

/* End of file Hak_akses.php */
/* Location: ./application/controllers/sysadmin/Hak_akses.php */