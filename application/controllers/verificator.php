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
        $data['title'] = 'Beranda Verifikator';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/beranda_verificator');
        $this->load->view('templates/auth_footer');
    }

    public function daftar_verifikasiAK()
    {
        $data['title'] = 'Daftar Pengajuan Yang Harus Diverifikasi';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/daftar_verifikasiAK');
        $this->load->view('templates/auth_footer');
    }

    public function verif_pendidikan()
    {
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_pendidikan');
        $this->load->view('templates/auth_footer');
    }

    public function verif_penelitian()
    {
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_penelitian');
        $this->load->view('templates/auth_footer');
    }

    public function verif_pengmas()
    {
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_pengmas');
        $this->load->view('templates/auth_footer');
    }
}
