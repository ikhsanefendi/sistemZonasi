<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
	}


	public function index()
	{
		$data['kriteria']=$this->db->get('tb_bobot')->result();
		$this->template->display('kriteria/index', $data);		
	}

}

/* End of file Kriteria.php */
/* Location: ./application/controllers/Kriteria.php */