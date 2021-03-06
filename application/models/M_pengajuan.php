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

	function data_pengajuan_dosen_8($nip)
	{
		$this->db->where('nip', $nip);
		$this->db->where('progress_pengajuan', '8');
		$this->db->from('tbl_pengajuan');
		$list = $this->db->get()->result_array();
		return $list;
	}
	function data_pengajuan_dosen_7($nip)
	{
		$this->db->where('nip', $nip);
		$this->db->where('progress_pengajuan', '7');
		$this->db->from('tbl_pengajuan');
		$list = $this->db->get()->result_array();
		return $list;
	}

	function kode_batasan($id_pengajuan, $nip)
	{
		$this->db->select('jabatan_fungsi');
		$this->db->from('tbl_user');
		$this->db->where('nip', $nip);
		$jab_fungsi = $this->db->get()->result_array();

		$this->db->select('jabatan_fungsi_to');
		$this->db->from('tbl_pengajuan');
		$this->db->where('id_pengajuan', $id_pengajuan);
		$jab_fung_to = $this->db->get()->result_array();

		$this->db->select('kode_batasan');
		$this->db->from('tbl_batasan');
		$this->db->where('jab_fung', $jab_fungsi[0]['jabatan_fungsi']);
		$this->db->where('jab_fung_to', $jab_fung_to[0]['jabatan_fungsi_to']);
		$kode = $this->db->get()->result_array();

		return $kode[0]['kode_batasan'];
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
		$data = array(
			'progress_pengajuan' => $progress,
			'tgl_pengajuan' => date('Y-m-d'),
			'keterangan' => $keterangan
		);
		$this->db->from('tbl_pengajuan');
		$this->db->where('id_pengajuan', $id_pengajuan);
		$this->db->set($data);
		return $this->db->update();
	}

	function update_verif_berkas($id_pengajuan, $status, $nip, $keterangan)
	{
		$this->db->query("INSERT INTO tbl_verif_berkas (id_pengajuan, tbl_verif_berkas.status, nip_verifikator, keterangan) VALUES ($id_pengajuan, $status, $nip, '$keterangan')");
	}

	function delete_verif($id_pengajuan)
	{
		$table = array('tbl_verif_berkas', 'tbl_verif_pengajuan');
		$this->db->where('id_pengajuan', $id_pengajuan);
		return $this->db->delete($table);
	}

	function delete_log($id_pengajuan)
	{
		$this->db->where('id_pengajuan', $id_pengajuan);
		return $this->db->delete('tbl_log_pengajuan');
	}

	function delete_penilaian($id_pengajuan)
	{
		$this->db->where('id_pengajuan', $id_pengajuan);
		return $this->db->delete('tbl_penilaian');
	}

	function delete_ak_nilai($id_pengajuan)
	{
		$data = array(
			'ak_diterima' => null,
			'ak_pendidikan_final' => null,
			'ak_penelitian_final' => null,
			'ak_pengmas_final' => null,
			'ak_penunjang_final' => null,
			'ak_diterima_final' => null
		);
		$this->db->where('id_pengajuan', $id_pengajuan);
		$this->db->from('tbl_pengajuan');
		$this->db->set($data);
		return $this->db->update();
	}

	function delete_ak_penilai_unsur($id_pengajuan)
	{
		$data = array(
			'ak_p1' => null,
			'ak_p2' => null,
			'ak_p3' => null,
			'ak_final' => null
		);
		for ($i = 1; $i < 3; $i++) {
			$this->db->where('id_pengajuan', $id_pengajuan);
			$this->db->set($data);
			$this->db->from('tbl_a' . $i);
			$this->db->update();
		}
		for ($i = 1; $i < 14; $i++) {
			$this->db->where('id_pengajuan', $id_pengajuan);
			$this->db->set($data);
			$this->db->from('tbl_b' . $i);
			$this->db->update();
		}
		for ($i = 1; $i < 9; $i++) {
			$this->db->where('id_pengajuan', $id_pengajuan);
			$this->db->set($data);
			$this->db->from('tbl_c' . $i);
			$this->db->update();
		}
		for ($i = 1; $i < 8; $i++) {
			$this->db->where('id_pengajuan', $id_pengajuan);
			$this->db->set($data);
			$this->db->from('tbl_d' . $i);
			$this->db->update();
		}
		for ($i = 1; $i < 11; $i++) {
			$this->db->where('id_pengajuan', $id_pengajuan);
			$this->db->set($data);
			$this->db->from('tbl_e' . $i);
			$this->db->update();
		}
	}

	function cek_penilaian($id_pengajuan)
	{
		return $this->db->query("SELECT * FROM tbl_penilaian WHERE id_pengajuan=$id_pengajuan AND (ak_pendidikan IS NULL OR ak_penelitian IS NULL OR ak_pengmas IS NULL OR ak_penunjang IS NULL)")->result_array();
	}

	function data_pengajuan_id($id_pengajuan)
	{
		return $this->db->get_where('tbl_pengajuan', array('id_pengajuan' => $id_pengajuan))->result_array();
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

	public function edit($data, $tbl, $id)
	{

		return $this->db->update($tbl, $data, ['id' => $id]);
	}
}
