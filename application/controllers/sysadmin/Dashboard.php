<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['title']			= "Dashboard - Admin Luwakode";
		$data['subtitle']		= "Dashboard";
		$data['content']		= "dashboard";
		$data['dashboard']		= "active";
		$this->load->view('sysadmin/index', $data);
	}

	public function tabel(){
		$data['title']			= "Tabel - Admin Luwakode";
		$data['subtitle']		= "Tabel";
		$data['content']		= "tabel";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['tabel']			= "active";
		$this->load->view('sysadmin/index', $data);
	}

	public function form(){
		$data['title']			= "Form - Admin Luwakode";
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