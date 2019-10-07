<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('web_info')){
	function web_info($a){
		$ci =& get_instance();
		$ci->load->model('Mprofil');
		foreach ($ci->Mprofil->read()->result() as $key) {
			$id_informasi_website		= $key->id_profil;
			$nama_website				= $key->nama_singkat;
			$nama_lengkap_website		= $key->nama;
			$logo_website				= $key->logo;
			$deskripsi					= $key->deskripsi;
			$alamat						= $key->alamat;
			$email						= $key->email;
			$telepon					= $key->telepon;
			$facebook					= $key->facebook;
			$instagram					= $key->instagram;
			$twitter					= $key->twitter;
		}
		if ($a == "nama_website") {
			return $nama_website;	
		}else if($a == "nama_lengkap_website"){
			return $nama_lengkap_website;
		}else if($a == "logo_website"){
			return $logo_website;
		}else if($a == "id_informasi_website"){
			return $id_informasi_website;
		}else if($a == "deskripsi"){
			return $deskripsi;
		}else if($a == "alamat"){
			return $alamat;
		}else if($a == "email"){
			return $email;
		}else if($a == "telepon"){
			return $telepon;
		}else if($a == "facebook"){
			return $facebook;
		}else if($a == "instagram"){
			return $instagram;
		}else if($a == "twitter"){
			return $twitter;
		}else{
			return "Parameter salah web_info()";
		}
	}
}