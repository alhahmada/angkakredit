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
}
