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
	        	$object = array(
	        		'nama' =>$this->input->post('nama'),
	        		'id_lokasi' =>$this->input->post('id'),

                    // 'gambar'=> $this->input->post('gambar'),
                    );
	        	//$this->SekolahModel->tambahSekolah($object);
        		$this->db->insert('tb_sekolah',$object);

        		$info = array(
	        		'nama' =>$this->input->post('nama'),
	        		'id_lokasi' =>$this->input->post('id'),
                    'nilai_akreditasi'=> $this->input->post('akreditasi'),
	        		'jumlah_guru' =>$this->input->post('n_guru'),

                    );
        		$this->db->insert('tb_smp',$info);

        		$lokasi = array(
	        		'id_sekolah' =>$this->input->post('id'),
	        		'longitude' =>$this->input->post('long'),
                    'latitude'=> $this->input->post('la'),
                    );
        		$this->db->insert('tb_lokasi',$lokasi);
        	// $this->db->insert('tb_ruangan',$data);
        	redirect('sekolah/index','refresh');   
    	}else{
            $data['id_max']=$this->db->select_max('id_sekolah')->get('tb_sekolah')->row_array();
        	$this->template->display("sekolah/tambah",$data);
    	}
	}

	public function edit($id){
        $data['title']="Edit Data Sekolah";
		$data['smp']=$this->db->get('tb_smp')->result();

		if($this->input->post('id')!=null){
            
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";            

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
            $data['sekolah']=$this->db->where('id',$id)->get('tb_smp')->row_array();
            $this->template->display('sekolah/index',$data);   
        }else{
         //update data angggota
            //$this->SekolahModel->updateSMP($id);
            //tampilkan pesan
            //tampilkan data anggota 
            $data['message']="";
            $data['sekolah']=$this->db->where('id',$id)->get('tb_smp')->row_array();
            $this->template->display('sekolah/edit',$data);
        }

	}
}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */