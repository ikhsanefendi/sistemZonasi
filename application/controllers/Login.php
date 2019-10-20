<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');		
	}

	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			redirect('Kriteria/index','refresh');
		}
	}

	public function cekDb()
	{
		$this->load->model('Login_user');
		$username = $this->input->post('username');
		$password=  $this->input->post('password');
		// print_r($username);
		// print_r($password);
		//die();
		$result= $this->Login_user->login($username,$password);
		
		// print_r($result);
		// die();
		if($result){
			$sess_array= array();
			foreach ($result as $key) {
				$sess_array = array(
					'id_user'=>$key->id_user,
					'username'=>$key->username
					);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb','Login Gagal Username dan Password tidak Valid');
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}	

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */