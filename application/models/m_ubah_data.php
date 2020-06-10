<?php

class M_ubah_data extends CI_Model
{
    public function ubah_nip($nip, $nip_baru)
    {
        $this->db->query("UPDATE tbl_user SET nip=$nip_baru where nip=$nip");
    }

    public function ubah_nama($nip, $nama_baru)
    {
        $this->db->query("UPDATE tbl_user SET nama_lengkap='$nama_baru' WHERE nip=$nip");
    }

    public function ubah_email($nip, $email_baru)
    {
        $this->db->query("UPDATE tbl_user SET email=$email_baru where nip=$nip");
    }

    public function ubah_nohp($nip, $nohp_baru)
    {
        $this->db->query("UPDATE tbl_user SET no_hp=$nohp_baru where nip=$nip");
    }

    public function ubah_prodi($nip, $prodi_baru)
    {
        $this->db->query("UPDATE tbl_user SET prodi=$prodi_baru where nip=$nip");
    }

    public function ubah_foto($nip, $foto_baru)
    {
        $this->db->query("UPDATE tbl_user SET foto=$foto_baru where nip=$nip");
    }

    public function ubah_password($nip, $password_baru)
    {
        $this->db->query("UPDATE tbl_user SET tbl_user.password=$password_baru where nip=$nip");
    }
}
