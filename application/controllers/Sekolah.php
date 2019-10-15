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
       
        	// $this->db->insert('tb_ruangan',$data);
        	// redirect('Ruangan/tambah','refresh');   
    	}else{
        	$this->template->display("sekolah/tambah");
    	}
	}

	public function edit($id){
        $data['title']="Edit Data Sekolah";
		$data['smp']=$this->db->get('tb_smp')->result();

		if($this->input->post('id')==null){
            $data['sekolah']=$this->db->where('id',$id)->get('tb_smp')->row_array();
            $data['message']="";

            $info=array(
                'nama'=>$this->input->post('nama'),
            );

			$this->db->where('id_sekolah',$id)->update('tb_sekolah', $info);

			$object=array(
                'nama'=>$this->input->post('nama'),
                'nilai_akreditasi'=>$this->input->post('akreditasi'),
                'jumlah_guru'=>$this->input->post('guru'),
            );
			$this->db->where('id',$id)->update('tb_smp', $object);
            $this->template->display('sekolah/edit',$data);
        
        }else{
         //update data angggota
            $this->SekolahModel->updateSMP($id);
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";            
            //tampilkan data anggota 
            $this->template->display('sekolah/index',$data);
        }

	}
}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */