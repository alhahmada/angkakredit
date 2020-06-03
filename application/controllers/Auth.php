<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_auth');
        $this->load->model('m_pengajuan');
    }

    public function index()
    {
        redirect('/auth/beranda');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
            $data['nama'] = $datauser[0]['nama_lengkap'];
            $data['foto'] = $datauser[0]['foto'];
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header_login', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            echo 'data berhasil ditambahkan!';
        }
    }

    public function beranda()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
<<<<<<< HEAD
        $data['title'] = 'Beranda Dosen';
=======
        $data['array'] = $datauser[0];
        $datapengajuan = $this->m_pengajuan->data_pengajuan();
        $data['pengajuan'] = $datapengajuan;
        $data['title'] = 'Beranda';
>>>>>>> 42b9dad32abb32577e2d9c6b827f7e01327a92ca
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/beranda');
        $this->load->view('templates/auth_footer');
    }


    public function setelan_dosen()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Pengaturan';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/setting');
        $this->load->view('templates/auth_footer');
    }

    public function sampel_dinamic()
    {
        $this->load->view('auth/sampel_dinamic');
    }

    public function sampel_2()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Contoh2';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/sampel_2');
    }


    public function informasi()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/informasi');
        $this->load->view('templates/auth_footer');
    }

    public function edit_profil_dosen()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Edit Data';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }
}
