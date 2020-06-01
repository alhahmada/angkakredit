<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penilai extends CI_Controller
{

    public function beranda_penilai()
    {
        $data['title'] = 'Beranda Penilai';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/beranda_penilai');
        $this->load->view('templates/auth_footer');
    }

    public function daftar_penilaianAK()
    {
        $data['title'] = 'Daftar Pengajuan Yang Harus Dinilai';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/daftar_penilaianAK');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_pendidikan()
    {
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_pendidikan');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_penelitian()
    {
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_penelitian');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_pengmas()
    {
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_pengmas');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_penunjang()
    {
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_penunjang');
        $this->load->view('templates/auth_footer');
    }

    public function nilai_resume()
    {
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_resume');
        $this->load->view('templates/auth_footer');
    }
}
