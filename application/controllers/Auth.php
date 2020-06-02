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
    }

    public function index()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Beranda Dosen';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/beranda');
        $this->load->view('templates/auth_footer');
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
        $data['title'] = 'Beranda';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/beranda');
        $this->load->view('templates/auth_footer');
    }

    public function setting()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Setting';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/setting');
        $this->load->view('templates/auth_footer');
    }

    public function tentang()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Tentang';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/tentang');
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
}
