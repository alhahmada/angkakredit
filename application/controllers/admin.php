<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_auth');
    }

    public function beranda_admin()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Beranda';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/beranda_admin');
        $this->load->view('templates/auth_footer');
    }

    public function daftar_pengajuanAK()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/daftar_pengajuanAK');
        $this->load->view('templates/auth_footer');
    }

    public function cek_berkas()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Pengecekan Berkas Pengajuan';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/cek_berkas');
        $this->load->view('templates/auth_footer');
    }

    public function verif_penunjang()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Pengecekan Unsur Pengajuan';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/verif_penunjang');
        $this->load->view('templates/auth_footer');
    }

    public function penetapan_ak_pendidikan()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penetapan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/penetapan_ak_pendidikan');
        $this->load->view('templates/auth_footer');
    }

    public function penetapan_ak_penelitian()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penetapan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/penetapan_ak_penelitian');
        $this->load->view('templates/auth_footer');
    }

    public function penetapan_ak_pengmas()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penetapan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/penetapan_ak_pengmas');
        $this->load->view('templates/auth_footer');
    }

    public function penetapan_ak_penunjang()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penetapan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/penetapan_ak_penunjang');
        $this->load->view('templates/auth_footer');
    }

    public function penetapan_ak_resume()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penetapan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/penetapan_ak_resume');
        $this->load->view('templates/auth_footer');
    }
}
