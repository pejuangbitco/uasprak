<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct() {
		parent:: __construct();
		$this->load->model('login_m');
	}

	public function index() {
		// if ($this->session->userdata('status') == 1) {
		// 	redirect(base_url("mahasiswa"));
		// 	exit;
		// }
		// if ($this->session->userdata('status') == 2) {
		// 	redirect(base_url("dosen"));
		// 	exit;
		// }
		if ($this->session->userdata('username')) {
			redirect(base_url("admin"));
			exit;
		}
		$this->load->view('login_v');
	}

	public function valid() {
		$user = $this->input->POST('username');
		$pass = md5($this->input->POST('pass'));

		if (empty($user) || empty($pass)) {
			$this->session->set_flashdata('msg', '<h5><b>Warning!<b></h5>Username atau Password belum diisi.');
			redirect(base_url("login"));
			exit;
		}
		//print_r($user); print_r($pass); exit;
		$on = $this->login_m->selectData($user, $pass);
		//print_r($on); exit;
		if (!isset($on)) {
			$this->session->set_flashdata('msg', '<h5><b>Warning!<b></h5>Username atau Password yang anda masukkan salah.');
			redirect(base_url("login"));
			exit;
		}

		$ses = array(
			'username' => $user,
			'status'   => $on->role
		);
		
		$this->session->set_userdata( $ses );
			redirect(base_url("admin"));

	}
}