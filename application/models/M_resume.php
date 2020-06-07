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


    public function n_a1($id_pengajuan, $nilai_a1, $nip)
    {
        $keterangan = $this->db->query("SELECT keterangan FROM tbl_penilaian WHERE id_pengajuan=" . $id_pengajuan . " AND nip=" . $nip . "")->result_array();
        $data = array(
            'id_pengajuan' => $id_pengajuan,
            'ak_p' . $keterangan['0']['keterangan'] => $nilai_a1
        );
        $this->db->insert('tbl_a1', $data);
    }
}
