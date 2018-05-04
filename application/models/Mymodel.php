<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function __construct () {
		parent::__construct();
	}

	public function getVerb($verb) {
		// $this->db->select('*');
		// $this->db->from('verb')
		// $this->db->where('indo', $verb);
		$sql = "select * from verb where indo = ?";

		$query = $this->db->query($sql, $verb);
		return $query->row();

	}

	public function getSubjek($subjek) {

		$this->db->select('*');
		$this->db->from('subjek');
		$this->db->where('indo',$subjek);
		$query = $this->db->get();
		return $query->row();

	}

	public function getObjek($objek) {

		$this->db->select('*');
		$this->db->from('objek');
		$this->db->where('indo', $objek);
		$query = $this->db->get();
		return $query->row();

	}

	public function getCount($objek) {

		$this->db->select('*');
		$this->db->from('jumlah');
		$this->db->where('indo', $objek);
		$query = $this->db->get();
		return $query->row();

	}

	public function getKet($objek) {

		$this->db->select('*');
		$this->db->from('ketbenda');
		$this->db->where('indo', $objek);
		$query = $this->db->get();
		return $query->row();

	}

	public function getTime($objek) {

		$this->db->select('*');
		$this->db->from('time');
		$this->db->where('indo', $objek);
		$query = $this->db->get();
		return $query->row();

	}


}
