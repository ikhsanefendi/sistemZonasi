<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
	}
	public function index()
	{
		$data['sma']=$this->db->get('tb_sma')->result();

		$this->template->display('analisa/index',$data);
	}

	public function clustering(){
		// $this->db->where('id', $Value);
		$data['smp']=$this->db->get('tb_smp')->result();
		$data['max_akreditasi']=$this->db->select_max('nilai_akreditasi')->get('tb_smp')->row();
		$data['max_guru']=$this->db->select_max('jumlah_guru')->get('tb_smp')->row();
		// print_r($data['max_guru']);
		// die();
		$this->load->view('analisa/data_sekolah',$data);	
	}
}

/* End of file Analisa.php */
/* Location: ./application/controllers/Analisa.php */