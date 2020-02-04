<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('Modeladmin');
		$this->load->model('Modellogin');
		
	}

	public function index(){
		if($this->session->userdata('status') == "login"){
			redirect(base_url("Myadmin"));
		}
		$data['title'] = "Login | Sekolah Tinggi Teknologi Bandung";
		// $this->load->view('headadm',$data);
		$this->load->view('login/login_view',$data);
		// $this->load->view('footadm');
	}

	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Modellogin->cek_login("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
	
			$this->session->set_userdata($data_session);
			redirect(base_url("Myadmin"));
 
		}else{
			$this->session->set_flashdata('msg', 'Username = admin Password = admin');
			redirect(base_url("Login"));
		}
	}

   	public function aksi_logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
