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
        // if ($this->session->userdata('role') != "5") {
        //     redirect(base_url($this->session->userdata('home')));
        // }

        $this->load->model('m_auth');
        $this->load->model('m_pengajuan');
        $this->load->model('m_verif');
        $this->load->model('m_resume');
    }

    public function beranda_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['array'] = $datauser[0];
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
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $data['array'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];

        $data['a1'] = $this->m_verif->a1($id_pengajuan);
        $data['maks_a1'] = $this->m_verif->constraint('a1', $id_pengajuan);
        $data['a2'] = $this->m_verif->a2($id_pengajuan);
        $data['maks_a2'] = $this->m_verif->constraint('a2', $id_pengajuan);
        $data['b1'] = $this->m_verif->b1($id_pengajuan);
        $data['maks_b1'] = $this->m_verif->constraint('b1', $id_pengajuan);
        $data['b2'] = $this->m_verif->b2($id_pengajuan);
        $data['maks_b2'] = $this->m_verif->constraint('b2', $id_pengajuan);
        $data['b3'] = $this->m_verif->b3($id_pengajuan);
        $data['maks_b3'] = $this->m_verif->constraint('b3', $id_pengajuan);
        $data['b4'] = $this->m_verif->b4($id_pengajuan);
        $data['maks_b4'] = $this->m_verif->constraint('b4', $id_pengajuan);
        $data['b5'] = $this->m_verif->b5($id_pengajuan);
        $data['maks_b5'] = $this->m_verif->constraint('b5', $id_pengajuan);
        $data['b6'] = $this->m_verif->b6($id_pengajuan);
        $data['maks_b6'] = $this->m_verif->constraint('b6', $id_pengajuan);
        $data['b7'] = $this->m_verif->b7($id_pengajuan);
        $data['maks_b7'] = $this->m_verif->constraint('b7', $id_pengajuan);
        $data['b8'] = $this->m_verif->b8($id_pengajuan);
        $data['maks_b8'] = $this->m_verif->constraint('b8', $id_pengajuan);
        $data['b9'] = $this->m_verif->b9($id_pengajuan);
        $data['maks_b9'] = $this->m_verif->constraint('b9', $id_pengajuan);
        $data['b10'] = $this->m_verif->b10($id_pengajuan);
        $data['maks_b10'] = $this->m_verif->constraint('b10', $id_pengajuan);
        $data['b11'] = $this->m_verif->b11($id_pengajuan);
        $data['maks_b11'] = $this->m_verif->constraint('b11', $id_pengajuan);
        $data['b12'] = $this->m_verif->b12($id_pengajuan);
        $data['maks_b12'] = $this->m_verif->constraint('b12', $id_pengajuan);
        $data['b13'] = $this->m_verif->b13($id_pengajuan);
        $data['maks_b13'] = $this->m_verif->constraint('b13', $id_pengajuan);
        $data['title'] = 'Penilaian Angka Kredit';

        $data['id_pengajuan'] = $this->uri->segment(3);
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_pendidikan');
        $this->load->view('templates/auth_footer');
    }

    public function action_nilai_pendidikan()
    {
        ini_set('max_execution_time', 0);
        $nip = $this->m_auth->data_user($this->session->userdata('nip'));

        $nilai_a1 = $this->input->post('nilai_a1');
        $id_pengajuan = $this->input->post('id_pengajuan');
        $this->m_resume->n_a1($id_pengajuan, $nilai_a1, $this->session->userdata('nip'));

        redirect('/penilai/nilai_penelitian/' . $id_pengajuan);
    }

    public function nilai_penelitian()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $data['array'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['c1'] = $this->m_verif->c1($id_pengajuan);
        $data['maks_c1'] = $this->m_verif->constraint('c1', $id_pengajuan);
        $data['c2'] = $this->m_verif->c2($id_pengajuan);
        $data['maks_c2'] = $this->m_verif->constraint('c2', $id_pengajuan);
        $data['c3'] = $this->m_verif->c3($id_pengajuan);
        $data['maks_c3'] = $this->m_verif->constraint('c3', $id_pengajuan);
        $data['c4'] = $this->m_verif->c4($id_pengajuan);
        $data['maks_c4'] = $this->m_verif->constraint('c4', $id_pengajuan);
        $data['c5'] = $this->m_verif->c5($id_pengajuan);
        $data['maks_c5'] = $this->m_verif->constraint('c5', $id_pengajuan);
        $data['c6'] = $this->m_verif->c6($id_pengajuan);
        $data['maks_c6'] = $this->m_verif->constraint('c6', $id_pengajuan);
        $data['c7'] = $this->m_verif->c7($id_pengajuan);
        $data['maks_c7'] = $this->m_verif->constraint('c7', $id_pengajuan);
        $data['c8'] = $this->m_verif->c8($id_pengajuan);
        $data['maks_c8'] = $this->m_verif->constraint('c8', $id_pengajuan);

        $data['id_pengajuan'] = $this->uri->segment(3);
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_penelitian');
        $this->load->view('templates/auth_footer');
    }

    public function action_nilai_penelitian()
    {
    }

    public function nilai_pengmas()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $data['array'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['d1'] = $this->m_verif->d1($id_pengajuan);
        $data['maks_d1'] = $this->m_verif->constraint('d1', $id_pengajuan);
        $data['d2'] = $this->m_verif->d2($id_pengajuan);
        $data['maks_d2'] = $this->m_verif->constraint('d2', $id_pengajuan);
        $data['d3'] = $this->m_verif->d3($id_pengajuan);
        $data['maks_d3'] = $this->m_verif->constraint('d3', $id_pengajuan);
        $data['d4'] = $this->m_verif->d4($id_pengajuan);
        $data['maks_d4'] = $this->m_verif->constraint('d4', $id_pengajuan);
        $data['d5'] = $this->m_verif->d5($id_pengajuan);
        $data['maks_d5'] = $this->m_verif->constraint('d5', $id_pengajuan);
        $data['d6'] = $this->m_verif->d6($id_pengajuan);
        $data['maks_d6'] = $this->m_verif->constraint('d6', $id_pengajuan);
        $data['d7'] = $this->m_verif->d7($id_pengajuan);
        $data['maks_d7'] = $this->m_verif->constraint('d7', $id_pengajuan);

        $data['id_pengajuan'] = $this->uri->segment(3);
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_pengmas');
        $this->load->view('templates/auth_footer');
    }

    public function action_nilai_pengmas()
    {
    }

    public function nilai_penunjang()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $data['array'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['e1'] = $this->m_verif->e1($id_pengajuan);
        $data['maks_e1'] = $this->m_verif->constraint('e1', $id_pengajuan);
        $data['e2'] = $this->m_verif->e2($id_pengajuan);
        $data['maks_e2'] = $this->m_verif->constraint('e2', $id_pengajuan);
        $data['e3'] = $this->m_verif->e3($id_pengajuan);
        $data['maks_e3'] = $this->m_verif->constraint('e3', $id_pengajuan);
        $data['e4'] = $this->m_verif->e4($id_pengajuan);
        $data['maks_e4'] = $this->m_verif->constraint('e4', $id_pengajuan);
        $data['e5'] = $this->m_verif->e5($id_pengajuan);
        $data['maks_e5'] = $this->m_verif->constraint('e5', $id_pengajuan);
        $data['e6'] = $this->m_verif->e6($id_pengajuan);
        $data['maks_e6'] = $this->m_verif->constraint('e6', $id_pengajuan);
        $data['e7'] = $this->m_verif->e7($id_pengajuan);
        $data['maks_e7'] = $this->m_verif->constraint('e7', $id_pengajuan);
        $data['e8'] = $this->m_verif->e8($id_pengajuan);
        $data['maks_e8'] = $this->m_verif->constraint('e8', $id_pengajuan);
        $data['e9'] = $this->m_verif->e9($id_pengajuan);
        $data['maks_e9'] = $this->m_verif->constraint('e9', $id_pengajuan);
        $data['e10'] = $this->m_verif->e10($id_pengajuan);
        $data['maks_e10'] = $this->m_verif->constraint('e10', $id_pengajuan);

        $data['id_pengajuan'] = $this->uri->segment(3);
        $data['title'] = 'Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_penunjang');
        $this->load->view('templates/auth_footer');
    }

    public function action_nilai_penunjang()
    {
    }

    public function nilai_resume()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);

        $data['array'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];

        $data['id_pengajuan'] = $this->uri->segment(3);
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
        $data['title'] = 'Pengaturan';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('auth/setting');
        $this->load->view('templates/auth_footer');
    }

    public function edit_profil_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['array'] = $datauser[0];
        $data['title'] = 'Edit Profil';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }

    public function history_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'History Penilaian Angka Kredit';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/history_penilaian');
        $this->load->view('templates/auth_footer');
    }
}
