<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sysadminlogin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		
	}

	public function index(){
		$data['title'] = "Login Admin Luwakode";
		$this->load->view('login', $data);
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$response_key = $this->input->post('g-recaptcha-response');
		$secret_key = "6LdPCbkUAAAAAE30smSQVuEwKeaVa5ZBubGd3HYl";
		$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$response_key);

		$response = json_decode($verify);

		if ($response->success) {
			$auth = $this->Madmin->auth($username);

			if ($auth->num_rows() == 1) {
				foreach ($auth->result() as $row) {
					$pass = $row->password_admin;
					$aktif = $row->aktif;
				}
				if ($aktif == 1) {
					if (password_verify($password, $pass)) {
						foreach ($auth->result() as $key) {
							$data_session = array(
								'id_admin'			=> $key->id_admin,
								'username_admin'	=> $key->username_admin,
								'nama_admin'		=> $key->nama_admin,
								'foto_admin'		=> $key->foto_admin,
								'foto_admin_thumb'	=> $key->foto_admin_thumb,
								'level_admin'		=> $key->nama_level_admin,
								'login'				=> "berhasil"
							);
							$this->session->set_userdata($data_session);
							redirect('sysadmin','refresh');
						}
					}else{
						$this->session->set_flashdata('notif', 'Nama Pengguna & Kata sandi tidak cocok. Silahkan coba lagi.');
						$this->session->set_flashdata('type', 'error');
						redirect('sysadminlogin','refresh');
					}
				}else{
					$this->session->set_flashdata('notif', 'Akun anda telah dinonaktifkan. Silahkan hubungi administrator');
					$this->session->set_flashdata('type', 'error');
					redirect('sysadminlogin','refresh');
				}
				
			}else{
				$this->session->set_flashdata('notif', 'Nama Pengguna & Kata sandi tidak cocok. Silahkan coba lagi.');
				$this->session->set_flashdata('type', 'error');
				redirect('sysadminlogin','refresh');
			}
		}else{
			$this->session->set_flashdata('notif', 'Ups! Sepertinya anda bukan manusia');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function logout(){
		$data_session = array(
			'id_admin',
			'username_admin',
			'nama_admin',
			'foto_admin',
			'foto_admin_thumb',
			'level_Admin',
			'login'
		);
		$this->session->unset_userdata($data_session);
		redirect('sysadminlogin','refresh');
	}

}

/* End of file Sysadminlogin.php */
/* Location: ./application/controllers/Sysadminlogin.php */