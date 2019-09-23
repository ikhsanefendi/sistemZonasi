<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
		$this->load->Model(array('SekolahModel'));

	}

	public function index()
	{
		$data['smp']=$this->db->get('tb_smp')->result();
		$this->template->display('sekolah/index', $data);
	}



	public function tambah(){
		if($this->input->post('nama')!=null){
        
	        if ($this->input->post('jenjang')==='SMP') {
	        	$object = array('nama' =>$this->input->post('nama'),
                    'lokasi'=>'-',
                    'gambar'=> $this->input->post('gambar'),
                    );
	        	$this->SekolahModel->tambahSekolah($object);
	        }else{

        }
       
        $this->db->insert('tb_ruangan',$data);
        redirect('Ruangan/tambah','refresh');   
    }else{
        $this->template->display("sekolah/tambah");
    }
	}

}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */