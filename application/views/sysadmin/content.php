<?php if ($content == "dashboard") {
	$this->load->view('sysadmin/dashboard');
}elseif ($content == "tabel") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "menu") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "level-admin") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "admin") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "hak-akses") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "profil") {
	$this->load->view('sysadmin/profil');
}else if($content == 'profil-website'){
	$this->load->view('sysadmin/form');
}elseif ($content == "jenis-sampah") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "kategori-blog") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "blog") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "tambah-blog") {
	$this->load->view('sysadmin/form');
}elseif ($content == "edit-blog") {
	$this->load->view('sysadmin/form');
}elseif ($content == "nasabah") {
	$this->load->view('sysadmin/tabel');
}