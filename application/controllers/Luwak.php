<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Luwak extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mprofil');
		$this->load->model('Mslider');
		$this->load->model('Mkeahlian');
		$this->load->model('Mkategoriportfolio');
		$this->load->model('Mportfolio');
		$this->load->model('Mlayanan');
		$this->load->model('Mclient');
		$this->load->model('Mtestimoni');
		$this->load->model('Mteam');
		$this->load->model('Mtentang');
		$this->load->model('Mfitur');
	}

	public function index(){
		$profil = $this->Mprofil->read()->result();
		foreach ($profil as $key) {
			$data['title']		= $key->nama;
			$data['subtitle']	= $key->nama_singkat;
			$data['deskripsi']	= $key->deskripsi;
			$data['alamat']		= $key->alamat;
			$data['telepon']	= $key->telepon;
			$data['email']		= $key->email;
			$data['logo']		= $key->logo;
			$data['facebook']	= $key->facebook;
			$data['twitter']	= $key->twitter;
			$data['instagram']	= $key->instagram;
		}

		$data['slider']			= $this->Mslider->readAktif()->result();
		$data['keahlian']		= $this->Mkeahlian->read()->result();
		$data['kategori']		= $this->Mkategoriportfolio->read()->result();
		$data['portfolio']		= $this->Mportfolio->read()->result();
		$data['pelatohan']		= $this->Mportfolio->readByKat(4)->result();
		$data['design']			= $this->Mportfolio->readByKat(3)->result();
		$data['layanan']		= $this->Mlayanan->read()->result();
		$data['client']			= $this->Mclient->read()->result();
		$data['testimoni']		= $this->Mtestimoni->read()->result();
		$data['team']			= $this->Mteam->read()->result();
		$data['tentang']		= $this->Mtentang->read()->result();
		$data['fitur']			= $this->Mfitur->read()->result();

		$b = time();
		$hour = date("G",$b);

		if ($hour>=0 && $hour<=11){
			$data['waktu'] =  "Selamat pagi ";
		}elseif ($hour >=12 && $hour<=14){
			$data['waktu'] =  "Selamat siang ";
		}elseif ($hour >=15 && $hour<=17){
			$data['waktu'] =  "Selamat sore ";
		}elseif ($hour >=17 && $hour<=18){
			$data['waktu'] =  "Selamat petang ";
		}elseif ($hour >=19 && $hour<=23){
			$data['waktu'] =  "Selamat malam ";
		}

		$this->load->view('user/index', $data);
	}

}

/* End of file Luwak.php */
/* Location: ./application/controllers/Luwak.php */