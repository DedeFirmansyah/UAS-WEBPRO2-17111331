<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginMahasiswa extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('Model_mhs');
		$this->load->model('Model_login_mhs');
		
	}

	public function index(){
		if($this->session->userdata('status') == "login"){
			redirect(base_url("Mahasiswa"));
		}
		$data['title'] = "Login | Sekolah Tinggi Teknologi Bandung";
		$this->load->view('mahasiswa/login_view' ,$data);
	}

	public function register(){
		if($this->session->userdata('status') == "login"){
			redirect(base_url("Mahasiswa"));
		}
		$data['title'] = "Register | Sekolah Tinggi Teknologi Bandung";
		$this->load->view('mahasiswa/register_view',$data);
	}
	public function aksi_register()
	{
		$npm = $this->input->post('npm');
		$password = $this->input->post('password');
		$where = array(
			'npm' => $npm
			);
		$cek = $this->Model_login_mhs->cek_login("mahasiswa",$where)->num_rows();
		if($cek > 0){
			$cekStatus = $this->Model_login_mhs->cek_login("mahasiswa",$where)->row_array();
			if ($cekStatus['status_user'] == "1") {
				$this->session->set_flashdata('msg', 'Npm anda sudah terdaftar silahkan login');
				redirect(base_url("LoginMahasiswa/register"));
			}else{
				$data = array(
				'password' =>  $password, 
				'status_user' => '1'
				);
				$where = array('npm' => $npm );
				$this->Model_login_mhs->aksi_register_mhs($where, $data, "mahasiswa");
				$this->session->set_flashdata('msg', 'Register berhasil silahkan login');
				redirect(base_url("LoginMahasiswa"));
			}

		}else{
			$this->session->set_flashdata('msg', 'Npm tidak terdaftar');
			redirect(base_url("LoginMahasiswa/register"));
		}

	}

	public function aksi_login()
	{
		$npm = $this->input->post('npm');
		$password = $this->input->post('password');
		$status_user = "1";
		$where = array(
			'npm' => $npm,
			'password' => $password,
			'status_user' => $status_user
			);
		$cek = $this->Model_login_mhs->cek_login("mahasiswa",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'npm' => $npm,
				'status' => "login"
				);
	
 
			$this->session->set_userdata($data_session);
			redirect(base_url("Mahasiswa"));
 
		}else{
			$this->session->set_flashdata('msg', 'Username  =17111331 Password = 123456');
			redirect(base_url("LoginMahasiswa"));
		}
	}

   	public function aksi_logout(){
		$this->session->sess_destroy();
		redirect(base_url('LoginMahasiswa'));
	}
}
