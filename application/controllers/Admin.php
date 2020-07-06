<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        if ($this->session->userdata('role') != "1") {
            redirect(base_url($this->session->userdata('home')));
        }
        $this->load->model('m_auth');
        $this->load->model('m_pengajuan');
        $this->load->model('m_verif');
        $this->load->model('m_penilai');
        $this->load->model('m_penetapan');
        $this->load->model('m_resume');
        $this->load->model('m_ubah');
    }

    public function Beranda_admin()
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

    public function Daftar_pengajuanAK()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));

        $pengajuan = $this->m_pengajuan->pengajuan_all();
        $data['nip_admin'] =  $this->session->userdata('nip');
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['pengajuan'] = $pengajuan;
        $cekverifikator = $this->m_verif->cek_verifikator();

        if ($cekverifikator == null) {
            $pengajuan1 = $this->m_verif->pengajuan_all();
        } else {
            $pengajuan1 = $this->m_verif->pengajuan_not($cekverifikator[0]);
        }

        $verifikator = $this->m_verif->verifikator();
        $data['pengajuan1'] = $pengajuan1;
        $data['verifikator'] = $verifikator[0];


        $status_verifikasi = array();
        for ($i = 0; $i < count($pengajuan1); $i++) {
            $status_verifikasi[$i] = $this->m_verif->status_verif($pengajuan1[$i]['id_pengajuan']);
        }
        $data['status_verifikasi'] = $status_verifikasi;


        $pengajuan2 = $this->m_verif->pengajuan_2();
        $data['pengajuan2'] = $pengajuan2;

        $pengajuan11 = $this->m_verif->pengajuan_11();
        $data['pengajuan11'] = $pengajuan11;

        $verif_pendidikan = $this->m_verif->list_verif('verif_pendidikan');
        $data['verif_pendidikan'] = $verif_pendidikan;
        $verif_penelitian = $this->m_verif->list_verif('verif_penelitian');
        $data['verif_penelitian'] = $verif_penelitian;
        $verif_pengmas = $this->m_verif->list_verif('verif_pengmas');
        $data['verif_pengmas'] = $verif_pengmas;
        $verif_penunjang = $this->m_verif->list_verif('verif_penunjang');
        $data['verif_penunjang'] = $verif_penunjang;


        $list_penilai = $this->m_penilai->list_penilai();
        $data['list_penilai'] = $list_penilai;

        $pengajuan3 = $this->m_verif->pengajuan_3();
        $data['pengajuan3'] = $pengajuan3;

        $status_penilaian = array();
        for ($i = 0; $i < count($pengajuan3); $i++) {
            $status_penilaian[$i] = $this->m_verif->status_penilaian($pengajuan3[$i]['id_pengajuan']);
        }
        $data['status_penilaian'] = $status_penilaian;


        $pengajuan4 = $this->m_verif->pengajuan_4();
        $data['pengajuan4'] = $pengajuan4;

        $pengajuan5 = $this->m_verif->pengajuan_5();
        $data['pengajuan5'] = $pengajuan5;

        $pengajuan6 = $this->m_verif->pengajuan_6();
        $data['pengajuan6'] = $pengajuan6;

        $data['title'] = 'Daftar Pengajuan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/daftar_pengajuanAK');
        $this->load->view('templates/auth_footer');
    }

    public function Action_pilih_verifikator()
    {
        // Insert ke Tabel Penilaian
        // id_penilaian
        $id_pengajuan = $this->input->post('id_pengajuan');
        // nip_penilai
        for ($i = 1; $i <= 4; $i++) {
            $nip = $this->input->post('verif' . $i);
            if ($i == 1) {
                $unsur = 'verif_pendidikan';
            } elseif ($i == 2) {
                $unsur = 'verif_penelitian';
            } elseif ($i == 3) {
                $unsur = 'verif_pengmas';
            } elseif ($i == 4) {
                $unsur = 'verif_penunjang';
            }
            $this->m_verif->pilih_verifikator($nip, $id_pengajuan, $unsur);
        }
        $this->m_pengajuan->update_progress($id_pengajuan, 1, 'Pengajuan Dalam Tahap Verifikasi Unsur');
        redirect('/admin/daftar_pengajuanAK');

        // id_pengajuan
        // keterangan (Penilai Ke Berapa)


    }


    public function Action_pilih_penilai()
    {
        // Insert ke Tabel Penilaian
        // id_penilaian
        $id_pengajuan = $this->input->post('id_pengajuan');
        // nip_penilai
        for ($i = 1; $i <= 3; $i++) {
            $nip = $this->input->post('penilai' . $i);
            $keterangan = $i;
            $this->m_penilai->pilih_penilai($nip, $id_pengajuan, $keterangan);
        }
        $this->m_pengajuan->update_progress($id_pengajuan, 3, 'Proses Penilaian oleh tim penilai');
        redirect('/admin/daftar_pengajuanAK');

        // id_pengajuan
        // keterangan (Penilai Ke Berapa)


    }


    // ACTION TERAKHIR TETAPKAN AK
    public function Action_progress()
    {
        $id_pengajuan = $this->input->post('id_pengajuan');
        $this->m_pengajuan->update_progress($id_pengajuan, 6, 'Proses Pengajuan Selesai');

        $nip_array = $this->db->query("SELECT nip from tbl_pengajuan where id_pengajuan=" . $id_pengajuan . "")->result_array();
        $nip = $nip_array[0]['nip'];
        // print_r($nip);
        $ak_lama_array = $this->db->query("SELECT angka_kredit FROM tbl_user WHERE nip=" . $nip . "")->result_array();
        $total_penetapan = $this->db->query("SELECT ak_diterima FROM tbl_pengajuan WHERE id_pengajuan = $id_pengajuan")->result_array();
        // print_r($ak_lama_array[0]['angka_kredit']);
        $ak_lama = $ak_lama_array[0]['angka_kredit'];
        $ak_tambah = $total_penetapan[0]['ak_diterima'];
        $ak_baru = $ak_lama + $ak_tambah;

        $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
        $data['data_pengajuan'] = $data_pengajuan[0];
        $pangkat_to = $data_pengajuan[0]['pangkat_to'];
        $gol_to = $data_pengajuan[0]['gol_to'];
        $jab_fung_to = $data_pengajuan[0]['jabatan_fungsi_to'];

        $ak_ditetapkan = $data_pengajuan[0]['ak_diterima'];
        $this->db->query("UPDATE tbl_pengajuan SET ak_diterima_final = $ak_ditetapkan WHERE id_pengajuan = $id_pengajuan");
        $this->m_penetapan->update_ak_dosen($nip, $ak_baru, $gol_to, $pangkat_to, $jab_fung_to);


        redirect('/admin/daftar_pengajuanAK');
    }

    public function Cek_berkas()
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

    public function Action_verif_berkas()
    {
        $keterangan = $this->input->post('keterangan');
        $nip = $this->session->userdata('nip');
        $aksi = $this->input->post('aksi');
        $id_pengajuan = $this->input->post('id_pengajuan');
        if ($aksi == 'tolak') {
            $status = 2;
            $progress = 7;
            $ket = "Berkas Tidak Lulus verifikasi oleh admin";
        } elseif ($aksi == 'terima') {
            $status = 1;
            $progress = 11;
            $ket = "Berkas Lulus verifikasi oleh admin";
        }
        $this->m_pengajuan->update_verif_berkas($id_pengajuan, $status, $nip, $keterangan);
        $this->m_pengajuan->update_log($id_pengajuan, $keterangan, 'Berkas Pengajuan');
        $this->m_pengajuan->update_progress($id_pengajuan, $progress, $ket);
        redirect('/admin/daftar_pengajuanAK');
    }

    public function Verif_penunjang()
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
    public function Action_verif_penunjang()
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
        $this->m_verif->verif_pengajuan($id_pengajuan, $status, $keterangan, 'verif_penunjang');
        if ($this->m_verif->cek_verif($id_pengajuan) == 4) {
            $this->m_pengajuan->update_progress($id_pengajuan, 2, 'Verifikasi Diterima');
        } elseif ($this->m_verif->cek_verif($id_pengajuan) == 5) {
            $this->m_pengajuan->update_progress($id_pengajuan, 6, 'Verifikasi ditolak');
        }
        redirect('/admin/daftar_pengajuanAK');
    }

    public function Penetapan_ak()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);

        $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
        $data['data_pengajuan'] = $data_pengajuan[0];
        $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

        $data_ak = $this->m_auth->data_ak($user[0]['nip']);
        $data['data_ak'] = $data_ak[0];

        $kode = $this->m_pengajuan->kode_batasan($id_pengajuan, $user[0]['nip']);
        $data['kode_batasan'] = $kode;

        $berkas = $this->m_pengajuan->data_berkas($id_pengajuan);
        $data['berkas'] = $berkas[0];

        $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();
        $data['constraint'] = $constraint[0];

        $penilai = $this->m_penilai->penilai_pengajuan($id_pengajuan);
        $data['penilai'] = $penilai;


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
        $data['c1'] = $this->m_verif->c1($id_pengajuan);
        $data['c2'] = $this->m_verif->c2($id_pengajuan);
        $data['c3'] = $this->m_verif->c3($id_pengajuan);
        $data['c4'] = $this->m_verif->c4($id_pengajuan);
        $data['c5'] = $this->m_verif->c5($id_pengajuan);
        $data['c6'] = $this->m_verif->c6($id_pengajuan);
        $data['c7'] = $this->m_verif->c7($id_pengajuan);
        $data['c8'] = $this->m_verif->c8($id_pengajuan);
        $data['d1'] = $this->m_verif->d1($id_pengajuan);
        $data['d2'] = $this->m_verif->d2($id_pengajuan);
        $data['d3'] = $this->m_verif->d3($id_pengajuan);
        $data['d4'] = $this->m_verif->d4($id_pengajuan);
        $data['d5'] = $this->m_verif->d5($id_pengajuan);
        $data['d6'] = $this->m_verif->d6($id_pengajuan);
        $data['d7'] = $this->m_verif->d7($id_pengajuan);
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


        $data['id_pengajuan'] = $this->uri->segment(3);
        $data['title'] = 'Penetapan Angka Kredit';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/penetapan_ak');
        $this->load->view('templates/auth_footer');
    }

    public function Action_penetapan_ak()
    {
        ini_set('max_execution_time', 0);
        $id_pengajuan = $this->input->post('id_pengajuan');

        $arraytbl = array('a1', 'a2', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'b13');
        $total1 = 0;
        foreach ($arraytbl as $key => $tbl) {
            $nilai = $this->input->post('nilai_' . $tbl . '_final');
            $total = 0;
            if ($nilai != NULL) {
                for ($i = 0; $i < count($nilai); $i++) {
                    $id_bab = $this->input->post('id_bab_' . $tbl);
                    $this->m_penetapan->update_nilai_final('tbl_' . $tbl, $id_bab[$i], $nilai[$i]);
                    $total += $nilai[$i];
                }
            }
            $total1 += $total;
        }
        $this->m_penetapan->update_total_nilai_final($id_pengajuan, $total1, 'pendidikan');
        $total_pendidikan = $total1;
        unset($total1, $total);

        $total1 = 0;
        for ($a = 1; $a < 9; $a++) {
            $nilai = $this->input->post('nilai_c' . $a . '_final');
            $total = 0;
            if ($nilai != NULL) {
                for ($i = 0; $i < count($nilai); $i++) {
                    $id_bab = $this->input->post('id_bab_c' . $a);
                    $this->m_penetapan->update_nilai_final('tbl_c' . $a, $id_bab[$i], $nilai[$i]);
                    $total += $nilai[$i];
                }
            }
            $total1 += $total;
        }
        $this->m_penetapan->update_total_nilai_final($id_pengajuan, $total1, 'penelitian');
        $total_penelitian = $total1;
        unset($total1, $total);

        $total1 = 0;
        for ($a = 1; $a < 8; $a++) {
            $nilai = $this->input->post('nilai_d' . $a . '_final');
            $total = 0;
            if ($nilai != NULL) {
                for ($i = 0; $i < count($nilai); $i++) {
                    $id_bab = $this->input->post('id_bab_d' . $a);
                    $this->m_penetapan->update_nilai_final('tbl_d' . $a, $id_bab[$i], $nilai[$i]);
                    $total += $nilai[$i];
                }
            }
            $total1 += $total;
        }
        $this->m_penetapan->update_total_nilai_final($id_pengajuan, $total1, 'pengmas');
        $total_pengmas = $total1;
        unset($total1, $total);

        $total1 = 0;
        for ($a = 1; $a < 11; $a++) {
            $nilai = $this->input->post('nilai_e' . $a . '_final');
            $total = 0;
            if ($nilai != NULL) {
                for ($i = 0; $i < count($nilai); $i++) {
                    $id_bab = $this->input->post('id_bab_e' . $a);
                    $this->m_penetapan->update_nilai_final('tbl_e' . $a, $id_bab[$i], $nilai[$i]);
                    $total += $nilai[$i];
                }
            }
            $total1 += $total;
        }
        $this->m_penetapan->update_total_nilai_final($id_pengajuan, $total1, 'penunjang');
        $total_penunjang = $total1;
        unset($total1, $total);

        $id_pengajuan = $this->input->post('id_pengajuan');
        $this->m_pengajuan->update_progress($id_pengajuan, 5, 'Angka Kredit Telah Ditetapkan, Menunggu Pembuatan Berkas ');

        $keterangan = $this->input->post('komentar');
        $this->m_pengajuan->update_log($id_pengajuan, $keterangan, 'Penetapan Angka Kredit');

        $total_penetapan = number_format($total_pendidikan + $total_penelitian + $total_pengmas + $total_penunjang, 2);
        $this->m_penetapan->update_ak_penetapan($id_pengajuan, $total_penetapan);

        redirect(base_url('admin/daftar_pengajuanAK'));
    }



    public function Informasi_admin()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('auth/informasi');
        $this->load->view('templates/auth_footer');
    }

    public function Setelan_admin()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Pengaturan';
        $this->load->view('templates/auth_header_admin', $data);
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
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }

    public function Edit_user()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Edit/Tambahkan User';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/edit_user');
        $this->load->view('templates/auth_footer');
    }

    public function Action_tambah_user()
    {
        $nip = $this->input->post('nip_baru');
        $nama_lengkap = $this->input->post('nama_baru');
        $email = $this->input->post('email_baru');
        $angka_kredit = $this->input->post('ak_baru');
        $jabatan_fungsi = $this->input->post('jab_fungsi_baru');
        $pangkat = $this->input->post('pangkat_baru');
        $golongan_ruang = $this->input->post('gol_baru');
        $program_studi = $this->input->post('prodi_baru');
        $password_awal = $this->input->post('pass_baru');
        $role = $this->input->post('role_baru');

        $this->m_ubah->tambah_user($nip, $nama_lengkap, $email, $angka_kredit, $jabatan_fungsi, $pangkat, $golongan_ruang, $program_studi, $password_awal, $role);

        redirect('/admin/edit_user');
    }

    public function Pengajuan_tolak()
    {
        $pengajuan_tolak = $this->m_pengajuan->pengajuan_tolak();
        $data['pengajuan_tolak'] = $pengajuan_tolak;

        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Ditolak';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/pengajuan_tolak');
        $this->load->view('templates/auth_footer');
    }

    public function Pengajuan_selesai()
    {
        $pengajuan_selesai = $this->m_pengajuan->pengajuan_selesai();
        $data['pengajuan_selesai'] = $pengajuan_selesai;

        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Selesai';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/pengajuan_selesai');
        $this->load->view('templates/auth_footer');
    }

    public function Pengajuan_progress()
    {
        $pengajuan_progress = $this->m_pengajuan->pengajuan_progress();
        $data['pengajuan_progress'] = $pengajuan_progress;

        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Daftar Pengajuan Dalam Progress';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/pengajuan_progress');
        $this->load->view('templates/auth_footer');
    }

    public function Data_dosen()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Database User';

        $dosen = $this->db->query("SELECT * from tbl_user WHERE tbl_user.role != '1' AND tbl_user.role != '5'")->result_array();
        $data['dosen'] = $dosen;


        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/data_dosen');
        $this->load->view('templates/auth_footer');
    }

    public function History_dosen()
    {

        $nip = $this->uri->segment(3);

        $nip_admin = $this->session->userdata('nip');
        $datauser = $this->m_auth->data_user($nip_admin);

        $data_history = $this->db->query("SELECT * FROM tbl_pengajuan WHERE nip = $nip")->result_array();

        $data['history'] = $data_history;
        $nama_pengaju = $this->db->query("SELECT nip, nama_lengkap FROM tbl_user WHERE nip=$nip")->result_array();
        $data['nama_pengaju'] = $nama_pengaju;


        $data['array'] = $datauser[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'History Pengajuan Dosen';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('admin/history_dosen');
        $this->load->view('templates/auth_footer');
    }

    public function Log_pengajuan()
    {
        $id_pengajuan = $this->uri->segment(3);
        $nip = $this->session->userdata('nip');
        $datauser = $this->m_auth->data_user($nip);
        $data['array'] = $datauser[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['id_pengajuan'] = $id_pengajuan;

        $tgl_pengajuan = $this->db->query("SELECT tgl_pengajuan FROM tbl_pengajuan WHERE id_pengajuan = $id_pengajuan")->result_array();
        $data['tgl_pengajuan'] = $tgl_pengajuan[0];

        //Log Verifikasi Berkas 
        $status_berkas = '-';
        $verif_berkas = $this->m_verif->cek_verif_berkas($id_pengajuan);
        if ($verif_berkas != NULL) {
            $data['verif_berkas'] = $verif_berkas[0];
            if ($verif_berkas[0]['status'] == '1') {
                $status_berkas = 'Terverifikasi';
            } else {
                $status_berkas = 'Pengajuan Ditolak';
            }
            $data['status_berkas'] = $status_berkas;
        } else {
            $data['verif_berkas'] = NULL;
            $data['status_berkas'] = 'Belum Diproses';
        }

        //Log Verif Pendidikan
        $status_pendidikan = '-';
        $verif_pendidikan = $this->m_verif->cek_verif_pendidikan($id_pengajuan);
        if ($verif_pendidikan != NULL) {
            $data['verif_pendidikan'] = $verif_pendidikan[0];
            if ($verif_pendidikan[0]['status'] == '1') {
                $status_pendidikan = 'Terverifikasi';
            } else {
                $status_pendidikan = 'Pengajuan Ditolak';
            }
            $data['status_pendidikan'] = $status_pendidikan;
        } else {
            $data['verif_pendidikan'] = NULL;
            $data['status_pendidikan'] = 'Belum Diproses';
        }

        //Log Verif Penelitian
        $status_penelitian = '-';
        $verif_penelitian = $this->m_verif->cek_verif_penelitian($id_pengajuan);
        if ($verif_penelitian != NULL) {
            $data['verif_penelitian'] = $verif_penelitian[0];
            if ($verif_penelitian[0]['status'] == '1') {
                $status_penelitian = 'Terverifikasi';
            } else {
                $status_penelitian = 'Pengajuan Ditolak';
            }
            $data['status_penelitian'] = $status_penelitian;
        } else {
            $data['verif_penelitian'] = NULL;
            $data['status_penelitian'] = 'Belum Diproses';
        }

        //Log Verif Pengabdian Masyarakat
        $status_pengmas = '-';
        $verif_pengmas = $this->m_verif->cek_verif_pengmas($id_pengajuan);
        if ($verif_pengmas != NULL) {
            $data['verif_pengmas'] = $verif_pengmas[0];
            if ($verif_pengmas[0]['status'] == '1') {
                $status_pengmas = 'Terverifikasi';
            } else {
                $status_pengmas = 'Pengajuan Ditolak';
            }
            $data['status_pengmas'] = $status_pengmas;
        } else {
            $data['verif_pengmas'] = NULL;
            $data['status_pengmas'] = 'Belum Diproses';
        }

        //Log Verif Penunjang
        $status_penunjang = '-';
        $verif_penunjang = $this->m_verif->cek_verif_penunjang($id_pengajuan);
        if ($verif_penunjang != NULL) {
            $data['verif_penunjang'] = $verif_penunjang[0];
            if ($verif_penunjang[0]['status'] == '1') {
                $status_penunjang = 'Terverifikasi';
            } else {
                $status_penunjang = 'Pengajuan Ditolak';
            }
            $data['status_penunjang'] = $status_penunjang;
        } else {
            $data['verif_penunjang'] = NULL;
            $data['status_penunjang'] = 'Belum Diproses';
        }

        //Log Penilaian 1
        $status_penilaian_1 = '-';
        $penilaian_1 = $this->m_verif->cek_penilaian_1($id_pengajuan);
        if ($penilaian_1 != NULL) {
            $data['penilaian_1'] = $penilaian_1;
            if ($penilaian_1[0]['ak_pendidikan'] != NULL) {
                $status_penilaian_1 = 'Sudah Dinilai';
            } else {
                $status_penilaian_1 = 'Belum Dinilai';
            }
            $data['status_penilaian_1'] = $status_penilaian_1;
        } else {
            $data['penilaian_1'] = NULL;
            $data['status_penilaian_1'] = 'Belum Diproses';
        }

        //Log Penilaian 2
        $status_penilaian_2 = '-';
        $penilaian_2 = $this->m_verif->cek_penilaian_2($id_pengajuan);
        if ($penilaian_2 != NULL) {
            $data['penilaian_2'] = $penilaian_2;
            if ($penilaian_2[0]['ak_pendidikan'] != NULL) {
                $status_penilaian_2 = 'Sudah Dinilai';
            } else {
                $status_penilaian_2 = 'Belum Dinilai';
            }
            $data['status_penilaian_2'] = $status_penilaian_2;
        } else {
            $data['penilaian_2'] = NULL;
            $data['status_penilaian_2'] = 'Belum Diproses';
        }

        //Log Penilaian 3
        $status_penilaian_3 = '-';
        $penilaian_3 = $this->m_verif->cek_penilaian_3($id_pengajuan);
        if ($penilaian_3 != NULL) {
            $data['penilaian_3'] = $penilaian_3;
            if ($penilaian_3[0]['ak_pendidikan'] != NULL) {
                $status_penilaian_3 = 'Sudah Dinilai';
            } else {
                $status_penilaian_3 = 'Belum Dinilai';
            }
            $data['status_penilaian_3'] = $status_penilaian_3;
        } else {
            $data['penilaian_3'] = NULL;
            $data['status_penilaian_3'] = 'Belum Diproses';
        }

        //Log Penetapan Angka Kredit
        $status_penetapanAK = '-';
        $penetapanAK = $this->m_verif->cek_penetapan($id_pengajuan);
        if ($penetapanAK != NULL) {
            $data['penetapanAK'] = $penetapanAK;
            if ($penetapanAK[0]['ak_diterima_final'] != NULL) {
                $status_penetapanAK = 'Angka Kredit Telah Ditetapkan';
            } else {
                $status_penetapanAK = 'Belum Ditetapkan';
            }
            $data['status_penetapanAK'] = $status_penetapanAK;
        } else {
            $data['penetapanAK'] = NULL;
            $data['status_penetapanAK'] = 'Belum Diproses';
        }

        $data_pengajuan_id = $this->m_pengajuan->data_pengajuan_id($id_pengajuan);
        $data['data_pengajuan_id'] = $data_pengajuan_id[0];
        $nama_pengaju = $this->db->query("SELECT a.nama_lengkap FROM tbl_user a JOIN tbl_pengajuan b WHERE b.id_pengajuan=$id_pengajuan AND a.nip=b.nip")->result_array();
        $data['nama_pengaju'] = $nama_pengaju;


        $total_pendidikan = 0;
        for ($i = 1; $i < 3; $i++) {
            $tambah = $this->m_verif->total_unsur($id_pengajuan, 'tbl_a' . $i);
            $total_pendidikan = $total_pendidikan + $tambah[0]['ak_maks'];
        }
        for ($i = 1; $i < 14; $i++) {
            $tambah = $this->m_verif->total_unsur($id_pengajuan, 'tbl_b' . $i);
            $total_pendidikan = $total_pendidikan + $tambah[0]['ak_maks'];
        }
        $data['total_pendidikan'] = number_format($total_pendidikan, 2);

        $total_penelitian = 0;
        for ($i = 1; $i < 9; $i++) {
            $tambah_c = $this->m_verif->total_unsur($id_pengajuan, 'tbl_c' . $i);
            $total_penelitian = $total_penelitian + $tambah_c[0]['ak_maks'];
        }
        $data['total_penelitian'] = number_format($total_penelitian, 2);

        $total_pengmas = 0;
        for ($i = 1; $i < 8; $i++) {
            $tambah_d = $this->m_verif->total_unsur($id_pengajuan, 'tbl_d' . $i);
            $total_pengmas = $total_pengmas + $tambah_d[0]['ak_maks'];
        }
        $data['total_pengmas'] = number_format($total_pengmas, 2);

        $total_penunjang = 0;
        for ($i = 1; $i < 11; $i++) {
            $tambah_e = $this->m_verif->total_unsur($id_pengajuan, 'tbl_e' . $i);
            $total_penunjang = $total_penunjang + $tambah_e[0]['ak_maks'];
        }
        $data['total_penunjang'] = number_format($total_penunjang, 2);

        $total_AK_maks = number_format($total_pendidikan + $total_penelitian + $total_pengmas + $total_penunjang, 2);
        $data['total_AK'] = $total_AK_maks;


        if ($total_AK_maks != 0) {
            $data['persentase_pendidikan'] = number_format($data['total_pendidikan'] * 100 / $data['total_AK'], 2);
            $data['persentase_penelitian'] = number_format($data['total_penelitian'] * 100 / $data['total_AK'], 2);
            $data['persentase_pengmas'] = number_format($data['total_pengmas'] * 100 / $data['total_AK'], 2);
            $data['persentase_penunjang'] = number_format($data['total_penunjang'] * 100 / $data['total_AK'], 2);
        } else {
            $data['persentase_pendidikan'] = '0';
            $data['persentase_penelitian'] = '0';
            $data['persentase_pengmas'] = '0';
            $data['persentase_penunjang'] = '0';
        }


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
        $data['c1'] = $this->m_verif->c1($id_pengajuan);
        $data['c2'] = $this->m_verif->c2($id_pengajuan);
        $data['c3'] = $this->m_verif->c3($id_pengajuan);
        $data['c4'] = $this->m_verif->c4($id_pengajuan);
        $data['c5'] = $this->m_verif->c5($id_pengajuan);
        $data['c6'] = $this->m_verif->c6($id_pengajuan);
        $data['c7'] = $this->m_verif->c7($id_pengajuan);
        $data['c8'] = $this->m_verif->c8($id_pengajuan);
        $data['d1'] = $this->m_verif->d1($id_pengajuan);
        $data['d2'] = $this->m_verif->d2($id_pengajuan);
        $data['d3'] = $this->m_verif->d3($id_pengajuan);
        $data['d4'] = $this->m_verif->d4($id_pengajuan);
        $data['d5'] = $this->m_verif->d5($id_pengajuan);
        $data['d6'] = $this->m_verif->d6($id_pengajuan);
        $data['d7'] = $this->m_verif->d7($id_pengajuan);
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

        $data['title'] = 'Log Pengajuan Dosen';
        $this->load->view('templates/auth_header_admin', $data);
        $this->load->view('dosen/log_pengajuan');
        $this->load->view('templates/auth_footer');
    }
}
