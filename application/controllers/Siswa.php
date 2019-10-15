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

	public function edit($id){
        $data['title']="Edit Data Siswa";
		// $data['siswa']=$this->db->get('tb_siswa')->result();

		if($this->input->post('id')!=null){
            
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";            

            $info=array(
                'nama_siswa'=>$this->input->post('nama'),
                'jumlah_un'=>$this->input->post('n_un'),
                'jumlah_nilai_sekolah'=>$this->input->post('n_ns'),
                'nama_sekolah'=>$this->input->post('sekolah'),
            );

			$this->db->where('id',$id)->update('tb_siswa', $info);
            $data['siswa']=$this->db->where('id',$id)->get('tb_siswa')->row_array();
            $this->template->display('siswa/edit',$data);   
        }else{
         //update data angggota
            //$this->SekolahModel->updateSMP($id);
            //tampilkan pesan
            //tampilkan data anggota 
            $data['message']="";
            $data['siswa']=$this->db->where('id',$id)->get('tb_siswa')->row_array();
            $this->template->display('siswa/edit',$data);
        }

	}

	public function delete($id){
		$this->db->where("id",$id)->delete('tb_siswa');
		redirect('Siswa','refresh');
	}

	public function import(){

		if(isset($_FILES["fileku"]["name"])){
			$path = $_FILES["fileku"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			$objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
			$objWriter->save('uploadActivity/Activity.xlsx');
			foreach($object->getWorksheetIterator() as $worksheet){
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++){
					$activity = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$section = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$plan = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$plan2 = \PHPExcel_Style_Numberformat::toFormattedString($plan, 'YYYY-MM-DD');
					if ($plan != null) {
						
					$data[] = array(
						'nor'  => $this->input->post('nor_act'),
						'no'   => $this->input->post('no_act'),
						'nama_act'   => $activity,
						'nama_dvs'   => $section,
						'ak_plan_imp'   => $plan2,
						'ak_act_imp'   => "0000-00-00 00:00:00",
					);
					$set = [
							'status' => "On Progress",
						];
						$this->db->where('nor',$this->input->post('nor_act'));
						$this->db->where('no',$this->input->post('no_act'));
						$this->db->update('nor',$set);
					}
				}
			}
			$result=$this->Dc_model->newactivity($data);
			echo json_encode($result);
			
		}
		print_r("aaaa");
			die();

	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */