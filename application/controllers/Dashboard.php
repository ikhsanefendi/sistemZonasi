<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
		$this->load->model('SekolahModel');
	}

	public function index()
	{
		$data['sma']=$this->db->get('tb_sma')->result();
		$this->template->display('dashboard/index', $data);
	}

	public function edit($id){
        $data['title']="Edit Data Sekolah";
		$data['sma']=$this->db->get('tb_sma')->result();

		if($this->input->post('id')!=null){
            // $data['sekolah']=$this->db->where('id',$id)->get('tb_sma')->row_array();
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";            
   //          $info=array(
   //              'nama'=>$this->input->post('nama'),
   //          );

			// $this->db->where('id_sekolah',$id)->update('tb_sekolah', $info);

			$object=array(
                'nama'=>$this->input->post('nama'),
                'alamat'=>$this->input->post('akreditasi'),
            );
			$this->db->where('id',$id)->update('tb_sma', $object);
			// die();
            $data['sekolah']=$this->db->where('id',$id)->get('tb_sma')->row_array();
			
            $this->template->display('dashboard/edit',$data);
        
        }else{
         	//update data angggota
            //$this->SekolahModel->updateSMP($id);
            //tampilkan pesan
            //tampilkan data anggota 
            $data['message']="";
            $data['sekolah']=$this->db->where('id',$id)->get('tb_sma')->row_array();
            // print_r($data['sekolah']);
            // die();

            $this->template->display('dashboard/edit',$data);
        }

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */