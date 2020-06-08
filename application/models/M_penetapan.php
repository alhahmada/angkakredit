<?php

class M_penetapan extends CI_Model
{
    public function final_a1($id_pengajuan, $nilai_a1_final)
    {
        $this->db->query("UPDATE tbl_a1 SET ak_final=$nilai_a1_final WHERE id_pengajuan=$id_pengajuan");
    }

    public function update_nilai_final($tbl, $id_bab, $nilai)
    {
        $this->db->query("UPDATE $tbl set  ak_final='$nilai' where id='$id_bab'");
    }

    public function update_total_nilai_final($id_pengajuan, $total, $bab)
    {
        $this->db->query("UPDATE tbl_pengajuan set ak_" . $bab . "_final=$total where id_pengajuan=$id_pengajuan");
    }
    public function update_ak_penetapan($id_pengajuan, $ak_total_final)
    {

        $this->db->query("UPDATE tbl_pengajuan SET ak_diterima_final=$ak_total_final WHERE id_pengajuan = $id_pengajuan");
    }

    public function update_ak_dosen($nip, $ak_baru)
    {
        $this->db->query("UPDATE tbl_user SET angka_kredit=$ak_baru WHERE nip=$nip");
    }
}
