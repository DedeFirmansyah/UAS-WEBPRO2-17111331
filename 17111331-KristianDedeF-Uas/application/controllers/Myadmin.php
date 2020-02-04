<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('Modeladmin');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		} 

	}

	public function index(){
		$data['title'] = "Admin Web | Sekolah Tinggi Teknologi Bandung";
		$data['tampil'] = $this->Modeladmin->tampil_data();
		$this->load->view('headadm',$data);
		$this->load->view('dashboard');
		$this->load->view('footadm');

	}
	public function ubahData($id = null){
		if (is_null($id)) {
			$this->session->set_flashdata('flash', 'kosong');
			redirect('Myadmin');

		}
		$where = array('id' => $id );
		$data['title'] = "Ubah Data";
		$data['datamhs'] = $this->Modeladmin->ubah_data($where, 'mahasiswa')->row_array();
		$this->load->view('modul/ubahData', $data);
	}

	public function aksi_ubah_data()
	{
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$semester = $this->input->post('semester');
		$id = $this->input->post('id');
		
		$data = array(
			'nama' =>  $nama, 
			'npm' =>  $npm,
			'semester' =>  $semester
		);

		$where = array('id' => $id );

		$this->Modeladmin->aksi_ubah_data($where, $data, "mahasiswa");
		$this->session->set_flashdata('flash', 'diubah');
		redirect('Myadmin');
	}

	public function aksi_hapus_data($id)
	{

		$where = array('id' => $id );
		$this->Modeladmin->aksi_hapus_data($id, $where);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('Myadmin');
	}


	public function aksi_tambah_data(){
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$semester = $this->input->post('semester');
		$status_user = "0";
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'semester' => $semester,
			'status_user' => $status_user
	
		);
		$this->Modeladmin->tambah_data($data,'mahasiswa');
		$this->session->set_flashdata('flash', 'ditambah');
		redirect('Myadmin');
	}
}
