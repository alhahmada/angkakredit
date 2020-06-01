<?php 

class M_pengajuan extends CI_Model{	

	function data_pengajuan(){		
		return $this->db->get_where('tbl_pengajuan', array('nip' => $this->session->userdata('nip')))->result_array();
	}
	function test(){
		return $this->db->query("select a.*,b.nama_lengkap,b.email from tbl_pengajuan a join tbl_user b ON a.nip=b.nip where a.nip='345678'")->result_array();
	}		
}