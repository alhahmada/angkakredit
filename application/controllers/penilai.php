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
        // if ($this->session->userdata('role') != "5" or $this->session->userdata('role') != "4") {
        //     redirect(base_url($this->session->userdata('home')));
        // }

        $this->load->model('m_auth');
        $this->load->model('m_pengajuan');
        $this->load->model('m_verif');
        $this->load->model('m_penilai');
        $this->load->model('m_resume');
    }

    public function Beranda_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));

        $belum_dinilai = $this->m_verif->belum_dinilai($this->session->userdata('nip'));
        $data['pengajuanBN'] = $belum_dinilai;

        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['array'] = $datauser[0];
        $data['title'] = 'Beranda Penilai';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/beranda_penilai');
        $this->load->view('templates/auth_footer');
    }

    public function Daftar_penilaianAK()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];

        // $cekpenilai = $this->m_penilai->cek_penilai();
        // if ($cekpenilai == null) {
        //     $pengajuan3 = $this->m_verif->pengajuan_3();
        // } else {
        //     $pengajuan3 = $this->m_verif->pengajuan3_not($cekpenilai);
        // }
        // $data['pengajuan3'] = $pengajuan3;

        $belum_dinilai = $this->m_verif->belum_dinilai($this->session->userdata('nip'));
        $data['pengajuanBN'] = $belum_dinilai;

        $selesai_nilai = $this->m_verif->selesai_nilai($this->session->userdata('nip'));
        $data['pengajuanSN'] = $selesai_nilai;

        $data['title'] = 'Daftar Pengajuan Yang Harus Dinilai';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/daftar_penilaianAK');
        $this->load->view('templates/auth_footer');
    }

    public function Penilaian_ak()
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


        $data['title'] = 'Penilaian Angka Kredit';
        $data['user'] = $user[0];
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/penilaian_ak');
        $this->load->view('templates/auth_footer');
    }

    public function Action_penilaian_ak()
    {
        ini_set('max_execution_time', 0);
        $nip = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->input->post('id_pengajuan');
        $keterangan = $this->db->query("SELECT keterangan FROM tbl_penilaian WHERE id_pengajuan=$id_pengajuan AND nip=$nip")->result_array();
        if ($keterangan['0']['keterangan'] == "1") {
            $ak_p = "ak_p1";
        } elseif ($keterangan['0']['keterangan'] == "2") {
            $ak_p = "ak_p2";
        } elseif ($keterangan['0']['keterangan'] == "3") {
            $ak_p = "ak_p3";
        }
        $arraytbl = array('a1', 'a2', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'b13');
        $total1 = 0;
        foreach ($arraytbl as $key => $tbl) {
            $nilai = $this->input->post('nilai_' . $tbl);
            $total = 0;
            if ($nilai != NULL) {
                for ($i = 0; $i < count($nilai); $i++) {
                    $id_bab = $this->input->post('id_bab_' . $tbl);
                    $this->m_penilai->update_nilai('tbl_' . $tbl, $id_bab[$i], $nilai[$i], $ak_p);
                    $total += $nilai[$i];
                }
            }
            $total1 += $total;
        }
    }

    public function Nilai_pendidikan()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $id_pengajuan = $this->uri->segment(3);
        $data['id_pengajuan'] = $id_pengajuan;
        $user = $this->m_pengajuan->user_pengajuan($id_pengajuan);

        $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
        $data['data_pengajuan'] = $data_pengajuan[0];
        $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

        $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();
        $data['constraint'] = $constraint[0];

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
        $data['title'] = 'Penilaian Angka Kredit';

        $data['id_pengajuan'] = $this->uri->segment(3);
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('penilai/nilai_pendidikan');
        $this->load->view('templates/auth_footer');
    }

    public function Action_nilai_pendidikan()
    {
        ini_set('max_execution_time', 0);
        $nip = $this->m_auth->data_user($this->session->userdata('nip'));


        $id_pengajuan = $this->input->post('id_pengajuan');
        $keterangan = $this->db->query("SELECT keterangan FROM tbl_penilaian WHERE id_pengajuan=$id_pengajuan AND nip=$nip")->result_array();
        if ($keterangan['0']['keterangan'] == "1") {
            $ak_p = "ak_p1";
            $ke = "1";
        } elseif ($keterangan['0']['keterangan'] == "2") {
            $ak_p = "ak_p2";
            $ke = "2";
        } elseif ($keterangan['0']['keterangan'] == "3") {
            $ak_p = "ak_p3";
            $ke = "3";
        }
        //$arraytbl = array('a1', 'a2', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'b13', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'e1', 'e2', 'e3', 'e4', 'e5', 'e6', 'e7', 'e8', 'e9', 'e10');
        $arraytbl = array('a1', 'a2', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'b13');
        $total1 = 0;
        foreach ($arraytbl as $key => $tbl) {
            $nilai = $this->input->post('nilai_' . $tbl);
            $total = 0;
            if ($nilai != NULL) {
                for ($i = 0; $i < count($nilai); $i++) {
                    $id_bab = $this->input->post('id_bab_' . $tbl);
                    $this->m_penilai->update_nilai('tbl_' . $tbl, $id_bab[$i], $nilai[$i], $ak_p);
                    $total += $nilai[$i];
                }
            }
            $total1 += $total;
        }
        $this->m_penilai->update_total_nilai($id_pengajuan, $total1, 'pendidikan');
        $total_pendidikan = $total1;
        unset($total1, $total);


        for ($i = 1; $i < 9; $i++) {
            $nilai = $this->input->post('nilai_c' . $i);
            $total = 0;
            if ($nilai != null) {
                for ($a = 0; $a < count($nilai); $a++) {
                    $id_bab = $this->input->post('id_bab_c' . $i);
                    $this->m_penilai->update_nilai('tbl_c' . $i, $id_bab[$a], $nilai[$a], $ak_p);
                    $total += $nilai[$a];
                }
            }
            $total1 += $total;
        }
        $this->m_penilai->update_total_nilai($id_pengajuan, $total1, 'penelitian');
        $total_penelitian = $total1;
        unset($total1, $total);


        for ($i = 1; $i < 8; $i++) {
            $nilai = $this->input->post('nilai_d' . $i);
            $total = 0;
            if ($nilai != null) {
                for ($a = 0; $a < count($nilai); $a++) {
                    $id_bab = $this->input->post('id_bab_d' . $i);
                    $this->m_penilai->update_nilai('tbl_d' . $i, $id_bab[$a], $nilai[$a], $ak_p);
                    $total += $nilai[$a];
                }
            }
            $total1 += $total;
        }
        $this->m_penilai->update_total_nilai($id_pengajuan, $total1, 'pengmas');
        $total_pengmas = $total1;
        unset($total1, $total);


        for ($i = 1; $i < 11; $i++) {
            $nilai = $this->input->post('nilai_e' . $i);
            $total = 0;
            if ($nilai != null) {
                for ($a = 0; $a < count($nilai); $a++) {
                    $id_bab = $this->input->post('id_bab_e' . $i);
                    $this->m_penilai->update_nilai('tbl_e' . $i, $id_bab[$a], $nilai[$a], $ak_p);
                    $total += $nilai[$a];
                }
            }
            $total1 += $total;
        }
        $this->m_penilai->update_total_nilai($id_pengajuan, $total1, 'penunjang');
        $total_penunjang = $total1;
        unset($total1, $total);

        if ($this->m_pengajuan->cek_penilaian($id_pengajuan) == null) {
            $this->m_pengajuan->update_progress($id_pengajuan, 4, 'Selesai Dinilai Oleh Tim Penilai');
        }

        $keterangan = $this->input->post('komentar');
        $this->m_pengajuan->update_log($id_pengajuan, $keterangan, 'Penilai_' . $ke);

        redirect('penilai/daftar_penilaianAK');
    }

    public function Informasi_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Halaman Informasi';
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('auth/informasi');
        $this->load->view('templates/auth_footer');
    }

    public function Setelan_penilai()
    {
        $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
        $data['nama'] = $datauser[0]['nama_lengkap'];
        $data['foto'] = $datauser[0]['foto'];
        $data['title'] = 'Pengaturan';
        $this->load->view('templates/auth_header_penilai', $data);
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
        $this->load->view('templates/auth_header_penilai', $data);
        $this->load->view('auth/edit_profil');
        $this->load->view('templates/auth_footer');
    }

    public function History_penilai()
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
