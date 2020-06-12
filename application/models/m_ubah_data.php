<?php

class M_ubah_data extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
    }


    public function ubah_nip($id, $nip_baru)
    {
        $this->db->query("UPDATE tbl_user SET nip=$nip_baru where id=$id");
    }

    public function ubah_nama($nip, $nama_baru)
    {
        $this->db->query("UPDATE tbl_user SET nama_lengkap='$nama_baru' WHERE nip=$nip");
    }

    public function ubah_email($nip, $email_baru)
    {
        $this->db->query("UPDATE tbl_user SET email='$email_baru' where nip=$nip");
    }

    public function ubah_nohp($nip, $nohp_baru)
    {
        $this->db->query("UPDATE tbl_user SET no_hp='$nohp_baru' where nip=$nip");
    }

    public function ubah_prodi($nip, $prodi_baru)
    {
        $this->db->query("UPDATE tbl_user SET prodi=$prodi_baru where nip=$nip");
    }

    public function upload_foto($varname, $nip)
    {
        $config['upload_path']          = './assets/img/avatar/';
        $config['allowed_types']        = 'jpg';
        $config['file_name']            = $nip;
        $config['overwrite']            = true;
        $config['max_size']             = 1024000; // 100MB

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload($varname)) {
            $uploadData = $this->upload->data();
        }
    }
    public function ubah_foto($nip, $foto_baru)
    {
        $this->db->query("UPDATE tbl_user SET foto='$foto_baru' where nip=$nip");
    }

    public function ubah_password($nip, $password_baru)
    {
        $pass = md5($password_baru);
        $this->db->query("UPDATE tbl_user SET password='$pass' where nip=$nip");
    }
}