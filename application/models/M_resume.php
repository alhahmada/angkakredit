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

    //Total Penilaian Pendidikan
    public function penilai_pendidikan($id_pengajuan, $nip, $total_penilaian_pendidikan)
    {
        $this->db->query("UPDATE tbl_penilaian SET tbl_penilaian.ak_pendidikan ='$total_penilaian_pendidikan' WHERE id_pengajuan=$id_pengajuan AND nip=$nip");
    }

    //Total Penilaian Penelitian
    public function penilai_penelitian($id_pengajuan, $nip, $total_penilaian_penelitian)
    {
        $this->db->query("UPDATE tbl_penilaian SET tbl_penilaian.ak_penelitian ='$total_penilaian_penelitian' WHERE id_pengajuan=$id_pengajuan AND nip=$nip");
    }

    //Total Penilaian Pengmas
    public function penilai_pengmas($id_pengajuan, $nip, $total_penilaian_pengmas)
    {
        $this->db->query("UPDATE tbl_penilaian SET tbl_penilaian.ak_pengmas ='$total_penilaian_pengmas' WHERE id_pengajuan=$id_pengajuan AND nip=$nip");
    }

    //Total Penilaian Penunjang
    public function penilai_penunjang($id_pengajuan, $nip, $total_penilaian_penunjang)
    {
        $this->db->query("UPDATE tbl_penilaian SET tbl_penilaian.ak_penunjang ='$total_penilaian_penunjang' WHERE id_pengajuan=$id_pengajuan AND nip=$nip");
    }

    public function resume_penilai($id_pengajuan, $nip)
    {
        return $this->db->query("SELECT ak_pendidikan, ak_penelitian, ak_pengmas, ak_penunjang FROM tbl_penilaian WHERE id_pengajuan=$id_pengajuan AND nip=$nip")->result_array();
    }
    public function resume_penetapan($id_pengajuan)
    {
        return $this->db->query("SELECT ak_pendidikan_final, ak_penelitian_final, ak_pengmas_final, ak_penunjang_final FROM tbl_pengajuan WHERE id_pengajuan=$id_pengajuan")->result_array();
    }
}
