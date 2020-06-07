<?php

class M_penilai extends CI_Model
{
    public function list_penilai()
    {
        return $this->db->query("SELECT nama_lengkap FROM tbl_user WHERE tbl_user.role='5' OR tbl_user.role='4'")->result_array();
    }
}
