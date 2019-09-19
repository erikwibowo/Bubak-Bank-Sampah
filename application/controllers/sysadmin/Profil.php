<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index(){
		$data['title']			= "Profil - Admin Luwakode";
		$data['subtitle']		= "Profil";
		$data['content']		= "profil";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$this->load->view('sysadmin/index', $data);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/sysadmin/Profil.php */