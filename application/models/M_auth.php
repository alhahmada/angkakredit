<?php 

class M_auth extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function data_user(){		
		return $this->db->get_where('tbl_user', array('nip' => $this->session->userdata('nip')))->result_array();
	}		
}