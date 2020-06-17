<?php

class M_pengajuan extends CI_Model
{

	function data_pengajuan()
	{
		return $this->db->get_where('tbl_pengajuan', array('nip' => $this->session->userdata('nip')))->result_array();
	}

	function data_pengajuan_5last()
	{
		$nip = $this->session->userdata('nip');
		return $this->db->query("SELECT * FROM tbl_pengajuan WHERE nip=$nip ORDER BY id_pengajuan desc LIMIT 0, 5")->result_array();
	}


	function pengajuan_all()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=0")->result_array();
	}


	function test()
	{
		return $this->db->query("select a.*,b.nama_lengkap,b.email from tbl_pengajuan a join tbl_user b ON a.nip=b.nip where a.nip='345678'")->result_array();
	}

	public function data_pengajuan_sekarang($id_pengajuan)
	{
		return $this->db->query("SELECT * FROM tbl_pengajuan WHERE id_pengajuan = $id_pengajuan")->result_array();
	}


	function total_per_progress()
	{
		$data = array();
		for ($i = 0; $i < 8; $i++) {
			$cek = $this->db->query("SELECT count(*) as total from tbl_pengajuan where progress_pengajuan=" . $i . " group by progress_pengajuan")->result_array();
			if ($cek != null) {
				$data[$i] = $cek[0]['total'];
			} else {
				$data[$i] = 0;
			}
		}
		return $data;
	}


	function data_berkas($id)
	{
		return $this->db->get_where('tbl_pengajuan_berkas', array('id_pengajuan' => $id))->result_array();
	}


	function user_pengajuan($id)
	{
		return $this->db->query("SELECT a.tgl_pengajuan, b.* from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.id_pengajuan=" . $id . "")->result_array();
	}


	function update_log($id_pengajuan, $keterangan, $jenis_berkas)
	{
		$data = array(
			'id_pengajuan' => $id_pengajuan,
			'updated_at' => date('Y-m-d h:i:s'),
			'keterangan' => $keterangan,
			'jenis_berkas' => $jenis_berkas
		);
		$this->db->insert('tbl_log_pengajuan', $data);
		return $data;
	}


	function update_progress($id_pengajuan, $progress, $keterangan)
	{
		$this->db->query("UPDATE tbl_pengajuan set progress_pengajuan='$progress',keterangan='$keterangan' where id_pengajuan=$id_pengajuan");
	}

	function update_verif_berkas($id_pengajuan, $status, $nip, $keterangan)
	{
		$this->db->query("INSERT INTO tbl_verif_berkas (id_pengajuan, tbl_verif_berkas.status, nip_verifikator, keterangan) VALUES ($id_pengajuan, $status, $nip, $keterangan)");
	}


	function cek_penilaian($id_pengajuan)
	{
		return $this->db->query("SELECT * FROM tbl_penilaian WHERE id_pengajuan=$id_pengajuan AND (ak_pendidikan IS NULL OR ak_penelitian IS NULL OR ak_pengmas IS NULL OR ak_penunjang IS NULL)")->result_array();
	}

	public function log_pengajuan($id_pengajuan)
	{
		return $this->db->query("SELECT ");
	}

	function data_pengajuan_id($id_pengajuan)
	{
		return $this->db->query("SELECT pangkat_to, jabatan_fungsi_to, gol_to, ak_diterima FROM tbl_pengajuan WHERE id_pengajuan = $id_pengajuan")->result_array();
	}

	function pengajuan_selesai()
	{
		return $this->db->query("SELECT b.id_pengajuan, a.nama_lengkap, b.tgl_pengajuan, a.jabatan_fungsi, b.ak_diterima FROM tbl_user a JOIN tbl_pengajuan b ON a.nip=b.nip WHERE b.progress_pengajuan = '6'")->result_array();
	}

	function pengajuan_tolak()
	{
		return $this->db->query("SELECT b.id_pengajuan, a.nama_lengkap, b.tgl_pengajuan FROM tbl_user a JOIN tbl_pengajuan b ON a.nip=b.nip WHERE b.progress_pengajuan = '7'")->result_array();
	}

	function pengajuan_progress()
	{
		return $this->db->query("SELECT b.id_pengajuan, a.nama_lengkap, b.tgl_pengajuan, b.progress_pengajuan FROM tbl_user a JOIN tbl_pengajuan b ON a.nip=b.nip WHERE b.progress_pengajuan  != '7' AND b.progress_pengajuan != '6'")->result_array();
	}
}
