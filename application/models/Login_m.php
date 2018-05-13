<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function __construct () {
		parent::__construct();
	}

	public function insert($data) {
		return $this->db->insert('login', $data);

	}

	public function selectRow($id) {
		$this->db->where('username', $id);
		$query = $this->db->get('login');
		return $query->row();
	}

	public function updateRow($id, $data) {
		$this->db->where('username', $id);
		return $this->db->update('login', $data);
	}

	public function deleteRow($id) {
		$this->db->where('username', $id);
		$this->db->delete('login');
	}

	public function selectData($username, $pass) {

		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		$query = $this->db->get('login');
		return $query->row();

	}

	public function getAll() {
		$query = $this->db->get('login');
		return $query->result();
	}

	public function pagination($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('login');
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }

    public function getGender() {
    	$query = $this->db->get('gender');
		return $query->result();
    }

    public function selectGender($id) {
    	$this->db->where('id_gender', $id);
    	$query = $this->db->get('gender');
		return $query->result();
    }

    public function join() {
    	$this->db->join('gender', 'login.jk=gender.id_gender');
    	$query = $this->db->get('login');
		return $query->result();
    }
}
