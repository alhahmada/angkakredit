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
        // if ($this->session->userdata('role') != "1") {
        //     redirect(base_url($this->session->userdata('home')));
        // }
        $this->load->model('m_auth');
        $this->load->model('m_pengajuan');
        $this->load->model('m_verif');
    }

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('form_validation');
    //     if ($this->session->userdata('status') != "login") {
    //         redirect(base_url("login"));
    //     }
    //     $this->load->model('m_auth');
    // }
    public function beranda_admin()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $progress = $this->m_pengajuan->total_per_progress();
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['array'] = $datauser[0];
        $data['progress'] = $progress;
        $data['title'] = 'Beranda Admin';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/beranda_admin');
        $this->load->view('templates/auth_footer');
    }

    public function daftar_pengajuanAK()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));

        $pengajuan = $this->m_pengajuan->pengajuan_all();
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['pengajuan'] = $pengajuan;

        $pengajuan1 = $this->m_verif->pengajuan_all();
        $verifikator = $this->m_verif->verifikator();
        $data['pengajuan1'] = $pengajuan1;
        $data['verifikator'] = $verifikator[0];

        $data['title'] = 'Daftar Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/daftar_pengajuanAK');
        $this->load->view('templates/auth_footer');
    }

    public function cek_berkas()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $berkas = $this->m_pengajuan->data_berkas($id_pengajuan);
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['berkas'] = $berkas[0];
        $data['user'] = $user[0];
        $data['title'] = 'Verifikasi Berkas Pengajuan';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/cek_berkas');
        $this->load->view('templates/auth_footer');
    }

    public function action_verif_berkas()
    {
        $keterangan = $this->input->post('keterangan');
        $aksi = $this->input->post('aksi');
        $id_pengajuan = $this->input->post('id_pengajuan');
        if ($aksi == 'tolak') {
            $progress = 7;
            $ket = "Berkas Tidak Lulus verifikasi oleh admin";
        } elseif ($aksi == 'terima') {
            $progress = 1;
            $ket = "Berkas Lulus verifikasi oleh admin";
        }
        $this->m_pengajuan->update_log($id_pengajuan, $keterangan, 'Berkas Pengajuan');
        $this->m_pengajuan->update_progress($id_pengajuan, $progress, $ket);
        redirect('/admin/daftar_pengajuanAK');
    }

    public function action_verif_penunjang()
    {
        $keterangan = $this->input->post('keterangan');
        $aksi = $this->input->post('aksi');
        $id_pengajuan = $this->input->post('id_pengajuan');
        if ($aksi == 'tolak') {
            $status = 2;
        } elseif ($aksi == 'terima') {
            $status = 1;
        }
        $this->m_pengajuan->update_log($id_pengajuan, $keterangan, 'Berkas Penunjang');
        $this->m_verif->verif_pengajuan($id_pengajuan, $status, $keterangan);
        if ($this->m_verif->cek_verif($id_pengajuan) == 4) {
            $this->m_pengajuan->update_progress($id_pengajuan, 2, 'Verifikasi Diterima');
        } elseif ($this->m_verif->cek_verif($id_pengajuan) == 5) {
            $this->m_pengajuan->update_progress($id_pengajuan, 7, 'Verifikasi ditolak');
        }
        redirect('/admin/daftar_pengajuanAK');
    }

    public function verif_penunjang()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
        $data['array'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['e1'] = $this->m_verif->e1($id_pengajuan);
        $data['e2'] = $this->m_verif->e2($id_pengajuan);
        $data['e3'] = $this->m_verif->e3($id_pengajuan);
        $data['e4'] = $this->m_verif->e4($id_pengajuan);
        $data['e5'] = $this->m_verif->e5($id_pengajuan);
        $data['e6'] = $this->m_verif->e6($id_pengajuan);
        $data['e7'] = $this->m_verif->e7($id_pengajuan);
        $data['e8'] = $this->m_verif->e8($id_pengajuan);
        $data['e9'] = $this->m_verif->e9($id_pengajuan);
        $data['e10'] = $this->m_verif->e10($id_pengajuan);
        $data['title'] = 'Verifikasi Pengajuan Angka Kredit';
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

    public function informasi_admin()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('auth/informasi');
        $this->load->view('templates/auth_footer');
    }

    public function setelan_admin()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Pengaturan';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('auth/setting');
        $this->load->view('templates/auth_footer');
    }
    public function edit_profil_admin()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['array'] = $datauser[0];
        $data['title'] = 'Edit Profil';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }

    public function edit_user()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Edit/Tambahkan User';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/edit_user');
        $this->load->view('templates/auth_footer');
    }

    public function pengajuan_tolak()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Ditolak';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/pengajuan_tolak');
        $this->load->view('templates/auth_footer');
    }

    public function pengajuan_selesai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Selesai';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/pengajuan_selesai');
        $this->load->view('templates/auth_footer');
    }


    public function data_dosen()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Database User';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/data_dosen');
        $this->load->view('templates/auth_footer');
    }
}
