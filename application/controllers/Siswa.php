<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
		$this->load->Model(array('SekolahModel'));

	}

	public function index()
	{
		$data['siswa']=$this->db->get('tb_siswa')->result();
		$this->template->display('siswa/index', $data);
	}



	public function tambah(){
		if($this->input->post('nama')!=null){       
        	$object = array('nama_siswa' =>$this->input->post('nama'),
        				'nama_sekolah'=> $this->input->post('smp'),
                    	'jumlah_un'=>$this->input->post('un'),
                    	'jumlah_nilai_sekolah'=> $this->input->post('ns'),
                    );
	        // $this->SekolahModel->tambahSekolah($object);
        $this->db->insert('tb_siswa',$object);
        echo "berhasil";
        redirect('siswa','refresh');  

	    }else{
	    	$data['smp']=$this->db->get('tb_smp')->result();
	    	// print_r($data['smp']);
	    	// die();
	        $this->template->display("siswa/tambah",$data);
	    }
	}

	public function tambah_siswa($id){
		if($this->input->post('nama')!=null){       
        	$object = array('nama_siswa' =>$this->input->post('nama'),
        				'nama_sekolah'=> $this->input->post('smp'),
                    	'jumlah_un'=>$this->input->post('un'),
                    	'jumlah_nilai_sekolah'=> $this->input->post('ns'),
                    );
	        // $this->SekolahModel->tambahSekolah($object);
        $this->db->insert('tb_siswa',$object);
        echo "berhasil";
        redirect('siswa','refresh');  

	    }else{
	    	$data['smp']=$this->db->get('tb_smp')->result();

	    	// print_r($data['smp']);
	    	// die();
	        $this->template->display("sekolah/tambah_siswa",$data);
	    }
	}

	public function sekolah($id){
		// $this->db->join('tb_sekolah', 'tb_sekolah.nama = tb_siswa.nama_sekolah', 'inner');
	    	$data['sekolah']=$this->db->select('nama_sekolah')->where('nama_sekolah',12)->get('tb_siswa')->row();
	   	// print_r($data['sekolah']);
	    // 	die();

		$data['siswa']=$this->db->where('nama_sekolah',$id)->get('tb_siswa')->result();
		$this->template->display('sekolah/index_sekolah', $data);
	}

	public function delete($id){
		$this->db->where("id",$id)->delete('tb_siswa');
		redirect('Siswa','refresh');
	}
}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */