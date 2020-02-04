<?php

class Modeladmin extends CI_model
{	
	
	function tambah_data($data, $table){
		$this->db->insert($table, $data);
	}

	function tampil_data(){
		return $this->db->get("mahasiswa")->result();
	 	// $this->db->query("Select * From mahasiswa");
	 	// return; 
	}

	function ubah_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function aksi_ubah_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update('mahasiswa', $data);

	}

	function aksi_hapus_data($id, $where)
	{
		 $this->db->where($where);
        $this->db->delete('mahasiswa');
	}

}

 ?>