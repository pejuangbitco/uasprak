<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

	}

	public function index() {
		$this->load->model('news_m');
		$data = array(
			'title' => 'Welcome',
			'isi'	=> 'home_v',
			'news'	=> $this->news_m->getLimit()
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function about() {
		$data = array (
			'title'	=> 'Tentang Saya',
			'isi'	=> 'about_v'
		);
		$this->load->view('layout/wrapper', $data);	
	}

	public function gallery() {
		$data = array (
			'title'	=> 'Gallery Saya',
			'isi'	=> 'gallery_v'
		);
		$this->load->view('layout/wrapper', $data);	
	}

	public function blog() {
		$this->load->model('news_m');
		$this->load->model('kategori_m');
		$data = array();
		$data['kategori'] = $this->kategori_m->getAll();
		//$data['news'] = $this->news_m->getJoin('kategori', 'news.id_kategori=kategori.id_kategori');
		//$data['news2'] = $this->news_m->getLimit();
		$this->load->library('pagination');
		$limit_per_page = 3;
		$start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$total_records = count($this->news_m->getAll());
		$data['start'] = $start_index;
		//echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
		if ($total_records > 0) 
		{
		    $data["news"] = $this->news_m->pagination($limit_per_page, $start_index);
		    $config['base_url'] = base_url('home/blog');
		    $config['total_rows'] = $total_records;
		    $config['per_page'] = $limit_per_page;
		    $config["uri_segment"] = 3;
				$config['first_link']       = 'First';
		    $config['last_link']        = 'Last';
		    $config['next_link']        = 'Next';
		    $config['prev_link']        = 'Prev';
		    $config['full_tag_open']    = '<div class="pagging"><nav><ul class="pagination">';
		    $config['full_tag_close']   = '</ul></nav></div>';
		    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		    $config['num_tag_close']    = '</span></li>';
		    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		    $config['prev_tagl_close']  = '</span>Next</li>';
		    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		    $config['first_tagl_close'] = '</span></li>';
		    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		    $config['last_tagl_close']  = '</span></li>';       
		    $this->pagination->initialize($config);
		    $data["links"] 	= $this->pagination->create_links();
		     $data['title'] 	= 'Blog Saya';
		     $data['isi']	= 'blog_v';
		//     echo "cccccccccccccccccccccccccccccccccccccccccccccccc";
		 }
		// echo "aabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb";
		//echo '<pre>'; print_r($data); echo '</pre>'; exit;
		$this->load->view('layout/wrapper', $data);	
	}

	public function logout() {
		$this->session->unset_userdata('username');
		redirect(base_url());
	}
}