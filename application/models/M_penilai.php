<?php

class M_penilai extends CI_Model
{
    public function list_penilai()
    {
        return $this->db->query("SELECT nip,nama_lengkap FROM tbl_user WHERE tbl_user.role='5' OR tbl_user.role='4'")->result_array();
    }

    public function penilai_pengajuan($id_pengajuan)
    {
        return $this->db->query("SELECT a.nama_lengkap, b.keterangan FROM tbl_user a JOIN tbl_penilaian b ON a.nip=b.nip WHERE b.id_pengajuan = $id_pengajuan order by b.keterangan")->result_array();
    }

    public function pilih_penilai($nip_penilai, $id_pengajuan, $keterangan)
    {
        $data = array(
            'nip' => $nip_penilai,
            'id_pengajuan' => $id_pengajuan,
            'keterangan' => $keterangan
        );
        $this->db->insert('tbl_penilaian', $data);
    }

    public function update_nilai($tbl, $id_bab, $nilai, $penilai)
    {
        $this->db->query("UPDATE $tbl set  $penilai='$nilai' where id='$id_bab'");
    }

    public function update_total_nilai($id_pengajuan, $total, $bab)
    {
        $this->db->query("UPDATE tbl_penilaian set ak_" . $bab . "=$total where id_pengajuan=$id_pengajuan AND nip='" . $this->session->userdata('nip') . "'");
    }
    public function cek_penilai()
    {
        $array = $this->db->query("SELECT a.id_pengajuan FROM tbl_penilaian a JOIN tbl_pengajuan b ON a.id_pengajuan=b.id_pengajuan WHERE a.nip=" . $this->session->userdata('nip') . " AND STATUS = 1")->result_array();
        $array_id = array();
        foreach ($array as $key => $value) {
            $array_id[] = $value['id_pengajuan'];
        }
        return $id = implode(",", $array_id);
    }
}
