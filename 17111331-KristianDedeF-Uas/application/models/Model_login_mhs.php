<?php 
 
class Model_login_mhs extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function aksi_register_mhs($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update('mahasiswa', $data);

	}

}
