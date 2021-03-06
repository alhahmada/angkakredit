<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verificator extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        // if ($this->session->userdata('role') != "3" or $this->session->userdata('role') != "4") {
        //     redirect(base_url($this->session->userdata('home')));
        // }
        $this->load->model('m_auth');
        $this->load->model('m_verif');
        $this->load->model('m_pengajuan');
    }

    public function Beranda_verificator()
    {
        $cekverifikator = $this->m_verif->cek_verifikator();
        if ($cekverifikator == null) {
            $pengajuan = $this->m_verif->pengajuan_all();
        } else {
            $array_id = array();
            $pengajuan = $this->m_verif->pengajuan_not($cekverifikator);
        }
        $verifikator = $this->m_verif->verifikator();
        $data['pengajuan'] = $pengajuan;
        $data['verifikator'] = $verifikator[0];

        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['array'] = $datauser[0];
        $data['title'] = 'Beranda Verifikator';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/beranda_verificator');
        $this->load->view('templates/auth_footer');
    }

    public function Daftar_verifikasiAK()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));

        $cekverifikator = $this->m_verif->cek_verifikator();
        if ($cekverifikator == null) {
            $pengajuan = $this->m_verif->pengajuan_all();
        } else {
            $array_id = array();
            $pengajuan = $this->m_verif->pengajuan_not($cekverifikator);
        }

        $data['pengajuan'] = $pengajuan;
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Yang Harus Diverifikasi';

        $verifikator = $this->m_verif->verifikator();
        $data['pengajuan'] = $pengajuan;
        $data['verifikator'] = $verifikator[0];

        $pengajuan_teverif = $this->m_verif->id_terverif($this->session->userdata('nip'));
        $data['pengajuanSV'] = $pengajuan_teverif;


        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/daftar_verifikasiAK');
        $this->load->view('templates/auth_footer');
    }

    public function Verif_pendidikan()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;

        $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
        $data['data_pengajuan'] = $data_pengajuan[0];
        $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

        $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();
        $data['constraint'] = $constraint[0];


        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $data['user'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['a1'] = $this->m_verif->a1($id_pengajuan);
        $data['a2'] = $this->m_verif->a2($id_pengajuan);
        $data['b1'] = $this->m_verif->b1($id_pengajuan);
        $data['b2'] = $this->m_verif->b2($id_pengajuan);
        $data['b3'] = $this->m_verif->b3($id_pengajuan);
        $data['b4'] = $this->m_verif->b4($id_pengajuan);
        $data['b5'] = $this->m_verif->b5($id_pengajuan);
        $data['b6'] = $this->m_verif->b6($id_pengajuan);
        $data['b7'] = $this->m_verif->b7($id_pengajuan);
        $data['b8'] = $this->m_verif->b8($id_pengajuan);
        $data['b9'] = $this->m_verif->b9($id_pengajuan);
        $data['b10'] = $this->m_verif->b10($id_pengajuan);
        $data['b11'] = $this->m_verif->b11($id_pengajuan);
        $data['b12'] = $this->m_verif->b12($id_pengajuan);
        $data['b13'] = $this->m_verif->b13($id_pengajuan);

        $data['id_pengajuan'] = $this->uri->segment(3);
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_pendidikan');
        $this->load->view('templates/auth_footer');
    }
    public function Action_verif_pendidikan()
    {
        $keterangan = $this->input->post('keterangan');
        $aksi = $this->input->post('aksi');
        $id_pengajuan = $this->input->post('id_pengajuan');
        if ($aksi == 'tolak') {
            $status = 2;
        } elseif ($aksi == 'terima') {
            $status = 1;
        }
        $this->m_pengajuan->update_log($id_pengajuan, $keterangan, 'Berkas Pendidikan');
        $this->m_verif->verif_pengajuan($id_pengajuan, $status, $keterangan, 'verif_pendidikan');
        if ($this->m_verif->cek_verif($id_pengajuan) == 4) {
            $this->m_pengajuan->update_progress($id_pengajuan, 2, 'Verifikasi Diterima');
        } elseif ($this->m_verif->cek_verif($id_pengajuan) == 5) {
            $this->m_pengajuan->update_progress($id_pengajuan, 7, 'Verifikasi ditolak');
        }
        redirect('/verificator/daftar_verifikasiAK');
    }

    public function Verif_penelitian()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;

        $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
        $data['data_pengajuan'] = $data_pengajuan[0];
        $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

        $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();
        $data['constraint'] = $constraint[0];

        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $data['user'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['c1'] = $this->m_verif->c1($id_pengajuan);
        $data['c2'] = $this->m_verif->c2($id_pengajuan);
        $data['c3'] = $this->m_verif->c3($id_pengajuan);
        $data['c4'] = $this->m_verif->c4($id_pengajuan);
        $data['c5'] = $this->m_verif->c5($id_pengajuan);
        $data['c6'] = $this->m_verif->c6($id_pengajuan);
        $data['c7'] = $this->m_verif->c7($id_pengajuan);
        $data['c8'] = $this->m_verif->c8($id_pengajuan);
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_penelitian');
        $this->load->view('templates/auth_footer');
    }
    public function Action_verif_penelitian()
    {
        $keterangan = $this->input->post('keterangan');
        $aksi = $this->input->post('aksi');
        $id_pengajuan = $this->input->post('id_pengajuan');
        if ($aksi == 'tolak') {
            $status = 2;
        } elseif ($aksi == 'terima') {
            $status = 1;
        }
        $this->m_pengajuan->update_log($id_pengajuan, $keterangan, 'Berkas Penelitian');
        $this->m_verif->verif_pengajuan($id_pengajuan, $status, $keterangan, 'verif_penelitian');
        if ($this->m_verif->cek_verif($id_pengajuan) == 4) {
            $this->m_pengajuan->update_progress($id_pengajuan, 2, 'Verifikasi Diterima');
        } elseif ($this->m_verif->cek_verif($id_pengajuan) == 5) {
            $this->m_pengajuan->update_progress($id_pengajuan, 7, 'Verifikasi ditolak');
        }
        redirect('/verificator/daftar_verifikasiAK');
    }

    public function Verif_pengmas()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;

        $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
        $data['data_pengajuan'] = $data_pengajuan[0];
        $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

        $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();
        $data['constraint'] = $constraint[0];

        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $data['user'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
        $data['d1'] = $this->m_verif->d1($id_pengajuan);
        $data['d2'] = $this->m_verif->d2($id_pengajuan);
        $data['d3'] = $this->m_verif->d3($id_pengajuan);
        $data['d4'] = $this->m_verif->d4($id_pengajuan);
        $data['d5'] = $this->m_verif->d5($id_pengajuan);
        $data['d6'] = $this->m_verif->d6($id_pengajuan);
        $data['d7'] = $this->m_verif->d7($id_pengajuan);
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('verificator/verif_pengmas');
        $this->load->view('templates/auth_footer');
    }
    public function Action_verif_pengmas()
    {
        $keterangan = $this->input->post('keterangan');
        $aksi = $this->input->post('aksi');
        $id_pengajuan = $this->input->post('id_pengajuan');
        if ($aksi == 'tolak') {
            $status = 2;
        } elseif ($aksi == 'terima') {
            $status = 1;
        }
        $this->m_pengajuan->update_log($id_pengajuan, $keterangan, 'Berkas Pengmas');
        $this->m_verif->verif_pengajuan($id_pengajuan, $status, $keterangan, 'verif_pengmas');
        if ($this->m_verif->cek_verif($id_pengajuan) == 4) {
            $this->m_pengajuan->update_progress($id_pengajuan, 2, 'Verifikasi Diterima');
        } elseif ($this->m_verif->cek_verif($id_pengajuan) >= 5) {
            $this->m_pengajuan->update_progress($id_pengajuan, 7, 'Verifikasi ditolak');
        }
        redirect('/verificator/daftar_verifikasiAK');
    }


    public function Informasi_verif()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('auth/informasi');
        $this->load->view('templates/auth_footer');
    }

    public function Setelan_verif()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Pengaturan';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('auth/setting');
        $this->load->view('templates/auth_footer');
    }
    public function Edit_profil()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['array'] = $datauser[0];
        $data['title'] = 'Edit Profil';
        $this->load->view('templates/auth_header_verif', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }

    public function History_verif()
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
