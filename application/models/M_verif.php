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

	public function pengajuan3_not($id)
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=3 AND id_pengajuan NOT IN(" . $id . ")")->result_array();
	}
	public function pengajuan_4()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=4")->result_array();
	}
	public function pengajuan_5()
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan, a.ak_diterima, a.jabatan_fungsi_to, a.gol_to, a.pangkat_to ,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=5")->result_array();
	}
	public function pengajuan_6()
	{
		return $this->db->query("select a.id_pengajuan, a.tgl_pengajuan, a.ak_diterima_final, b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=6")->result_array();
	}

	public function pengajuan_11()
	{
		return $this->db->query("SELECT a.*, b.nama_lengkap from tbl_pengajuan a JOIN tbl_user b ON a.nip = b.nip WHERE a.progress_pengajuan = 11")->result_array();
		// $this->db->select('*');
		// $this->db->from('tbl_pengajuan');
		// $this->db->join('tbl_user', 'tbl_pengajuan.nip = tbl_user.nip');
		// $this->db->where('tbl_pengajuan.progress_pengajuan', 11);
		// $pengajuan11 = $this->db->get()->result_array();
	}




	public function pengajuan_not($id)
	{
		return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=1 AND id_pengajuan NOT IN(" . $id . ")")->result_array();
	}
	public function verifikator()
	{
		return $this->db->get_where('tbl_verifikator', array('nip' => $this->session->userdata('nip')))->result_array();
	}
	public function a1($id_pengajuan)
	{
		return $this->db->get_where('tbl_a1', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function a2($id_pengajuan)
	{
		return $this->db->get_where('tbl_a2', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b1($id_pengajuan)
	{
		return $this->db->get_where('tbl_b1', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b2($id_pengajuan)
	{
		return $this->db->get_where('tbl_b2', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b3($id_pengajuan)
	{
		return $this->db->get_where('tbl_b3', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b4($id_pengajuan)
	{
		return $this->db->get_where('tbl_b4', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b5($id_pengajuan)
	{
		return $this->db->get_where('tbl_b5', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b6($id_pengajuan)
	{
		return $this->db->get_where('tbl_b6', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b7($id_pengajuan)
	{
		return $this->db->get_where('tbl_b7', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b8($id_pengajuan)
	{
		return $this->db->get_where('tbl_b8', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b9($id_pengajuan)
	{
		return $this->db->get_where('tbl_b9', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b10($id_pengajuan)
	{
		return $this->db->get_where('tbl_b10', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b11($id_pengajuan)
	{
		return $this->db->get_where('tbl_b11', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b12($id_pengajuan)
	{
		return $this->db->get_where('tbl_b12', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function b13($id_pengajuan)
	{
		return $this->db->get_where('tbl_b13', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function c1($id_pengajuan)
	{
		return $this->db->get_where('tbl_c1', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function c2($id_pengajuan)
	{
		return $this->db->get_where('tbl_c2', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function c3($id_pengajuan)
	{
		return $this->db->get_where('tbl_c3', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function c4($id_pengajuan)
	{
		return $this->db->get_where('tbl_c4', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function c5($id_pengajuan)
	{
		return $this->db->get_where('tbl_c5', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function c6($id_pengajuan)
	{
		return $this->db->get_where('tbl_c6', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function c7($id_pengajuan)
	{
		return $this->db->get_where('tbl_c7', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function c8($id_pengajuan)
	{
		return $this->db->get_where('tbl_c8', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function d1($id_pengajuan)
	{
		return $this->db->get_where('tbl_d1', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function d2($id_pengajuan)
	{
		return $this->db->get_where('tbl_d2', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function d3($id_pengajuan)
	{
		return $this->db->get_where('tbl_d3', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function d4($id_pengajuan)
	{
		return $this->db->get_where('tbl_d4', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function d5($id_pengajuan)
	{
		return $this->db->get_where('tbl_d5', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function d6($id_pengajuan)
	{
		return $this->db->get_where('tbl_d6', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function d7($id_pengajuan)
	{
		return $this->db->get_where('tbl_d7', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e1($id_pengajuan)
	{
		return $this->db->get_where('tbl_e1', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e2($id_pengajuan)
	{
		return $this->db->get_where('tbl_e2', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e3($id_pengajuan)
	{
		return $this->db->get_where('tbl_e3', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e4($id_pengajuan)
	{
		return $this->db->get_where('tbl_e4', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e5($id_pengajuan)
	{
		return $this->db->get_where('tbl_e5', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e6($id_pengajuan)
	{
		return $this->db->get_where('tbl_e6', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e7($id_pengajuan)
	{
		return $this->db->get_where('tbl_e7', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e8($id_pengajuan)
	{
		return $this->db->get_where('tbl_e8', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e9($id_pengajuan)
	{
		return $this->db->get_where('tbl_e9', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
	}
	public function e10($id_pengajuan)
	{
		return $this->db->get_where('tbl_e10', array('id_pengajuan' => $id_pengajuan, 'status' => null))->result_array();
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
		$array = $this->db->query("select b.id_verifikator,b.id_pengajuan from tbl_verifikator a join tbl_verif_pengajuan b on a.unsur_verif=b.unsur WHERE b.id_verifikator=" . $this->session->userdata('nip') . "")->result_array();
		$array_id = array();
		foreach ($array as $key => $value) {
			$array_id[] = $value['id_pengajuan'];
		}
		return $id = implode(",", $array_id);
	}

	public function list_verif($verif_unsur)
	{
		$this->db->select('nip');
		$this->db->from('tbl_verifikator');
		$this->db->where('unsur_verif', $verif_unsur);
		$nip_verif = $this->db->get()->result_array();

		for ($i = 0; $i < count($nip_verif); $i++) {
			$this->db->from('tbl_user');
			$this->db->where('nip', $nip_verif[$i]['nip']);
			$verif[$i] = $this->db->get()->result_array();
		}

		return $verif[0];
	}

	public function pilih_verifikator($nip_verif, $id_pengajuan, $unsur)
	{
		$data = array(
			'id_verifikator' => $nip_verif,
			'id_pengajuan' => $id_pengajuan,
			'unsur' => $unsur,
			'status' => 0
		);
		$this->db->insert('tbl_verif_pengajuan', $data);
	}













	public function total_unsur($id_pengajuan, $tbl)
	{
		$this->db->select_sum('ak_maks');
		$this->db->from($tbl);
		$this->db->where('id_pengajuan', $id_pengajuan);
		$this->db->where('status', null);

		$total = $this->db->get()->result_array();

		if ($total != null) {
			return $total;
		} else {
			$total = 0;
			return $total;
		}
	}


	public function id_terverif($nip)
	{
		$array = $this->db->query("SELECT id_pengajuan FROM tbl_verif_pengajuan WHERE id_verifikator=$nip AND status='1'")->result_array();
		$array_id = array();
		foreach ($array as $key => $value) {
			$array_id[] = $value['id_pengajuan'];
		}
		$id = implode(",", $array_id);
		return $this->db->query("SELECT a.id_pengajuan, a.tgl_pengajuan, b.nama_lengkap FROM tbl_pengajuan a JOIN tbl_user b ON a.nip=b.nip WHERE a.id_pengajuan IN(" . $id . ")")->result_array();
	}
	public function id_tidak_verif($nip)
	{
		return $this->db->query("SELECT id_pengajuan FROM tbl_verif_pengajuan WHERE id_verifikator=$nip AND status='2'")->result_array();
	}

	public function selesai_nilai($nip)
	{
		return $this->db->query("SELECT a.ak_pendidikan, a.ak_penelitian, a.ak_pengmas, a.ak_penunjang, b.tgl_pengajuan, b.id_pengajuan, c.nama_lengkap FROM tbl_penilaian a JOIN tbl_pengajuan b ON a.id_pengajuan=b.id_pengajuan JOIN tbl_user c ON b.nip=c.nip WHERE a.nip=$nip AND a.ak_penunjang IS NOT NULL")->result_array();
	}
	public function belum_dinilai($nip)
	{
		$array = $this->db->query("SELECT id_pengajuan FROM tbl_penilaian WHERE nip=$nip AND ak_penunjang IS NULL")->result_array();
		$array_id = array();
		foreach ($array as $key => $value) {
			$array_id[] = $value['id_pengajuan'];
		}
		$id = implode(",", $array_id);
		if ($id != null) {
			return $this->db->query("SELECT a.id_pengajuan, a.tgl_pengajuan, b.nama_lengkap FROM tbl_pengajuan a JOIN tbl_user b ON a.nip=b.nip WHERE a.id_pengajuan IN(" . $id . ")")->result_array();
		}
	}



	public function cek_verif_berkas($id_pengajuan)
	{
		return $this->db->query("SELECT a.id_pengajuan, a.status, b.updated_at, b.keterangan FROM tbl_verif_berkas a JOIN tbl_log_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE b.jenis_berkas ='Berkas Pengajuan' AND b.id_pengajuan=$id_pengajuan ")->result_array();
	}
	public function cek_verif_pendidikan($id_pengajuan)
	{
		return $this->db->query("SELECT a.id_pengajuan, a.status, b.updated_at, b.keterangan FROM tbl_verif_pengajuan a JOIN tbl_log_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE b.jenis_berkas ='Berkas Pendidikan' AND a.id_pengajuan =$id_pengajuan ORDER BY b.updated_at desc LIMIT 1 ")->result_array();
	}
	public function cek_verif_penelitian($id_pengajuan)
	{
		return $this->db->query("SELECT a.id_pengajuan, a.status, b.updated_at, b.keterangan FROM tbl_verif_pengajuan a JOIN tbl_log_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE b.jenis_berkas ='Berkas Penelitian' AND a.id_pengajuan =$id_pengajuan  ORDER BY b.updated_at desc LIMIT 1")->result_array();
	}
	public function cek_verif_pengmas($id_pengajuan)
	{
		return $this->db->query("SELECT a.id_pengajuan, a.status, b.updated_at, b.keterangan FROM tbl_verif_pengajuan a JOIN tbl_log_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE b.jenis_berkas ='Berkas Pengmas' AND a.id_pengajuan =$id_pengajuan  ORDER BY b.updated_at desc LIMIT 1")->result_array();
	}
	public function cek_verif_penunjang($id_pengajuan)
	{
		return $this->db->query("SELECT a.id_pengajuan, a.status, b.updated_at, b.keterangan FROM tbl_verif_pengajuan a JOIN tbl_log_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE b.jenis_berkas ='Berkas Penunjang' AND a.id_pengajuan =$id_pengajuan  ORDER BY b.updated_at desc LIMIT 1")->result_array();
	}
	public function cek_penilaian_1($id_pengajuan)
	{
		return $this->db->query("SELECT a.id_pengajuan, a.ak_pendidikan, b.updated_at, b.keterangan FROM tbl_penilaian a JOIN tbl_log_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE a.id_pengajuan = $id_pengajuan AND b.jenis_berkas ='Penilaian_1' ORDER BY b.updated_at desc LIMIT 1")->result_array();
	}
	public function cek_penilaian_2($id_pengajuan)
	{
		return $this->db->query("SELECT a.id_pengajuan, a.ak_pendidikan, b.updated_at, b.keterangan FROM tbl_penilaian a JOIN tbl_log_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE a.id_pengajuan = $id_pengajuan AND b.jenis_berkas ='Penilaian_2' ORDER BY b.updated_at desc LIMIT 1")->result_array();
	}
	public function cek_penilaian_3($id_pengajuan)
	{
		return $this->db->query("SELECT a.id_pengajuan, a.ak_pendidikan, b.updated_at, b.keterangan FROM tbl_penilaian a JOIN tbl_log_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE a.id_pengajuan = $id_pengajuan AND b.jenis_berkas ='Penilaian_3' ORDER BY b.updated_at desc LIMIT 1 ")->result_array();
	}
	public function cek_penetapan($id_pengajuan)
	{
		return $this->db->query("SELECT a.*, b.ak_diterima_final FROM tbl_log_pengajuan a JOIN tbl_pengajuan b ON a.id_pengajuan = b.id_pengajuan WHERE a.id_pengajuan=$id_pengajuan AND a.jenis_berkas='Penetapan Angka Kredit' ORDER BY a.updated_at desc LIMIT 1 ")->result_array();
	}

	public function status_verif($id_pengajuan)
	{
		$unsur_a = 'verif_pendidikan';
		$unsur_b = 'verif_penelitian';
		$unsur_c = 'verif_pengmas';
		$unsur_d = 'verif_penunjang';

		$a = array();
		$b = array();
		$c = array();
		$d = array();

		$a = $this->db->query("SELECT tbl_verif_pengajuan.status FROM tbl_verif_pengajuan WHERE unsur = '$unsur_a' AND id_pengajuan =$id_pengajuan")->result_array();
		$b = $this->db->query("SELECT tbl_verif_pengajuan.status FROM tbl_verif_pengajuan WHERE unsur = '$unsur_b' AND id_pengajuan =$id_pengajuan")->result_array();
		$c = $this->db->query("SELECT tbl_verif_pengajuan.status FROM tbl_verif_pengajuan WHERE unsur = '$unsur_c' AND id_pengajuan =$id_pengajuan")->result_array();
		$d = $this->db->query("SELECT tbl_verif_pengajuan.status, id_verifikator FROM tbl_verif_pengajuan WHERE unsur = '$unsur_d' AND id_pengajuan =$id_pengajuan")->result_array();

		$status = array();

		if ($a[0]['status'] == 0) {
			$status[0]['A'] = 'Belum Diverifikasi';
		} else {
			$status[0]['A'] = 'Sudah Diverifikasi';
		}

		if ($b[0]['status'] == 0) {
			$status[0]['B'] = 'Belum Diverifikasi';
		} else {
			$status[0]['B'] = 'Sudah Diverifikasi';
		}

		if ($c[0]['status'] == 0) {
			$status[0]['C'] = 'Belum Diverifikasi';
		} else {
			$status[0]['C'] = 'Sudah Diverifikasi';
		}

		if ($d[0]['status'] == 0) {
			$status[0]['D'] = '0';
		} else {
			$status[0]['D'] = '1';
		}

		$status[0]['verif_penunjang'] = $d[0]['id_verifikator'];

		return $status;
	}

	public function status_penilaian($id_pengajuan)
	{

		$p1 = $this->db->query("SELECT a.ak_pendidikan FROM tbl_penilaian a JOIN tbl_pengajuan b ON a.id_pengajuan = b.id_pengajuan WHERE b.progress_pengajuan='3' AND a.keterangan = '1' AND a.id_pengajuan ='$id_pengajuan'")->result_array();
		$p2 = $this->db->query("SELECT a.ak_pendidikan FROM tbl_penilaian a JOIN tbl_pengajuan b ON a.id_pengajuan = b.id_pengajuan WHERE b.progress_pengajuan='3' AND a.keterangan = '2' AND a.id_pengajuan ='$id_pengajuan'")->result_array();
		$p3 = $this->db->query("SELECT a.ak_pendidikan FROM tbl_penilaian a JOIN tbl_pengajuan b ON a.id_pengajuan = b.id_pengajuan WHERE b.progress_pengajuan='3' AND a.keterangan = '3' AND a.id_pengajuan ='$id_pengajuan'")->result_array();

		if ($p1[0]['ak_pendidikan'] == null) {
			$status_p1 = 'Belum Dinilai';
		} else {
			$status_p1 = 'Sudah Dinilai';
		}

		if ($p2[0]['ak_pendidikan'] == null) {
			$status_p2 = 'Belum Dinilai';
		} else {
			$status_p2 = 'Sudah Dinilai';
		}
		if ($p3[0]['ak_pendidikan'] == null) {
			$status_p3 = 'Belum Dinilai';
		} else {
			$status_p3 = 'Sudah Dinilai';
		}

		$status = array(
			'p1' => $status_p1,
			'p2' => $status_p2,
			'p3' => $status_p3
		);

		return $status;
	}
}
