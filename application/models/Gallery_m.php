<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Silabus_m extends CI_Model {
	private $data;

	public function __construct () {
		parent::__construct();
		$this->data['table']	= 'gallery';
		$this->data['primary']	= 'id_gallery';
	}


	public function getAll() {
		$query = $this->db->get($this->data['table']);
		return $query->result();
	}


	public function selectRow($id) {
		$this->db->where($this->data['primary'], $id);
		$query = $this->db->get($this->data['table']);
		return $query->row();
	}

	public function deleteRow($id) {
		$this->db->where($this->data['primary'], $id);
		$this->db->delete($this->data['table']);
	}

	public function updateRow($id, $data) {
		$this->db->where($this->data['primary'], $id);
		$this->db->update($this->data['table'], $data);
	}

	public function insert($data)
	{
		return $this->db->insert($this->data['table'], $data);
	}

	public function pagination($limit, $start) 
    {
    	$this->db->join('kategori', 'news.id_kategori=kategori.id_kategori');
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->data['table']);
 
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
}