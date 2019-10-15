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

	public function tambah(){
		if($this->input->post('nama')!=null){       
        	$object = array(
                    	'id'=>$this->input->post('id'),
        				'nama' =>$this->input->post('nama'),
        				'nilai'=> $this->input->post('nilai'),
                    );
	        // $this->SekolahModel->tambahSekolah($object);
        	$this->db->insert('tb_bobot',$object);
        	echo "berhasil";
        	redirect('kriteria','refresh');  

	    }else{
	    	// print_r($data['smp']);
	    	// die();
	        $this->template->display("kriteria/tambah");
	    }
	}

	public function edit($id){
        $data['title']="Edit Data Bobot";
		// $data['siswa']=$this->db->get('tb_siswa')->result();

		if($this->input->post('id')!=null){
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";            
            $info=array(
             		    'id'=>$this->input->post('id'),
        				'nama' =>$this->input->post('nama'),
        				'nilai'=> $this->input->post('nilai'),
            );

			$this->db->where('id',$id)->update('tb_bobot', $info);
            $data['bobot']=$this->db->where('id',$id)->get('tb_bobot')->row_array();
            $this->template->display('kriteria/edit',$data);   
        }else{
         //update data angggota
            //$this->SekolahModel->updateSMP($id);
            //tampilkan pesan
            //tampilkan data anggota 
            $data['message']="";
            $data['bobot']=$this->db->where('id',$id)->get('tb_bobot')->row_array();
            $this->template->display('kriteria/edit',$data);
        }

	}

	public function delete($id){
		$this->db->where("id",$id)->delete('tb_bobot');
		redirect('Kriteria','refresh');
	}
}

/* End of file Kriteria.php */
/* Location: ./application/controllers/Kriteria.php */