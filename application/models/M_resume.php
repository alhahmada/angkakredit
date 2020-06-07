<?php

class M_resume extends CI_Model
{
    function pengajuan_all()
    {
        return $this->db->query("select a.id_pengajuan,a.tgl_pengajuan,b.nama_lengkap from tbl_pengajuan a join tbl_user b on a.nip=b.nip where a.progress_pengajuan=1")->result_array();
    }
    public function a1($id_pengajuan)
    {
        return $this->db->get_where('tbl_a1', array('id_pengajuan' => $id_pengajuan))->result_array();
    }


    // PENDIDIKAN DAN PELAKSANAAN PENDIDIKAN
    public function n_a1($id_pengajuan, $nilai_a1, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_a1 SET $ak_p=$nilai_a1 WHERE id_pengajuan=$id_pengajuan");
    }


    public function n_a2($id_pengajuan, $nilai_a2, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_a2 SET $ak_p=$nilai_a2 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b1($id_pengajuan, $nilai_b1, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b1 SET $ak_p=$nilai_b1 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b2($id_pengajuan, $nilai_b2, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b2 SET $ak_p=$nilai_b2 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b3($id_pengajuan, $nilai_b3, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b3 SET $ak_p=$nilai_b3 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b4($id_pengajuan, $nilai_b4, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b4 SET $ak_p=$nilai_b4 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b5($id_pengajuan, $nilai_b5, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b5 SET $ak_p=$nilai_b5 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b6($id_pengajuan, $nilai_b6, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b6 SET $ak_p=$nilai_b6 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b7($id_pengajuan, $nilai_b7, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b7 SET $ak_p=$nilai_b7 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b8($id_pengajuan, $nilai_b8, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b8 SET $ak_p=$nilai_b8 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b9($id_pengajuan, $nilai_b9, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b9 SET $ak_p=$nilai_b9 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b10($id_pengajuan, $nilai_b10, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b10 SET $ak_p=$nilai_b10 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b11($id_pengajuan, $nilai_b11, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b11 SET $ak_p=$nilai_b11 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b12($id_pengajuan, $nilai_b12, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b12 SET $ak_p=$nilai_b12 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_b13($id_pengajuan, $nilai_b13, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_b13 SET $ak_p=$nilai_b13 WHERE id_pengajuan=$id_pengajuan");
    }

    // PENELITIAN
    public function n_c1($id_pengajuan, $nilai_c1, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_c1 SET $ak_p=$nilai_c1 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_c2($id_pengajuan, $nilai_c2, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_c2 SET $ak_p=$nilai_c2 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_c3($id_pengajuan, $nilai_c3, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_c3 SET $ak_p=$nilai_c3 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_c4($id_pengajuan, $nilai_c4, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_c4 SET $ak_p=$nilai_c4 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_c5($id_pengajuan, $nilai_c5, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_c5 SET $ak_p=$nilai_c5 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_c6($id_pengajuan, $nilai_c6, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_c6 SET $ak_p=$nilai_c6 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_c7($id_pengajuan, $nilai_c7, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_c7 SET $ak_p=$nilai_c7 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_c8($id_pengajuan, $nilai_c8, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_c8 SET $ak_p=$nilai_c8 WHERE id_pengajuan=$id_pengajuan");
    }


    // PENGABDIAN MASYARAKAT
    public function n_d1($id_pengajuan, $nilai_d1, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_d1 SET $ak_p=$nilai_d1 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_d2($id_pengajuan, $nilai_d2, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_d2 SET $ak_p=$nilai_d2 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_d3($id_pengajuan, $nilai_d3, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_d3 SET $ak_p=$nilai_d3 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_d4($id_pengajuan, $nilai_d4, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_d4 SET $ak_p=$nilai_d4 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_d5($id_pengajuan, $nilai_d5, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_d5 SET $ak_p=$nilai_d5 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_d6($id_pengajuan, $nilai_d6, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_d6 SET $ak_p=$nilai_d6 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_d7($id_pengajuan, $nilai_d7, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_d7 SET $ak_p=$nilai_d7 WHERE id_pengajuan=$id_pengajuan");
    }

    // PENUNJANG
    public function n_e1($id_pengajuan, $nilai_e1, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e1 SET $ak_p=$nilai_e1 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e2($id_pengajuan, $nilai_e2, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e2 SET $ak_p=$nilai_e2 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e3($id_pengajuan, $nilai_e3, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e3 SET $ak_p=$nilai_e3 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e4($id_pengajuan, $nilai_e4, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e4 SET $ak_p=$nilai_e4 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e5($id_pengajuan, $nilai_e5, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e5 SET $ak_p=$nilai_e5 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e6($id_pengajuan, $nilai_e6, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e6 SET $ak_p=$nilai_e6 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e7($id_pengajuan, $nilai_e7, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e7 SET $ak_p=$nilai_e7 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e8($id_pengajuan, $nilai_e8, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e8 SET $ak_p=$nilai_e8 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e9($id_pengajuan, $nilai_e9, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e9 SET $ak_p=$nilai_e9 WHERE id_pengajuan=$id_pengajuan");
    }
    public function n_e10($id_pengajuan, $nilai_e10, $nip, $ak_p)
    {
        $this->db->query("UPDATE tbl_e10 SET $ak_p=$nilai_e10 WHERE id_pengajuan=$id_pengajuan");
    }
    // public function total_pendidikan_penilai($id_pengajuan, $ak_p)
    // {
    // 	return $this->db->query("SELECT SUM($ak_p) as total_pendidikan_penilai FROM tbl_constraint WHERE (sub_bab LIKE 'a%' OR sub_bab LIKE 'b%' ) AND  id_pengajuan=$id_pengajuan")->result_array();
    // }
}
