<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mblog');
		$this->load->model('Mkategori_blog');

		if ($this->session->userdata('login') != 'berhasil') {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('blog', 'r');
		$data['title']			= 'Data Blog - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Data Blog';
		$data['content']		= 'blog';
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= '#';
		$data['data']			= $this->Mblog->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function tambah(){
		akses('blog', 'c');
		$data['title']			= 'Tambah Data Blog - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Tambah Data Blog';
		$data['content']		= 'tambah-blog';
		$data['jumlah']			= 2;
		$data['b1']				= 'Data Blog';
		$data['b1a']			= site_url('sysadmin/blog');
		$data['b2']				= $data['subtitle'];
		$data['b2a']			= '#';
		$data['kategori']		= $this->Mkategori_blog->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('blog', 'c');
		//echo json_encode($_FILES); die();
		$nm_file = "blog_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/blog/source/'; //folder untuk meyimpan foto
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
                    'source_image' => './files/blog/source/'.$data_upload['file_name'],
                    'new_image' => './files/blog/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => true,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );

                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();

                $data = array(
					'id_kategori_blog'	=> $this->input->post('id_kategori_blog'),
					'judul_blog'		=> $this->input->post('judul_blog'),
					'isi_blog'			=> $this->input->post('isi_blog'),
					'foto_blog'	    	=> $data_upload['file_name'],
                    'thumb_blog'	=> $nm_file.'_thumb'.$data_upload['file_ext'],
					'publish'			=> $this->input->post('publish'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
            }else{
        		//echo "Foto tidak ada"; die();
                $data = array(
					'id_kategori_blog'	=> $this->input->post('id_kategori_blog'),
					'judul_blog'		=> $this->input->post('judul_blog'),
					'isi_blog'			=> $this->input->post('isi_blog'),
					'publish'			=> $this->input->post('publish'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
            }
        }
		if ($this->Mblog->create($data)) {
			$this->session->set_flashdata('notif', 'Blog berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Blog gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/blog','refresh');
	}

	public function edit($id){
		akses('blog', 'u');
		$data['title']			= 'Edit Data Blog - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Edit Data Blog';
		$data['content']		= 'edit-blog';
		$data['jumlah']			= 2;
		$data['b1']				= 'Data Blog';
		$data['b1a']			= site_url('sysadmin/blog');
		$data['b2']				= $data['subtitle'];
		$data['b2a']			= '#';
		$data['kategori']		= $this->Mkategori_blog->read()->result();
		$data['blog']			= $this->Mblog->readById($id)->row_array();
		$this->load->view('sysadmin/index', $data);
	}

	public function update(){
		akses('blog', 'u');
		//echo json_encode($_FILES); die();
		$nm_file = "blog_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/blog/source/'; //folder untuk meyimpan foto
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
                    'source_image' => './files/blog/source/'.$data_upload['file_name'],
                    'new_image' => './files/blog/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => true,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );

                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();

                $data = array(
					'id_kategori_blog'	=> $this->input->post('id_kategori_blog'),
					'judul_blog'		=> $this->input->post('judul_blog'),
					'isi_blog'			=> $this->input->post('isi_blog'),
					'foto_blog'	    	=> $data_upload['file_name'],
                    'thumb_blog'	=> $nm_file.'_thumb'.$data_upload['file_ext'],
					'publish'			=> $this->input->post('publish'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
				$path = "./files/blog/";
				unlink($path."source/".$this->input->post('foto_blog'));
				unlink($path."thumb/".$this->input->post('thumb_blog'));
            }else{
        		//echo "Foto tidak ada"; die();
                $data = array(
					'id_kategori_blog'	=> $this->input->post('id_kategori_blog'),
					'judul_blog'		=> $this->input->post('judul_blog'),
					'isi_blog'			=> $this->input->post('isi_blog'),
					'publish'			=> $this->input->post('publish'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
            }
        }
		if ($this->Mblog->update($data, $this->input->post('id_blog'))) {
			$this->session->set_flashdata('notif', 'Blog berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Blog gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/blog','refresh');
	}

	public function delete(){
		akses('blog', 'd');
		if ($this->Mblog->delete($this->input->get('id'))) {
			$path = "./files/blog/";
			unlink($path."source/".$this->input->get('foto'));
			unlink($path."thumb/".$this->input->get('thumb'));
			$this->session->set_flashdata('notif', 'Blog berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Blog gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/blog','refresh');
	}
}