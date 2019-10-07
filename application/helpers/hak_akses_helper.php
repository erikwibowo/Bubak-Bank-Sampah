<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('akses')){
	function akses($menu, $akses){
		$ci =& get_instance();
		$ci->load->model('Mhakakses');
		$level = $ci->session->userdata('id_level_admin');

		$data_hak_akses = $ci->Mhakakses->readAkses($level, $menu);
		//print_r($data_hak_akses->result());
		if ($data_hak_akses->num_rows() == 0) {
			$ci->session->set_flashdata('notif', 'Anda tidak mempunyai hak akses untuk melihat (READ) data '.$menu);
			$ci->session->set_flashdata('type', 'error');
			echo "<script> history.back() </script>";
			die();
		}else{
			foreach ($data_hak_akses->result() as $key) {
				$c = $key->c;
				$r = $key->r;
				$u = $key->u;
				$d = $key->d;

				if ($akses == 'r') {
					if ($r == 0) {
						$ci->session->set_flashdata('notif', 'Anda tidak mempunyai hak akses untuk melihat (READ) data '.$menu);
						$ci->session->set_flashdata('type', 'error');
						echo "<script> history.back() </script>";
						die();
					}
				}else if ($akses == 'c') {
					if ($c == 0) {
						$ci->session->set_flashdata('notif', 'Anda tidak mempunyai hak akses untuk membuat (CREATE) data '.$menu);
						$ci->session->set_flashdata('type', 'error');
						echo "<script> history.back() </script>";
						die();
					}
				}else if ($akses == 'u') {
					if ($u == 0) {
						$ci->session->set_flashdata('notif', 'Anda tidak mempunyai hak akses untuk mengubah (UPDATE) data '.$menu);
						$ci->session->set_flashdata('type', 'error');
						echo "<script> history.back() </script>";
						die();
					}
				}else if ($akses == 'd') {
					if ($d == 0) {
						$ci->session->set_flashdata('notif', 'Anda tidak mempunyai hak akses untuk menghapus (DELETE) data '.$menu);
						$ci->session->set_flashdata('type', 'error');
						echo "<script> history.back() </script>";
						die();
					}
				}
			}
		}
	}
}