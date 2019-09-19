<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('MlevelAdmin');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		$data['title']			= "Admin - Admin Luwakode";
		$data['subtitle']		= "Admin";
		$data['content']		= "admin";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Madmin->read()->result();
		$data['level']			= $this->MlevelAdmin->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function data_admin(){
		$id = $this->input->post('id');
		echo json_encode($this->Madmin->readById($id)->result());
	}

	public function create(){
		//echo json_encode($_FILES); die();
		$nm_file = "admin_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/admin/source/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
        $this->upload->initialize($config);

        if(isset($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
        		//echo "Foto ada"; die();
                $data_upload = $this->upload->data();
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/admin/source/'.$data_upload['file_name'],
                    'new_image' => './files/admin/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => true,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );

                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();

                $data = array(
					'nama_admin'		=> $this->input->post('nama_admin'),
					'username_admin'	=> $this->input->post('username_admin'),
					'password_admin'	=> password_hash($this->input->post('password_admin'), PASSWORD_DEFAULT),
					'foto_admin'    	=> $data_upload['file_name'],
                    'foto_admin_thumb'	=> $nm_file.'_thumb'.$data_upload['file_ext'],
					'id_level_admin'	=> $this->input->post('id_level_admin')
				);
            }else{
        		//echo "Foto tidak ada"; die();
                $data = array(
					'nama_admin'	=> $this->input->post('nama_admin'),
					'username_admin'	=> $this->input->post('username_admin'),
					'password_admin'	=> password_hash($this->input->post('password_admin'), PASSWORD_DEFAULT),
					'id_level_admin'	=> $this->input->post('id_level_admin')
				);
            }
        }
		if ($this->Madmin->create($data)) {
			$this->session->set_flashdata('notif', 'Admin berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

	public function update(){
		//echo json_encode($this->input->post());
		//echo json_encode($_FILES); die();
		$nm_file = "admin_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/admin/source/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
        $this->upload->initialize($config);

        if(isset($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
        		//echo "Foto ada"; die();
                $data_upload = $this->upload->data();
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/admin/source/'.$data_upload['file_name'],
                    'new_image' => './files/admin/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => true,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );

                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();

                if (empty($this->input->post('password_admin'))) {
					$data = array(
						'nama_admin'		=> $this->input->post('nama_admin'),
						'username_admin'	=> $this->input->post('username_admin'),
						'foto_admin'    	=> $data_upload['file_name'],
	                    'foto_admin_thumb'	=> $nm_file.'_thumb'.$data_upload['file_ext'],
						'id_level_admin'	=> $this->input->post('id_level_admin')
					);
				}else{
					$data = array(
						'nama_admin'		=> $this->input->post('nama_admin'),
						'username_admin'	=> $this->input->post('username_admin'),
						'password_admin'	=> password_hash($this->input->post('password_admin'), PASSWORD_DEFAULT),
						'foto_admin'    	=> $data_upload['file_name'],
	                    'foto_admin_thumb'	=> $nm_file.'_thumb'.$data_upload['file_ext'],
						'id_level_admin'	=> $this->input->post('id_level_admin')
					);
				}
				if ($this->Madmin->update($data, $this->input->post('id_admin'))) {
					$path_foto = "./files/admin/source/";
					$path_thumb = "./files/admin/thumb/";
					unlink($path_foto.$this->input->post('foto_admin'));
					unlink($path_thumb.$this->input->post('foto_admin_thumb'));
					$this->session->set_flashdata('notif', 'Admin berhasil disimpan');
					$this->session->set_flashdata('type', 'success');
				}else{
					$this->session->set_flashdata('notif', 'Admin gagal disimpan');
					$this->session->set_flashdata('type', 'error');
				}

            }else{
        		//echo "Foto tidak ada"; die();
                if (empty($this->input->post('password_admin'))) {
					$data = array(
						'nama_admin'		=> $this->input->post('nama_admin'),
						'username_admin'	=> $this->input->post('username_admin'),
						'id_level_admin'	=> $this->input->post('id_level_admin')
					);
				}else{
					$data = array(
						'nama_admin'		=> $this->input->post('nama_admin'),
						'username_admin'	=> $this->input->post('username_admin'),
						'password_admin'	=> password_hash($this->input->post('password_admin'), PASSWORD_DEFAULT),
						'id_level_admin'	=> $this->input->post('id_level_admin')
					);
				}
				if ($this->Madmin->update($data, $this->input->post('id_admin'))) {
					$this->session->set_flashdata('notif', 'Admin berhasil disimpan');
					$this->session->set_flashdata('type', 'success');
				}else{
					$this->session->set_flashdata('notif', 'Admin gagal disimpan');
					$this->session->set_flashdata('type', 'error');
				}
            }
        }else{
        	$this->session->set_flashdata('notif', 'Ada yang salah nih');
			$this->session->set_flashdata('type', 'error');
        }
		redirect('sysadmin/admin','refresh');
	}

	public function aktifkan($id){
		//echo json_encode($this->input->post());
		$data = array(
			'aktif'	=> 1
		);
		if ($this->Madmin->update($data, $id)) {
			$this->session->set_flashdata('notif', 'Admin berhasil diaktifkan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal diaktifkan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

	public function nonaktifkan($id){
		//echo json_encode($this->input->post());
		$data = array(
			'aktif'	=> 0
		);
		if ($this->Madmin->update($data, $id)) {
			$this->session->set_flashdata('notif', 'Admin berhasil nonaktifkan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal nonaktifkan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

	public function delete(){
		//echo json_encode($this->input->post());
		$id = $this->input->get('id');
		$foto = $this->input->get('foto');
		$thumb = $this->input->get('thumb');
		$path_foto = "./files/admin/source/";
		$path_thumb = "./files/admin/thumb/";
		if ($this->Madmin->delete($id)) {
			unlink($path_foto.$foto);
			unlink($path_thumb.$thumb);
			$this->session->set_flashdata('notif', 'Admin berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Admin gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/admin','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/sysadmin/Admin.php */