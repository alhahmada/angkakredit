<?php
defined('BASEPATH') or exit('No direct script access allowed');

class verificator extends CI_Controller
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

    public function beranda_verificator()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Beranda Verifikator';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/beranda_verificator');
        $this->load->view('templates/auth_footer');
    }

    public function daftar_verifikasiAK()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Yang Harus Diverifikasi';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/daftar_verifikasiAK');
        $this->load->view('templates/auth_footer');
    }

    public function verif_pendidikan()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_pendidikan');
        $this->load->view('templates/auth_footer');
    }

    public function verif_penelitian()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_penelitian');
        $this->load->view('templates/auth_footer');
    }

    public function verif_pengmas()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_pengmas');
        $this->load->view('templates/auth_footer');
    }

    public function informasi_verif()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('auth/informasi');
        $this->load->view('templates/auth_footer');
    }

    public function setelan_verif()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('auth/setting');
        $this->load->view('templates/auth_footer');
    }
    public function edit_profil_verif()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Edit Profil';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }

    public function history_verif()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'History Verifikasi Pengajuan';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/history_verif');
        $this->load->view('templates/auth_footer');
    }
}
