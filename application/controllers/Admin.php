<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct() {
		parent:: __construct();

		// if($this->session->userdata('status') != 3){
		// 	redirect(base_url("login"));
		// 	exit;
		// }
		if (!$this->session->userdata('username')) {
			redirect(base_url("login"));
			exit;
		}
		$this->load->model('news_m');
	}
		
		
	public function index() {
		// $data = array();
		// $this->load->library('pagination');
		// $limit_per_page = 5;
  //       $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
  //       $total_records = count($this->login_m->getAll());
  //       $data['start'] = $start_index;
  //       if ($total_records > 0) 
  //       {
  //           $data["m"] = $this->login_m->pagination($limit_per_page, $start_index);
  //           $config['base_url'] = base_url('admin/index');
  //           $config['total_rows'] = $total_records;
  //           $config['per_page'] = $limit_per_page;
  //           $config["uri_segment"] = 3;
  //     		$config['first_link']       = 'First';
	 //        $config['last_link']        = 'Last';
	 //        $config['next_link']        = 'Next';
	 //        $config['prev_link']        = 'Prev';
	 //        $config['full_tag_open']    = '<div class="pagging"><nav><ul class="pagination">';
	 //        $config['full_tag_close']   = '</ul></nav></div>';
	 //        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	 //        $config['num_tag_close']    = '</span></li>';
	 //        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	 //        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	 //        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	 //        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	 //        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	 //        $config['prev_tagl_close']  = '</span>Next</li>';
	 //        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	 //        $config['first_tagl_close'] = '</span></li>';
	 //        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	 //        $config['last_tagl_close']  = '</span></li>';       
  //           $this->pagination->initialize($config);
  //           $data["links"] 	= $this->pagination->create_links();
  //           $data['title'] 	= 'Admin Page';
  //           $data['isi']	= 'admin_v';

        //}
        $data = array(
        	'title' => 'Dashboard Admin',
        	'isi'	=> 'admin_v' );
 
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function CreatePost() {
		$this->load->model('kategori_m');
		if ($this->input->post('post')) {
			$id_foto = mt_rand();
			$img_name = $id_foto . '_' . pathinfo( $_FILES['berkas']['name'], PATHINFO_FILENAME );
			$img_name = str_replace(" ", '', $img_name);
			$this->upload( $img_name, '/assets/upload/', 'berkas' );
			$img_name .= '.jpg';
			$data = array (
				'judul'	=> $this->input->POST('judul'),
				'isi'	=> $this->input->POST('isi'),
				'time'	=> date("Y-m-d"),
				'foto'	=> $img_name,
				'id_kategori' => $this->input->POST('id_kategori')
			);

			$this->news_m->insert($data);
			$this->session->set_flashdata('msg', '<p style="color:green;">Data Berhasil diTambahkan.</p>');
			redirect(base_url("admin/list_post"));
			exit;
		}
		$data = array(
        	'title' => 'Dashboard Admin',
        	'isi'	=> 'lay-admin/admin_post_create_v',
        	'kategori' => $this->kategori_m->getAll() );
 
		$this->load->view('lay-admin/wrapper', $data);
	}
	private function upload($id, $directory, $tag_name, $max_size = 2000)
	{
		if ( isset( $_FILES[$tag_name] ) && !empty( $_FILES[$tag_name]['name'] ) )
		{
			$upload_path = realpath(FCPATH . $directory . '/');
			@unlink($upload_path . '/' . $id . '.jpg');
			$config = [
				'file_name' 		=> $id . '.jpg',
				'allowed_types'		=> 'jpg|png|bmp|jpeg',
				'upload_path'		=> './assets/upload/',
				'max_size'			=> $max_size
			];
			// echo "ekssss";
			// print_r($upload_path); exit;
			$this->load->library('upload');
			$this->upload->initialize($config);
			return $this->upload->do_upload($tag_name);
		}
		return FALSE;
	}

	public function List_Post() {
		$data = array(
        	'title' => 'Dashboard Admin',
        	'isi'	=> 'lay-admin/post_list_v',
        	'news'	=> $this->news_m->getJoin('kategori','news.id_kategori = kategori.id_kategori') );
 
		$this->load->view('lay-admin/wrapper', $data);
	}


	public function edit($id) {
		//echo "edit";
		$this->load->model('kategori_m');
		$u = $this->news_m->selectRow($id);

		if ($this->input->POST('edit')) {
			$data = array (
				'judul'	=> $this->input->POST('judul'),
				'isi'	=> $this->input->POST('isi'),
				'id_kategori' => $this->input->POST('id_kategori')
			);
			//echo "edit submit";
			//print_r($data); exit;
			$this->news_m->updateRow($id,$data);
			$this->session->set_flashdata('msg', 'Data Berhasil diEdit.');
			redirect(base_url("admin/edit/" . $id));
			exit;
		}

		$data = array (
			'u' 	=> $u,
			'kategori'	=> $this->kategori_m->getAll(),
			'title'	=> 'Edit Berita',
			'isi'	=> 'lay-admin/edit_post_v'
		);
		//print_r($data['u']); exit;
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function delete($id) {
		$this->news_m->deleteRow($id);
		$this->session->set_flashdata('msg', '<p style="color: red;">Delete Data Sukses</p>');
		redirect(base_url("admin/list_post"));
	}
	
	public function kategori() {
		$this->load->model('kategori_m');

		$data = array (
			
			'kategori'	=> $this->kategori_m->getAll(),
			'title'	=> 'List Kategori',
			'isi'	=> 'lay-admin/edit_kategori_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function tambah_kategori($nama) {
		if (!isset($nama)) {
			redirect(base_url("admin/kategori"));
			exit;
		}
		$this->load->model('kategori_m');
		$data = array ('nama_kategori' => $nama);
		$this->kategori_m->insert($data);
		$this->session->set_flashdata('msg', '<p style="color: green;">Tambah Data Sukses</p>');
		redirect(base_url("admin/kategori"));
	}

	public function kategori_delete($id) {
		$this->load->model('kategori_m');
		$this->kategori_m->deleteRow($id);
		$this->session->set_flashdata('msg', '<p style="color: red;">Delete Data Sukses</p>');
		redirect(base_url("admin/kategori"));			
	}

	public function edit_kategori($id, $nama) {
		if (!isset($nama) || !isset($id) || empty($nama)) {
			redirect(base_url("admin/kategori"));
			exit;
		}
		$this->load->model('kategori_m');
		$data = array ('nama_kategori' => $nama);
		$this->kategori_m->updateRow($id, $data);
		$this->session->set_flashdata('msg', '<p style="color: green;">Edit Data Sukses</p>');
		redirect(base_url("admin/kategori"));
	}

	public function pengguna() {
		$this->load->model('login_m');

		$data = array (
			
			'pengguna'	=> $this->login_m->join(),
			'title'	=> 'Pengguna',
			'isi'	=> 'lay-admin/pengguna_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function tambah_pengguna() {
		$this->load->model('login_m');

		if ($this->input->POST('submit')) {
			$id_foto = mt_rand();
			$img_name = $id_foto . '_' . pathinfo( $_FILES['berkas']['name'], PATHINFO_FILENAME );
			$img_name = str_replace(" ", '', $img_name);
			$this->upload( $img_name, '/assets/upload/', 'berkas' );
			$img_name .= '.jpg';
			$data = array (
				'username' => $this->input->POST('username'),
				'nama' => $this->input->POST('nama'),
				'email' => $this->input->POST('email'),
				'kontak' => $this->input->POST('kontak'),
				'jk' => $this->input->POST('gender'),
				'password' => md5($this->input->POST('password')),
				'role' => $this->input->POST('role'),
				'foto'	=> $img_name
			);

			$q = $this->login_m->insert($data);
			if (!$q) {
				$this->session->set_flashdata('msg', '<p style="color: red;">Tambah Data Gagal/Username sudah ada</p>');
				redirect(base_url("admin/tambah_pengguna"));
			}

			$this->session->set_flashdata('msg', '<p style="color: green;">Tambah Data Sukses');
			redirect(base_url("admin/pengguna"));
		}

		$data = array (
			
			'pengguna'	=> $this->login_m->getAll(),
			'gender'	=> $this->login_m->getGender(),
			'title'	=> 'Tambah Pengguna',
			'isi'	=> 'lay-admin/tambah_pengguna_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function edit_pengguna($u) {
		if(!isset($u)) {
			redirect(base_url("admin/pengguna"));
		}
		$this->load->model('login_m');

		if ($this->input->POST('submit')) {
			$id_foto = mt_rand();
			$img_name = $id_foto . '_' . pathinfo( $_FILES['berkas']['name'], PATHINFO_FILENAME );
			$img_name = str_replace(" ", '', $img_name);
			$this->upload( $img_name, '/assets/upload/', 'berkas' );
			$img_name .= '.jpg';
			$data = array (
				
				'nama' => $this->input->POST('nama'),
				'email' => $this->input->POST('email'),
				'kontak' => $this->input->POST('kontak'),
				'jk' => $this->input->POST('gender'),
				'password' => md5($this->input->POST('password')),
				'role' => $this->input->POST('role'),
				'foto' => $img_name
			);

			$q = $this->login_m->updateRow($u,$data);
			if (!$q) {
				$this->session->set_flashdata('msg', '<p style="color: red;">Edit Data Gagal/Username sudah ada</p>');
				redirect(base_url("admin/edit_pengguna"));
				exit;
			}

			$this->session->set_flashdata('msg', '<p style="color: green;">Edit Data Sukses');
			redirect(base_url("admin/edit_pengguna/".$u));
			exit;
		}

		$data = array (
			
			'pengguna'	=> $this->login_m->selectRow($u),
			'gender'	=> $this->login_m->getGender(),
			'title'	=> 'Edit Pengguna',
			'isi'	=> 'lay-admin/edit_pengguna_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function delete_pengguna($u) {
		if(!isset($u)) {
			redirect(base_url("admin/pengguna"));
		}
		$this->load->model('login_m');
		$this->login_m->deleteRow($u);
		$this->session->set_flashdata('msg', '<p style="color: red;">Delete Data Sukses');
			redirect(base_url("admin/pengguna"));
	}

	public function silabus() {
		$this->load->model('silabus_m');

		$data = array (
			
			'silabus'	=> $this->silabus_m->getAll(),
			'title'	=> 'Silabus',
			'isi'	=> 'lay-admin/silabus_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function tambah_silabus() {
		$this->load->model('silabus_m');

		if ($this->input->POST('submit')) {
			$id_foto = mt_rand();
			$img_name = $id_foto . '_' . pathinfo( $_FILES['berkas']['name'], PATHINFO_FILENAME );
			$img_name = str_replace(" ", '', $img_name);
			$this->upload( $img_name, '/assets/upload/', 'berkas' );
			$img_name .= '.jpg';
			$data = array (
				'id_silabus' => $id_foto,
				'nama_silabus' => $this->input->POST('nama_silabus'),
				'foto'	=> $img_name
			);

			$q = $this->silabus_m->insert($data);
			if (!$q) {
				$this->session->set_flashdata('msg', '<p style="color: red;">Tambah Data Gagal</p>');
				redirect(base_url("admin/tambah_silabus"));
				exit;
			}

			$this->session->set_flashdata('msg', '<p style="color: green;">Tambah Data Sukses');
			redirect(base_url("admin/silabus"));
			exit;
		}

		$data = array (
			
			'silabus'	=> $this->silabus_m->getAll(),
			'title'	=> 'Tambah Silabus',
			'isi'	=> 'lay-admin/tambah_silabus_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function edit_silabus($id) {
		if(!isset($id)) {
			redirect(base_url("admin/silabus"));
		}
		$this->load->model('silabus_m');

		if ($this->input->POST('submit')) {
			$id_foto = mt_rand();
			$img_name = $id_foto . '_' . pathinfo( $_FILES['berkas']['name'], PATHINFO_FILENAME );
			$img_name = str_replace(" ", '', $img_name);
			$this->upload( $img_name, '/assets/upload/', 'berkas' );
			$img_name .= '.jpg';
			$data = array (
				
				'nama_silabus' => $this->input->POST('nama_silabus'),
				'foto'	=> $img_name
			);

			$this->silabus_m->updateRow($id,$data);
			

			$this->session->set_flashdata('msg', '<p style="color: green;">Edit Data Sukses');
			redirect(base_url("admin/edit_silabus/". $id));
			exit;
		}

		$data = array (
			
			'silabus'	=> $this->silabus_m->selectRow($id),
			'title'	=> 'Edit Silabus',
			'isi'	=> 'lay-admin/edit_silabus_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function delete_silabus($id) {
		if(!isset($id)) {
			redirect(base_url("admin/silabus"));
		}
		$this->load->model('silabus_m');
		$this->silabus_m->deleteRow($id);
		$this->session->set_flashdata('msg', '<p style="color: red;">Delete Data Sukses');
		redirect(base_url("admin/silabus"));
	}


	public function gallery() {
		$this->load->model('gallery_m');

		$data = array (
			
			'gallery'	=> $this->gallery_m->getAll(),
			'title'	=> 'Gallery',
			'isi'	=> 'lay-admin/gallery_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function tambah_gallery() {
		$this->load->model('gallery_m');

		if ($this->input->POST('submit')) {
			$id_foto = mt_rand();
			$img_name = $id_foto . '_' . pathinfo( $_FILES['berkas']['name'], PATHINFO_FILENAME );
			$img_name = str_replace(" ", '', $img_name);
			$this->upload( $img_name, '/assets/upload/', 'berkas' );
			$img_name .= '.jpg';
			$data = array (
				'id_gallery' => $id_foto,
				'caption' => $this->input->POST('caption'),
				'foto'	=> $img_name
			);

			$this->gallery_m->insert($data);


			$this->session->set_flashdata('msg', '<p style="color: green;">Tambah Data Sukses');
			redirect(base_url("admin/gallery"));
			exit;
		}

		$data = array (
			
			'gallery'	=> $this->gallery_m->getAll(),
			'title'	=> 'Tambah Gallery',
			'isi'	=> 'lay-admin/tambah_gallery_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function edit_gallery($id) {
		if(!isset($id)) {
			redirect(base_url("admin/gallery"));
		}
		$this->load->model('gallery_m');

		if ($this->input->POST('submit')) {
			$id_foto = mt_rand();
			$img_name = $id_foto . '_' . pathinfo( $_FILES['berkas']['name'], PATHINFO_FILENAME );
			$img_name = str_replace(" ", '', $img_name);
			$this->upload( $img_name, '/assets/upload/', 'berkas' );
			$img_name .= '.jpg';
			$data = array (
				
				'caption' => $this->input->POST('caption'),
				'foto'	=> $img_name
			);

			$this->gallery_m->updateRow($id,$data);


			$this->session->set_flashdata('msg', '<p style="color: green;">Edit Data Sukses');
			redirect(base_url("admin/edit_gallery/".$id));
			exit;
		}

		$data = array (
			
			'gallery'	=> $this->gallery_m->selectRow($id),
			'title'	=> 'Edit Gallery',
			'isi'	=> 'lay-admin/edit_gallery_v'
		);
		
		$this->load->view('lay-admin/wrapper', $data);
	}

	public function delete_gallery($id) {
		if(!isset($id)) {
			redirect(base_url("admin/gallery"));
		}
		$this->load->model('gallery_m');
		$this->gallery_m->deleteRow($id);
		$this->session->set_flashdata('msg', '<p style="color: red;">Delete Data Sukses');
		redirect(base_url("admin/gallery"));
	}

}