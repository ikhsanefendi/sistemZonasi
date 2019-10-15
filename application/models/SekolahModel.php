<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SekolahModel extends CI_Model {

	
	function tambahSekolah($object){
		$this->db->insert('tb_sekolah', $object);
	}	

	function tambahSMP($object){
		$this->db->insert('tb_smp', $object);
	}

	function tambahSMA($object){
		$this->db->insert('tb_sma', $object);
	}

	function updateSMP($id){
		
	}
}

/* End of file SekolahModel.php */
/* Location: ./application/models/SekolahModel.php */