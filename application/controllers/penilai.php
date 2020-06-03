<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penilai extends CI_Controller
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

    public function beranda_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Beranda Penilai';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/beranda_penilai');
        $this->load->view('templates/auth_footer');
    }

    public function daftar_penilaianAK()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Yang Harus Dinilai';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/daftar_penilaianAK');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_pendidikan()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_pendidikan');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_penelitian()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_penelitian');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_pengmas()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_pengmas');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_penunjang()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_penunjang');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_resume()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_resume');
        $this->load->view('templates/auth_footer');
    }

    public function informasi_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('auth/informasi');
        $this->load->view('templates/auth_footer');
    }

    public function setelan_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('auth/setting');
        $this->load->view('templates/auth_footer');
    }

    public function edit_profil_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Edit Profil';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }
}
