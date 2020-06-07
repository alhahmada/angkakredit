<?php

class M_verif extends CI_Model
{
	public function pengajuan_all()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=1")->result_array();
	}

	public function pengajuan_2()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=2")->result_array();
	}

	public function pengajuan_3()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=3")->result_array();
	}
	public function pengajuan_4()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=4")->result_array();
	}
	public function pengajuan_5()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=5")->result_array();
	}
	public function pengajuan_6()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,a.ak_diterima, b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=6")->result_array();
	}

	public function pengajuan_not($id)
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=1 AND id_pengajuan!=" . $id . "")->result_array();
	}
	public function verifikator()
	{
		return $this->db->get_where('tbl_verifikator', array('nip' => $this->session->userdata('nip')))->result_array();
	}
	public function a1($id_pengajuan)
	{
		return $this->db->get_where('tbl_a1', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function a2($id_pengajuan)
	{
		return $this->db->get_where('tbl_a2', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b1($id_pengajuan)
	{
		return $this->db->get_where('tbl_b1', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b2($id_pengajuan)
	{
		return $this->db->get_where('tbl_b2', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b3($id_pengajuan)
	{
		return $this->db->get_where('tbl_b3', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b4($id_pengajuan)
	{
		return $this->db->get_where('tbl_b4', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b5($id_pengajuan)
	{
		return $this->db->get_where('tbl_b5', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b6($id_pengajuan)
	{
		return $this->db->get_where('tbl_b6', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b7($id_pengajuan)
	{
		return $this->db->get_where('tbl_b7', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b8($id_pengajuan)
	{
		return $this->db->get_where('tbl_b8', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b9($id_pengajuan)
	{
		return $this->db->get_where('tbl_b9', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b10($id_pengajuan)
	{
		return $this->db->get_where('tbl_b10', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b11($id_pengajuan)
	{
		return $this->db->get_where('tbl_b11', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b12($id_pengajuan)
	{
		return $this->db->get_where('tbl_b12', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function b13($id_pengajuan)
	{
		return $this->db->get_where('tbl_b13', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function c1($id_pengajuan)
	{
		return $this->db->get_where('tbl_c1', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function c2($id_pengajuan)
	{
		return $this->db->get_where('tbl_c2', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function c3($id_pengajuan)
	{
		return $this->db->get_where('tbl_c3', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function c4($id_pengajuan)
	{
		return $this->db->get_where('tbl_c4', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function c5($id_pengajuan)
	{
		return $this->db->get_where('tbl_c5', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function c6($id_pengajuan)
	{
		return $this->db->get_where('tbl_c6', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function c7($id_pengajuan)
	{
		return $this->db->get_where('tbl_c7', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function c8($id_pengajuan)
	{
		return $this->db->get_where('tbl_c8', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function d1($id_pengajuan)
	{
		return $this->db->get_where('tbl_d1', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function d2($id_pengajuan)
	{
		return $this->db->get_where('tbl_d2', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function d3($id_pengajuan)
	{
		return $this->db->get_where('tbl_d3', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function d4($id_pengajuan)
	{
		return $this->db->get_where('tbl_d4', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function d5($id_pengajuan)
	{
		return $this->db->get_where('tbl_d5', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function d6($id_pengajuan)
	{
		return $this->db->get_where('tbl_d6', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function d7($id_pengajuan)
	{
		return $this->db->get_where('tbl_d7', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e1($id_pengajuan)
	{
		return $this->db->get_where('tbl_e1', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e2($id_pengajuan)
	{
		return $this->db->get_where('tbl_e2', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e3($id_pengajuan)
	{
		return $this->db->get_where('tbl_e3', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e4($id_pengajuan)
	{
		return $this->db->get_where('tbl_e4', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e5($id_pengajuan)
	{
		return $this->db->get_where('tbl_e5', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e6($id_pengajuan)
	{
		return $this->db->get_where('tbl_e6', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e7($id_pengajuan)
	{
		return $this->db->get_where('tbl_e7', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e8($id_pengajuan)
	{
		return $this->db->get_where('tbl_e8', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e9($id_pengajuan)
	{
		return $this->db->get_where('tbl_e9', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function e10($id_pengajuan)
	{
		return $this->db->get_where('tbl_e10', array('id_pengajuan' => $id_pengajuan))->result_array();
	}
	public function verif_pengajuan($id_pengajuan, $status, $keterangan, $unsur)
	{
		$data = array(
			'id_pengajuan' => $id_pengajuan,
			'status' => $status,
			'id_verifikator' => $this->session->userdata('nip'),
			'unsur' => $unsur,
			'keterangan' => $keterangan
		);
		$this->db->insert('tbl_verif_pengajuan', $data);
	}
	public function cek_verif($id_pengajuan)
	{
		$array = array('id_pengajuan' => $id_pengajuan, 'status' => 1);
		$this->db->where($array);
		return $this->db->count_all_results('tbl_verif_pengajuan');
	}
	public function cek_verifikator()
	{
		return $this->db->query("select a.nip,b.id_pengajuan from tbl_verifikator a join tbl_verif_pengajuan b on a.unsur_verif=b.unsur where a.nip=" . $this->session->userdata('nip') . "")->result_array();
	}
	public function constraint($bab, $id_pengajuan)
	{
		return $this->db->query("select * from tbl_constraint where sub_bab like '" . $bab . "_' and id_pengajuan=$id_pengajuan")->result_array();
	}
	public function total_pendidikan($id_pengajuan)
	{
		return $this->db->query("SELECT SUM(ak_maksimal) as total FROM tbl_constraint WHERE (sub_bab LIKE 'a%' OR sub_bab LIKE 'b%' ) AND  id_pengajuan=$id_pengajuan")->result_array();
	}
	public function total_penelitian($id_pengajuan)
	{
		return $this->db->query("SELECT SUM(ak_maksimal) as total FROM tbl_constraint WHERE sub_bab LIKE 'c%' AND  id_pengajuan=$id_pengajuan")->result_array();
	}
	public function total_pengmas($id_pengajuan)
	{
		return $this->db->query("SELECT SUM(ak_maksimal) as total FROM tbl_constraint WHERE sub_bab LIKE 'd%' AND  id_pengajuan=$id_pengajuan")->result_array();
	}
	public function total_penunjang($id_pengajuan)
	{
		return $this->db->query("SELECT SUM(ak_maksimal) as total FROM tbl_constraint WHERE sub_bab LIKE 'e%' AND  id_pengajuan=$id_pengajuan")->result_array();
	}
	public function total_AK($id_pengajuan)
	{
		return $this->db->query("SELECT SUM(ak_maksimal) as total FROM tbl_constraint WHERE id_pengajuan=$id_pengajuan")->result_array();
	}
	public function batas_constraint($from, $to)
	{
	}
}
