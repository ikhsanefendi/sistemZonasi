<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
	}

	public function index()
	{
		$data['sma']=$this->db->get('tb_sma')->result();
		$this->template->display('dashboard/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */