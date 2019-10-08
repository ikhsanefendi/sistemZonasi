<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('template'));
		$this->load->model('JarakModel');
	}
	public function index()
	{
		$data['siswa']=$this->db->get('tb_siswa')->result();
		// print_r($data['siswa']);
		// die();
		$this->template->display('analisa_2/index',$data);
	}

	public function clustering(){
		// $this->db->where('id', $Value);
		$data['smp']=$this->db->get('tb_smp')->result();
		$data['max_akreditasi']=$this->db->select_max('nilai_akreditasi')->get('tb_smp')->row();
		$data['max_guru']=$this->db->select_max('jumlah_guru')->get('tb_smp')->row();
		// print_r($data['max_guru']);
		// die();
		$this->load->view('analisa_2/data_sekolah',$data);	
	}

	public function saw($id){
		$this->db->where('id', $id);
		$data['siswa']=$this->db->get('tb_siswa')->result();
		

		//cari id sekolah
		$nama_sekolah=$data['siswa'][0]->nama_sekolah;
		//cari id_sekolah
		$sekolah=$this->db->where('nama',$nama_sekolah)->get('tb_smp')->result();
		$id_lokasi_smp=$sekolah[0]->id_lokasi;
		// cari longitude dan lattitude
		$lokasi=$this->db->where('id_sekolah',$id_lokasi_smp)->get('tb_lokasi')->row();
		$long_smp=$lokasi->longitude;
		$lat_smp=$lokasi->latitude;
		
		//hitung semua jarak pada sekolahan;
		$sma=$this->db->query('select * from tb_lokasi where id_lokasi<12')->result();

		// print_r($long_smp);
		// echo "<br>";
		// print_r($lat_smp);
		// echo "<br>";
		
		// print_r($sma);
		
		foreach ($sma as $key ) {
			$long_sma=$key->longitude;
			$lat_sma=$key->latitude;
			$hasil=$this->JarakModel->getDistanceBetween(abs($lat_smp), abs($lat_sma), abs($long_smp), abs($long_sma), $unit = 'Mi');
			
			print_r($hasil);
		}		
	

		// foreach ($sma as $key) {
		// 	print_r($sma->longitude);
		// }
		die();
		// $data['lokasi']=$this->db->get('')->result();			
		$this->load->view('analisa_2/data_sekolah',$data);
	}

	public function getDistanceBetween($unit = 'Mi') 
	{ 
		$latitude1=-7.461363;
		$latitude2=-7.473489;
		$longitude1=112.703767;
		$longitude2= 112.657044;

		$theta = $longitude1 - $longitude2; 
		$distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2)))  + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta))); 
		$distance = acos($distance); 
		$distance = rad2deg($distance); 
		$distance = $distance * 60 * 1.1515; 
		$distance = $distance * 1.609344; 
		 
		echo $distance;
		echo "berbeda dengan distance e";
		//return $a=(round($distance,2)); 
	}
}

/* End of file Analisa.php */
/* Location: ./application/controllers/Analisa.php */