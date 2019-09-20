<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mmenu');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses($this->session->userdata('id_level_admin'), 'menu', 'r');
		$data['title']			= "Menu - Admin Luwakode";
		$data['subtitle']		= "Menu";
		$data['content']		= "menu";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mmenu->readParent()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses($this->session->userdata('id_level_admin'), 'menu', 'c');

		//echo json_encode($this->input->post()); die();
		if ($this->Mmenu->create($this->input->post())) {
			$menu = $this->input->post('url_menu');
			$nama_menu = $this->input->post('nama_menu');
			$type_menu = $this->input->post('type_menu');

			if ($type_menu != "P") {
				//mengubah file content
				$content = "./application/views/sysadmin/content.php";
				$handle_content = fopen($content, 'a') or die('Cannot open file:  '.$content);
				$data_content = "\n"."else if("."$"."content == '".$menu."') {"."$"."this->load->view('sysadmin/tabel'); }";
				fwrite($handle_content, $data_content);

				//Membuat file model
				$nama_model = "M".str_replace("-", "_", $menu);
				$model = "./application/models/".$nama_model.".php";
				$handle_modelm = fopen($model, 'w') or die('Cannot open file:  '.$model); //implicitly creates file

				//Mengisi file model
				$handle_model = fopen($model, 'w') or die('Cannot open file:  '.$model);
				$data_model = "<?php"."\n"."
				defined('BASEPATH') OR exit('No direct script access allowed');"."\n\n".

				"class ".$nama_model." extends CI_Model {"."\n\n"."

				}";
				fwrite($handle_model, $data_model);

				//Membuat file controller
				$nama_controller = ucfirst(str_replace("-", "_", $menu));
				$controller = "./application/controllers/sysadmin/".$nama_controller.".php";
				$handle_controllerc = fopen($controller, 'w') or die('Cannot open file:  '.$controller); //implicitly creates file

				//Mengisi file controller
				$handle_controller = fopen($controller, 'w') or die('Cannot open file:  '.$controller);
				$data_controller = "<?php defined('BASEPATH') OR exit('No direct script access allowed');"."\n\n"
				."class ".$nama_controller." extends CI_Controller {"."\n\n"."
				public function __construct(){"."\n".
				"parent::__construct();"
				."$"."this->load->model('".$nama_model."');"."\n\n"
				."if ("."$"."this->session->userdata('login') != 'berhasil') {
				"."$"."this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
				"."$"."this->session->set_flashdata('type', 'error');
				redirect('sysadminlogin','refresh');
				}"."\n}"
				."public function index(){
				akses("."$"."this->session->userdata('id_level_admin'), '".$menu."', 'r');
				"."$"."data['title']			= 'Data ".ucfirst(strtolower($nama_menu))." - Admin Luwakode';
				"."$"."data['subtitle']		= 'Data ".ucfirst(strtolower($nama_menu))."';
				"."$"."data['content']		= '".$menu."';
				"."$"."data['jumlah']			= 1;
				"."$"."data['b1']				= "."$"."data['subtitle'];
				"."$"."data['b1a']			= '#';
				"."$"."data['data']			= '';
				"."$"."this->load->view('sysadmin/index', "."$"."data);
				}"."\n\n}";
				fwrite($handle_controller, $data_controller);

				//menambah file view tabel
				$view_tabel = "./application/views/sysadmin/tabel.php";
				$handle_view = fopen($view_tabel, 'a') or die('Cannot open file:  '.$view_tabel);
				$data_view = "\n\n"."<?php if ("."$"."content == '".$menu."') { ?>"."\n\n"."<h4>Silahkan edit file tabel.php di application/views/sysadmin/(di sini)</h4>"."\n\n<?php } ?>";
				fwrite($handle_view, $data_view);
			}

			$this->session->set_flashdata('notif', 'Menu berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Menu gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/menu','refresh');
	}

	public function update(){
		akses($this->session->userdata('id_level_admin'), 'menu', 'u');
		//echo json_encode($this->input->post());
		if ($this->Mmenu->update($this->input->post(), $this->input->post('id_menu'))) {
			$this->session->set_flashdata('notif', 'Menu berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Menu gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/menu','refresh');
	}

	public function delete($id){
		akses($this->session->userdata('id_level_admin'), 'menu', 'd');
		//echo json_encode($this->input->post());
		if ($this->Mmenu->delete($id)) {
			$this->Mmenu->deleteChild($id);
			$this->session->set_flashdata('notif', 'Menu berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Menu gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/menu','refresh');
	}

	public function data_menu(){
		$id_menu = $this->input->post('id');
		echo json_encode($this->Mmenu->readById($id_menu)->result());
	}

	public function data_menu_admin(){
		$id = $this->input->post('id');
		echo json_encode($this->Mmenu->readByAdmin($id)->result());
	}

}

/* End of file Menu.php */
/* Location: ./application/controllers/sysadmin/Menu.php */