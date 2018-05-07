<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Translate extends CI_Controller {

	private $data;

	public function __construct () {
		parent::__construct();
		$this->load->model('Mymodel');

	}

	public function index()
	{
		$this->data['eng'] = [];
		$this->data['kata'] = "";
		if ($this->input->post('submit')) {
			//echo "workkkkworkworkworkworkworkworkworkworkworkworkworkworkworkworkworkworkworkworkworkworkwork";
			$this->data['kata'] = $this->input->post('kata');

			//explode(" ", $this->data['kata']);
			$this->data['eng'] = $this->cek_bahasa(explode(" ", $this->data['kata']));
			// echo $this->data['eng'];
			// exit;
			if ($this->data['eng']=='error') {
				echo "errorrrr kakak";
				print_r($this->data['eng']);
				exit;
			}
			//print_r($this->data['eng']); exit;
		}
		
		$this->data['title'] = 'Translate';
		$this->data['isi']  = 'translator';
		$this->load->view('layout/wrapper',$this->data);
	}

	private function cek_bahasa($data) {

		if (count($data) <= 0) return 'error';

		if (count($data) <= 3) {
			//echo "mmmmmmmmmmmmmmmm   mmm";
			$s = $this->Mymodel->getSubjek($data[0]);
			//print_r($s); exit;
			if (empty($s)) return 'error satu';
			
			$v = $this->Mymodel->getVerb($data[1]);
			if (empty($v)) return 'error dua';
		
			$o = $this->Mymodel->getObjek($data[2]);
			if (empty($o)) return 'error tiga';

			$eng = $s->eng . ' ' . $v->eng . ' the ' . $o->eng;
			//print_r($eng); exit;
			return $eng;
		}

		if (count($data) > 3 && count($data) <= 6) {

			$s = $this->Mymodel->getSubjek($data[0]);
			//print_r($s); exit;
			if (empty($s)) return 'error satu';
			
			$v = $this->Mymodel->getVerb($data[1]);
			if (empty($v)) return 'error dua';

			$c = $this->Mymodel->getCount($data[2]);
			if (empty($c)) {
				$o = $this->Mymodel->getObjek($data[2]);
				if (empty($o)) return 'error tiga';

				$k = $this->Mymodel->getKet($data[3]);
				if (empty($k)) {
					$t = $this->Mymodel->getTime($data[3]);
					return $s->eng. ' ' . $v->eng . ' the ' . $o->eng . ' ' . $t->eng;					
				}

				if (count($data) > 4 ) {
					$t = $this->Mymodel->getTime($data[4]);
					//print_r($t); exit;
					return $s->eng. ' ' . $v->eng . ' the ' . $k->eng . ' ' . $o->eng . ' ' . $t->eng;
				}

				$eng = $s->eng . ' ' . $v->eng . ' the ' . $k->eng . ' ' . $o->eng;
				//print_r($eng); exit;
				return $eng;
				
			}

			$o = $this->Mymodel->getObjek($data[3]);
			if (empty($o)) return 'error tiga';

			if (count($data) > 4 && count($data) < 6) {
				$t = $this->Mymodel->getTime($data[4]);
				if (empty($t)) {
					$k = $this->Mymodel->getKet($data[4]);
					return $s->eng . ' ' . $v->eng . ' ' . $c->eng . ' ' . $k->eng . ' ' . $o->eng . 's ';
				}
				return $s->eng . ' ' . $v->eng . ' ' . $c->eng . ' ' . $o->eng . 's ' . $t->eng;
			}

			$k = $this->Mymodel->getKet($data[4]);
			$t = $this->Mymodel->getTime($data[5]);

			return $s->eng . ' ' . $v->eng . ' ' . $c->eng . ' ' . $k->eng . ' ' . $o->eng . 's ' . $t->eng;





		}
		
	}

	private function ubahBahasa($data, $type) {
		if ($type==1) {

		}
	}
}
