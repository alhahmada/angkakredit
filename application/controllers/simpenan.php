// Form Pengajuan Pendidikan dan Pengajaran
public function pendidikan()
{
$datauser = $this->m_auth->data_user($this->session->userdata('nip'));
$data['array'] = $datauser[0];

$id_pengajuan = $this->uri->segment(3);


$data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
$data['data_pengajuan'] = $data_pengajuan[0];
$jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

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

$data['nama'] = $datauser[0]['nama_lengkap'];
$data['foto'] = $datauser[0]['foto'];
$data['title'] = 'Pengajuan Angka Kredit';
$data['id_pengajuan'] = $this->uri->segment(3);
$this->load->view('templates/auth_header', $data);
$this->load->view('dosen/pendidikan');
$this->load->view('templates/tabel_pendidikan');
$this->load->view('templates/auth_footer_2');
}
public function action_pendidikan()
{
$id_pengajuan = $this->input->post('id_pengajuan');
$user = $this->m_pengajuan->user_pengajuan($id_pengajuan);
$data['array'] = $user[0];
$filenames = array();
$ak = 0;

//Pengajuan A1
$a11 = $this->input->post('A11');
$a12 = $this->input->post('A12');
$a13 = $this->input->post('A13');
$a14 = $this->input->post('A14');
$a15 = $this->input->post('A15');
$error_data['data_error'] = array();

$this->db->select('id');
$this->db->from('tbl_a1');
$this->db->where('tbl_a1.id_pengajuan', $id_pengajuan);
$list_a1 = $this->db->get()->result_array();
$jml_a1 = count($list_a1);
if ($a11 != NULL) {
for ($i = 0; $i < count($a11); $i++) { $ak=0; if ($a11[$i]=='Magister' ) { $ak=150; } elseif ($a11[$i]=='Doktor' ) { $ak=200; } $this->berkas->constraint('a1' . $i, $id_pengajuan, $ak);
    unset($ak);
    if ($a11[$i] != "") {
    $filename = $this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_a1 . '_a1';
    if (is_null($this->session->userdata['data_error'])) {
    $error_data['data_error']['tbl_a1'] = $this->berkas->a1($id_pengajuan, $a11[$i], $a12[$i], $a13[$i], $a14[$i], $filename . '.pdf', $ak);
    } else {
    $error_data['data_error']['tbl_a1'] = $this->berkas->a1($id_pengajuan, $a11[$i], $a12[$i], $a13[$i], $a14[$i], $filename . '.pdf', $ak);
    }
    }
    $filenames[] = $filename;
    $jml_a1 = $jml_a1 + 1;
    }
    $this->berkas->upload_files($filenames, $_FILES['A15']);
    unset($filenames);
    }
    //Pengajuan A2
    $a21 = $this->input->post('A21');
    $a22 = $this->input->post('A22');
    $a23 = $this->input->post('A23');
    $a24 = $this->input->post('A24');

    $this->db->select('id');
    $this->db->from('tbl_a2');
    $this->db->where('tbl_a2.id_pengajuan', $id_pengajuan);
    $list_a2 = $this->db->get()->result_array();
    $jml_a2 = count($list_a2);
    if ($a21 != NULL) {
    for ($i = 0; $i < count($a21); $i++) { if ($a21[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_a2 . '_a2';
        $this->berkas->a2($id_pengajuan, $a21[$i], $a22[$i], $a23[$i], $filename, 3);
        }
        $filenames[] = $filename;
        $jml_a2 = $jml_a2 + 1;
        $this->berkas->constraint('a2' . $i, $id_pengajuan, 3);
        }
        $this->berkas->upload_files($filenames, $_FILES['A24']);
        unset($filenames);
        }
        // Pengajuan B1
        $b11 = $this->input->post('B11');
        $b12 = $this->input->post('B12');
        $b13 = $this->input->post('B13');
        $b14 = $this->input->post('B14');
        $b15 = $this->input->post('B15');

        $this->db->select('id');
        $this->db->from('tbl_b1');
        $this->db->where('tbl_b1.id_pengajuan', $id_pengajuan);
        $list_b1 = $this->db->get()->result_array();
        $jml_b1 = count($list_b1);

        if ($b11 != NULL) {
        for ($i = 0; $i < count($b11); $i++) { if ($b11[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b1 . '_b1';
            $filenames[] = $filename;
            $ak = 0;
            $tmp = 0;
            $tmp1 = 0;
            if ($user[0]['jabatan_fungsi'] == 'Asisten Ahli') {
            if ($b13[$i] > 10) {
            $tmp = $b13[$i] - 10;
            $tmp1 = $tmp * 0.25;
            $ak = 5 + $tmp1;
            } else {
            $ak = $b13[$i] * 0.5;
            }
            } else {
            if ($b13[$i] > 10) {
            $tmp = $b13[$i] - 10;
            $tmp1 = $tmp * 0.5;
            $ak = 10 + $tmp1;
            } else {
            $ak = $b13[$i];
            }
            }
            $this->berkas->b1($id_pengajuan, $b11[$i], $b12[$i], $b13[$i], $b14[$i], $filename, $ak);
            }
            $jml_b1 = $jml_b1 + 1;
            $this->berkas->constraint('b1' . $i, $id_pengajuan, $ak);
            unset($ak);
            unset($tmp);
            unset($tmp1);
            }
            $this->berkas->upload_files($filenames, $_FILES['B15']);
            unset($filenames);
            }
            // Pengajuan B2
            $b21 = $this->input->post('B21');
            $b22 = $this->input->post('B22');

            $this->db->select('id');
            $this->db->from('tbl_b2');
            $this->db->where('tbl_b2.id_pengajuan', $id_pengajuan);
            $list_b2 = $this->db->get()->result_array();
            $jml_b2 = count($list_b2);
            if ($b21 != NULL) {
            for ($i = 0; $i < count($b21); $i++) { if ($b21[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b2 . '_b2';
                $this->berkas->b2($id_pengajuan, $b21[$i], $filename, 1);
                }
                $filenames[] = $filename;
                $jml_b2 = $jml_b2 + 1;
                $this->berkas->constraint('b2' . $i, $id_pengajuan, 1);
                }
                $this->berkas->upload_files($filenames, $_FILES['B22']);
                unset($filenames);
                }
                // Pengajuan B3
                $b31 = $this->input->post('B31');
                $b32 = $this->input->post('B32');
                $b33 = $this->input->post('B33');
                $this->db->select('id');
                $this->db->from('tbl_b3');
                $this->db->where('tbl_b3.id_pengajuan', $id_pengajuan);
                $list_b3 = $this->db->get()->result_array();
                $jml_b3 = count($list_b3);
                if ($b31 != NULL) {
                for ($i = 0; $i < count($b31); $i++) { if ($b31[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b3 . '_b3';
                    $this->berkas->b3($id_pengajuan, $b31[$i], $b32[$i], $filename, 1);
                    }
                    $filenames[] = $filename;
                    $jml_b3 = $jml_b3 + 1;
                    $this->berkas->constraint('b3' . $i, $id_pengajuan, 1);
                    }
                    $this->berkas->upload_files($filenames, $_FILES['B33']);
                    unset($filenames);
                    }
                    // Pengajuan B4
                    $b41 = $this->input->post('B41');
                    $b42 = $this->input->post('B42');
                    $b43 = $this->input->post('B43');
                    $b44 = $this->input->post('B44');
                    $b45 = $this->input->post('B45');

                    $this->db->select('id');
                    $this->db->from('tbl_b4');
                    $this->db->where('tbl_b4.id_pengajuan', $id_pengajuan);
                    $list_b4 = $this->db->get()->result_array();
                    $jml_b4 = count($list_b4);
                    if ($b41 != NULL) {
                    for ($i = 0; $i < count($b41); $i++) { if ($b41[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b4 . '_b4';
                        }
                        $filenames[] = $filename;
                        if ($b41[$i] == 'Skripsi' && $b42[$i] == 'Utama') {
                        $ak = 1 * $b44[$i];
                        } elseif ($b41[$i] == 'Skripsi' && $b42[$i] == 'Pendamping') {
                        $ak = 0.5 * $b44[$i];
                        } elseif ($b41[$i] == 'Laporan Akhir' && $b42[$i] == 'Utama') {
                        $ak = 1 * $b44[$i];
                        } elseif ($b41[$i] == 'Laporan Akhir' && $b42[$i] == 'Pendamping') {
                        $ak = 0.5 * $b44[$i];
                        } elseif ($b41[$i] == 'Thesis' && $b42[$i] == 'Utama') {
                        $ak = 3 * $b44[$i];
                        } elseif ($b41[$i] == 'Thesis' && $b42[$i] == 'Pendamping') {
                        $ak = 3 * $b44[$i];
                        } elseif ($b41[$i] == 'Disertasi' && $b42[$i] == 'Utama') {
                        $ak = 8 * $b44[$i];
                        } elseif ($b41[$i] == 'Disertasi' && $b42[$i] == 'Pendamping') {
                        $ak = 6 * $b44[$i];
                        }
                        $this->berkas->b4($id_pengajuan, $b41[$i], $b42[$i], $b43[$i], $b44[$i], $filename, $ak);
                        $this->berkas->constraint('b4' . $i, $id_pengajuan, $ak);
                        $jml_b4 = $jml_b4 + 1;
                        unset($ak);
                        }
                        $this->berkas->upload_files($filenames, $_FILES['B45']);
                        unset($filenames);
                        }
                        // Pengajuan B5
                        $b51 = $this->input->post('B51');
                        $b52 = $this->input->post('B52');
                        $b53 = $this->input->post('B53');
                        $b54 = $this->input->post('B54');

                        $this->db->select('id');
                        $this->db->from('tbl_b5');
                        $this->db->where('tbl_b5.id_pengajuan', $id_pengajuan);
                        $list_b5 = $this->db->get()->result_array();
                        $jml_b5 = count($list_b5);
                        if ($b51 != NULL) {
                        for ($i = 0; $i < count($b51); $i++) { if ($b51[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b5 . '_b5';
                            }
                            $filenames[] = $filename;
                            if ($b51[$i] == 'Ketua Penguji') {
                            $ak = 1 * $b53[$i];
                            } elseif ($b51[$i] == 'Anggota Penguji') {
                            $ak = 0.5 * $b53[$i];
                            }
                            $this->berkas->b5($id_pengajuan, $b51[$i], $b52[$i], $b53[$i], $filename, $ak);
                            $this->berkas->constraint('b5' . $i, $id_pengajuan, $ak);
                            $jml_b5 = $jml_b5 + 1;
                            unset($ak);
                            }
                            $this->berkas->upload_files($filenames, $_FILES['B54']);
                            unset($filenames);
                            }
                            // Pengajuan B6
                            $b61 = $this->input->post('B61');
                            $b62 = $this->input->post('B62');
                            $b63 = $this->input->post('B63');

                            $this->db->select('id');
                            $this->db->from('tbl_b6');
                            $this->db->where('tbl_b6.id_pengajuan', $id_pengajuan);
                            $list_b6 = $this->db->get()->result_array();
                            $jml_b6 = count($list_b6);
                            if ($b61 != NULL) {
                            for ($i = 0; $i < count($b61); $i++) { if ($b61[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b6 . '_b6';
                                $this->berkas->b6($id_pengajuan, $b61[$i], $b62[$i], $filename, 2);
                                }
                                $filenames[] = $filename;
                                $jml_b6 = $jml_b6 + 1;
                                $this->berkas->constraint('b6' . $i, $id_pengajuan, 2);
                                }
                                $this->berkas->upload_files($filenames, $_FILES['B63']);
                                unset($filenames);
                                }
                                // Pengajuan B7
                                $b71 = $this->input->post('B71');
                                $b72 = $this->input->post('B72');
                                $b73 = $this->input->post('B73');
                                $b74 = $this->input->post('B74');
                                $b75 = $this->input->post('B75');

                                $this->db->select('id');
                                $this->db->from('tbl_b7');
                                $this->db->where('tbl_b7.id_pengajuan', $id_pengajuan);
                                $list_b7 = $this->db->get()->result_array();
                                $jml_b7 = count($list_b7);
                                if ($b71 != NULL) {
                                for ($i = 0; $i < count($b71); $i++) { if ($b71[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b7 . '_b7';
                                    $this->berkas->b7($id_pengajuan, $b71[$i], $b72[$i], $b73[$i], $b74[$i], $filename, 2);
                                    }
                                    $filenames[] = $filename;
                                    $jml_b7 = $jml_b7 + 1;
                                    $this->berkas->constraint('b7' . $i, $id_pengajuan, 2);
                                    }
                                    $this->berkas->upload_files($filenames, $_FILES['B75']);
                                    unset($filenames);
                                    }
                                    // Pengajuan B8
                                    $b81 = $this->input->post('B81');
                                    $b82 = $this->input->post('B82');
                                    $b83 = $this->input->post('B83');
                                    $b84 = $this->input->post('B84');
                                    $b85 = $this->input->post('B85');

                                    $this->db->select('id');
                                    $this->db->from('tbl_b8');
                                    $this->db->where('tbl_b8.id_pengajuan', $id_pengajuan);
                                    $list_b8 = $this->db->get()->result_array();
                                    $jml_b8 = count($list_b8);
                                    if ($b81 != NULL) {
                                    for ($i = 0; $i < count($b81); $i++) { if ($b81[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b8 . '_b8';
                                        }
                                        $filenames[] = $filename;

                                        if ($b81[$i] == 'Buku Ajar') {
                                        $ak = 20;
                                        } elseif ($b81[$i] == 'Diklat/Modul') {
                                        $ak = 5;
                                        }
                                        $this->berkas->b8($id_pengajuan, $b81[$i], $b82[$i], $b83[$i], $b84[$i], $filename, $ak);
                                        $this->berkas->constraint('b8' . $i, $id_pengajuan, $ak);
                                        $jml_b8 = $jml_b8 + 1;
                                        unset($ak);
                                        }
                                        $this->berkas->upload_files($filenames, $_FILES['B85']);
                                        unset($filenames);
                                        }
                                        // Pengajuan B9
                                        $b91 = $this->input->post('B91');
                                        $b92 = $this->input->post('B92');
                                        $b93 = $this->input->post('B93');
                                        $b94 = $this->input->post('B94');

                                        $this->db->select('id');
                                        $this->db->from('tbl_b9');
                                        $this->db->where('tbl_b9.id_pengajuan', $id_pengajuan);
                                        $list_b9 = $this->db->get()->result_array();
                                        $jml_b9 = count($list_b9);
                                        if ($b91 != NULL) {
                                        for ($i = 0; $i < count($b91); $i++) { if ($b91[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b9 . '_b9';
                                            $this->berkas->b9($id_pengajuan, $b91[$i], $b92[$i], $b93[$i], $filename, 5);
                                            }
                                            $filenames[] = $filename;
                                            $jml_b9 = $jml_b9 + 1;
                                            $this->berkas->constraint('b9' . $i, $id_pengajuan, 5);
                                            }
                                            $this->berkas->upload_files($filenames, $_FILES['B94']);
                                            unset($filenames);
                                            }
                                            // Pengajuan B10
                                            $b101 = $this->input->post('B101');
                                            $b102 = $this->input->post('B102');
                                            $b103 = $this->input->post('B103');
                                            $b104 = $this->input->post('B104');

                                            $this->db->select('id');
                                            $this->db->from('tbl_b10');
                                            $this->db->where('tbl_b10.id_pengajuan', $id_pengajuan);
                                            $list_b10 = $this->db->get()->result_array();
                                            $jml_b10 = count($list_b10);
                                            if ($b101 != NULL) {
                                            for ($i = 0; $i < count($b101); $i++) { if ($b101[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b10 . '_b10';
                                                }
                                                $filenames[] = $filename;
                                                if ($b101[$i] == 'Direktur') {
                                                $ak = 4;
                                                } elseif ($b101[$i] == 'Wakil Direktur') {
                                                $ak = 4;
                                                } elseif ($b101[$i] == 'Kepala Program Studi' || $b101[$i] == 'Sekretaris Program Studi' || $b101[$i] == 'Kepala Bagian') {
                                                $ak = 3;
                                                }
                                                $this->berkas->b10($id_pengajuan, $b101[$i], $b102[$i], $b103[$i], $filename, $ak);
                                                $this->berkas->constraint('b10' . $i, $id_pengajuan, $ak);
                                                $jml_b10 = $jml_b10 + 1;
                                                unset($ak);
                                                }
                                                $this->berkas->upload_files($filenames, $_FILES['B104']);
                                                unset($filenames);
                                                }
                                                // Pengajuan B11
                                                $b111 = $this->input->post('B111');
                                                $b112 = $this->input->post('B112');
                                                $b113 = $this->input->post('B113');
                                                $b114 = $this->input->post('B114');

                                                $this->db->select('id');
                                                $this->db->from('tbl_b11');
                                                $this->db->where('tbl_b11.id_pengajuan', $id_pengajuan);
                                                $list_b11 = $this->db->get()->result_array();
                                                $jml_b11 = count($list_b11);
                                                if ($b111 != NULL) {
                                                for ($i = 0; $i < count($b111); $i++) { if ($b111[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b11 . '_b11';
                                                    }
                                                    $filenames[] = $filename;
                                                    if ($b111[$i] == 'Bimbing Pencangkokan') {
                                                    $ak = 2;
                                                    } elseif ($b111[$i] == 'Bimbing Reguler') {
                                                    $ak = 1;
                                                    }
                                                    $this->berkas->b11($id_pengajuan, $b111[$i], $b112[$i], $b113[$i], $filename, $ak);
                                                    $this->berkas->constraint('b11' . $i, $id_pengajuan, $ak);
                                                    $jml_b11 = $jml_b11 + 1;
                                                    unset($ak);
                                                    }
                                                    $this->berkas->upload_files($filenames, $_FILES['B114']);
                                                    unset($filenames);
                                                    }
                                                    // Pengajuan B12
                                                    $b121 = $this->input->post('B121');
                                                    $b122 = $this->input->post('B122');
                                                    $b123 = $this->input->post('B123');
                                                    $b124 = $this->input->post('B124');

                                                    $this->db->select('id');
                                                    $this->db->from('tbl_b12');
                                                    $this->db->where('tbl_b12.id_pengajuan', $id_pengajuan);
                                                    $list_b12 = $this->db->get()->result_array();
                                                    $jml_b12 = count($list_b12);
                                                    if ($b121 != NULL) {
                                                    for ($i = 0; $i < count($b121); $i++) { if ($b121[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b12 . '_b12';
                                                        }
                                                        $filenames[] = $filename;
                                                        if ($b121[$i] == 'Datasering') {
                                                        $ak = 5;
                                                        } elseif ($b121[$i] == 'Pencangkokan') {
                                                        $ak = 4;
                                                        }
                                                        $this->berkas->b12($id_pengajuan, $b121[$i], $b122[$i], $b123[$i], $filename, $ak);
                                                        $this->berkas->constraint('b12' . $i, $id_pengajuan, $ak);
                                                        $jml_b12 = $jml_b12 + 1;
                                                        unset($ak);
                                                        }
                                                        $this->berkas->upload_files($filenames, $_FILES['B124']);
                                                        unset($filenames);
                                                        }
                                                        // Pengajuan B13
                                                        $b131 = $this->input->post('B131');
                                                        $b132 = $this->input->post('B132');

                                                        $this->db->select('id');
                                                        $this->db->from('tbl_b13');
                                                        $this->db->where('tbl_b13.id_pengajuan', $id_pengajuan);
                                                        $list_b13 = $this->db->get()->result_array();
                                                        $jml_b13 = count($list_b13);
                                                        if ($b131 != NULL) {
                                                        for ($i = 0; $i < count($b131); $i++) { if ($b131[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $jml_b13 . '_b13';
                                                            }
                                                            $filenames[] = $filename;
                                                            if ($b131[$i] == '> 960 jam') {
                                                            $ak = 15;
                                                            } elseif ($b131[$i] == '641-960 jam') {
                                                            $ak = 9;
                                                            } elseif ($b131[$i] == '481-640 jam') {
                                                            $ak = 6;
                                                            } elseif ($b131[$i] == '161-480 jam') {
                                                            $ak = 3;
                                                            } elseif ($b131[$i] == '81-160 jam') {
                                                            $ak = 2;
                                                            } elseif ($b131[$i] == '31-80 jam') {
                                                            $ak = 1;
                                                            } elseif ($b131[$i] == '10-30 jam') {
                                                            $ak = 0.5;
                                                            }
                                                            $this->berkas->b13($id_pengajuan, $b131[$i], $filename, $ak);
                                                            $this->berkas->constraint('b13' . $i, $id_pengajuan, $ak);
                                                            $jml_b13 = $jml_b13 + 1;
                                                            unset($ak);
                                                            }
                                                            $this->berkas->upload_files($filenames, $_FILES['B132']);
                                                            unset($filenames);
                                                            }

                                                            // Minimal AK Pendidikan Diperoleh
                                                            $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
                                                            $data['data_pengajuan'] = $data_pengajuan[0];
                                                            $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

                                                            $data['total_pendidikan'] = $this->m_verif->total_pendidikan($id_pengajuan);
                                                            $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();

                                                            $min_pendidikan = $constraint[0]['persen_pendidikan'] * $data_pengajuan[0]['kurang_ak'];

                                                            // if ($data['total_pendidikan'][0]['total'] >= $min_pendidikan) {
                                                            // $this->session->set_userdata(array('data_error'=> NULL));
                                                            // redirect('/dosen/penelitian/' . $id_pengajuan);
                                                            // } else {
                                                            // $this->session->set_userdata($error_data);
                                                            // redirect(base_url('dosen/pendidikan/' . $id_pengajuan . '/error'));
                                                            // }

                                                            redirect('/dosen/penelitian/' . $id_pengajuan);
                                                            }





                                                            // Form Pengajuan Penelitian
                                                            public function penelitian()
                                                            {
                                                            $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
                                                            $data['array'] = $datauser[0];

                                                            $id_pengajuan = $this->uri->segment(3);
                                                            $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
                                                            $data['data_pengajuan'] = $data_pengajuan[0];
                                                            $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

                                                            $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();
                                                            $data['constraint'] = $constraint[0];



                                                            $data['nama'] = $datauser[0]['nama_lengkap'];
                                                            $data['foto'] = $datauser[0]['foto'];
                                                            $data['title'] = 'Pengajuan Angka Kredit';
                                                            $data['id_pengajuan'] = $this->uri->segment(3);
                                                            $this->load->view('templates/auth_header', $data);
                                                            $this->load->view('dosen/penelitian');
                                                            $this->load->view('templates/tabel_penelitian');
                                                            $this->load->view('templates/auth_footer_2');
                                                            }
                                                            public function action_penelitian()
                                                            {
                                                            $id_pengajuan = $this->input->post('id_pengajuan');
                                                            $filenames = array();
                                                            $ak = 0;


                                                            //Pengajuan C1
                                                            $c11 = $this->input->post('C11');
                                                            $c12 = $this->input->post('C12');
                                                            $c13 = $this->input->post('C13');
                                                            $c14 = $this->input->post('C14');
                                                            $c15 = $this->input->post('C15');
                                                            if ($c11 != NULL) {
                                                            for ($i = 0; $i < count($c11); $i++) { if ($c11[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_c1';
                                                                $this->berkas->c1($id_pengajuan, $c11[$i], $c12[$i], $c13[$i], $c14[$i], $filename);

                                                                $filenames[] = $filename;
                                                                if ($c11[$i] == 'Buku Sendiri' && $c13[$i] == 'Buku Referensi') {
                                                                $ak = 40;
                                                                } elseif ($c11[$i] == 'Buku Sendiri' && $c13[$i] == 'Monograf') {
                                                                $ak = 20;
                                                                } elseif ($c11[$i] == 'Buku Berbagai Penulis' && $c13[$i] == 'Internasional') {
                                                                $ak = 15;
                                                                } elseif ($c11[$i] == 'Buku Berbagai Penulis' && $c13[$i] == 'Nasional') {
                                                                $ak = 10;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Internasional Bereputasi dan Berfaktor Dampak') {
                                                                $ak = 40;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Internasional Bereputasi') {
                                                                $ak = 30;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Internasional Tidak Bereputasi') {
                                                                $ak = 20;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Jurnal Nasional Terakreditasi Dikti') {
                                                                $ak = 25;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Jurnal Nasional Terakreditasi Dikti Peringkat 1 dan 2') {
                                                                $ak = 25;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Jurnal Bahasa resmi PBB terindeks pada Basis Data yang diakui Dikti') {
                                                                $ak = 20;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Jurnal Nasional Terakreditasi Peringkat 3 dan 4') {
                                                                $ak = 20;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Jurnal Nasional berbahasa Indonesia terindeks yang diakui Dikti (peringkat 5 dan 6)') {
                                                                $ak = 15;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Jurnal Nasional') {
                                                                $ak = 10;
                                                                } elseif ($c11[$i] == 'Jurnal' && $c13[$i] == 'Jurnal Ilmiah Bahasa Resmi PBB yang tidak memenuhi syarat Jurnal Internasional') {
                                                                $ak = 10;
                                                                }
                                                                }
                                                                $this->berkas->constraint('c1' . $i, $id_pengajuan, $ak);
                                                                unset($ak);
                                                                }
                                                                $this->berkas->upload_files($filenames, $_FILES['C15']);
                                                                unset($filenames);
                                                                }

                                                                //Pengajuan C2
                                                                $c21 = $this->input->post('C21');
                                                                $c22 = $this->input->post('C22');
                                                                $c23 = $this->input->post('C23');
                                                                $c24 = $this->input->post('C24');
                                                                $c25 = $this->input->post('C25');
                                                                if ($c21 != NULL) {
                                                                for ($i = 0; $i < count($c21); $i++) { if ($c21[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_c2';
                                                                    $this->berkas->c2($id_pengajuan, $c21[$i], $c22[$i], $c23[$i], $c24[$i], $filename);
                                                                    }
                                                                    $filenames[] = $filename;
                                                                    if ($c21[$i] == 'Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN' && $c23[$i] == 'Internasional Terindeks pada Scimagojr dan Scopus') {
                                                                    $ak = 30;
                                                                    } elseif ($c21[$i] == 'Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN' && $c23[$i] == 'Internasional Terindeks pada SCOPUS, IEEE Explore, SPIE') {
                                                                    $ak = 25;
                                                                    } elseif ($c21[$i] == 'Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN' && $c23[$i] == 'Internasional') {
                                                                    $ak = 15;
                                                                    } elseif ($c21[$i] == 'Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN' && $c23[$i] == 'Nasional') {
                                                                    $ak = 10;
                                                                    } elseif ($c21[$i] == 'Poster Dalam Prosiding yang Dipublikasikan' && $c23[$i] == 'Internasional') {
                                                                    $ak = 10;
                                                                    } elseif ($c21[$i] == 'Poster Dalam Prosiding yang Dipublikasikan' && $c23[$i] == 'Nasional') {
                                                                    $ak = 5;
                                                                    } elseif ($c21[$i] == 'Seminar/Simposium/Lokakarya Tidak Dimuat Prosiding' && $c23[$i] == 'Internasional') {
                                                                    $ak = 5;
                                                                    } elseif ($c21[$i] == 'Seminar/Simposium/Lokakarya Tidak Dimuat Prosiding' && $c23[$i] == 'Nasional') {
                                                                    $ak = 3;
                                                                    } elseif ($c21[$i] == 'Tidak Disajikan Dalam Seminar/Simposium/Lokakarya, Dimuat Dalam Prosiding' && $c23[$i] == 'Internasional') {
                                                                    $ak = 10;
                                                                    } elseif ($c21[$i] == 'Tidak Disajikan Dalam Seminar/Simposium/Lokakarya, Dimuat Dalam Prosiding' && $c23[$i] == 'Nasional') {
                                                                    $ak = 5;
                                                                    } elseif ($c21[$i] == 'Koran/Majalah' && $c23[$i] == 'Semua Jenjang') {
                                                                    $ak = 1;
                                                                    }
                                                                    $this->berkas->constraint('c2' . $i, $id_pengajuan, $ak);
                                                                    unset($ak);
                                                                    }
                                                                    $this->berkas->upload_files($filenames, $_FILES['C25']);
                                                                    unset($filenames);
                                                                    }

                                                                    //Pengajuan C3
                                                                    $c31 = $this->input->post('C31');
                                                                    $c32 = $this->input->post('C32');
                                                                    $c33 = $this->input->post('C33');
                                                                    if ($c31 != NULL) {
                                                                    for ($i = 0; $i < count($c31); $i++) { if ($c31[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_c3';
                                                                        $this->berkas->c3($id_pengajuan, $c31[$i], $c32[$i], $filename);
                                                                        }
                                                                        $filenames[] = $filename;
                                                                        $this->berkas->constraint('c3' . $i, $id_pengajuan, 2);
                                                                        }
                                                                        $this->berkas->upload_files($filenames, $_FILES['C33']);
                                                                        unset($filenames);
                                                                        }

                                                                        //Pengajuan C4
                                                                        $c41 = $this->input->post('C41');
                                                                        $c42 = $this->input->post('C42');
                                                                        $c43 = $this->input->post('C43');
                                                                        $c44 = $this->input->post('C44');
                                                                        if ($c41 != NULL) {
                                                                        for ($i = 0; $i < count($c41); $i++) { if ($c41[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_c4';
                                                                            $this->berkas->c4($id_pengajuan, $c41[$i], $c42[$i], $c43[$i], $filename);
                                                                            }
                                                                            $filenames[] = $filename;
                                                                            $this->berkas->constraint('c4' . $i, $id_pengajuan, 15);
                                                                            }
                                                                            $this->berkas->upload_files($filenames, $_FILES['C44']);
                                                                            unset($filenames);
                                                                            }

                                                                            //Pengajuan C5
                                                                            $c51 = $this->input->post('C51');
                                                                            $c52 = $this->input->post('C52');
                                                                            $c53 = $this->input->post('C53');
                                                                            $c54 = $this->input->post('C54');
                                                                            if ($c51 != NULL) {
                                                                            for ($i = 0; $i < count($c51); $i++) { if ($c51[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_c5';
                                                                                $this->berkas->c5($id_pengajuan, $c51[$i], $c52[$i], $c53[$i], $filename);
                                                                                }
                                                                                $filenames[] = $filename;
                                                                                $this->berkas->constraint('c5' . $i, $id_pengajuan, 10);
                                                                                }
                                                                                $this->berkas->upload_files($filenames, $_FILES['C54']);
                                                                                unset($filenames);
                                                                                }

                                                                                //Pengajuan C6
                                                                                $c61 = $this->input->post('C61');
                                                                                $c62 = $this->input->post('C62');
                                                                                $c63 = $this->input->post('C63');
                                                                                $c64 = $this->input->post('C64');
                                                                                $c65 = $this->input->post('C65');
                                                                                if ($c61 != NULL) {
                                                                                for ($i = 0; $i < count($c61); $i++) { if ($c61[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_c6';
                                                                                    $this->berkas->c6($id_pengajuan, $c61[$i], $c62[$i], $c63[$i], $c64[$i], $filename);
                                                                                    }
                                                                                    $filenames[] = $filename;
                                                                                    if ($c63[$i] == 'Internasional Diimplementasikan Industri') {
                                                                                    $ak = 60;
                                                                                    } elseif ($c63[$i] == 'Internasional') {
                                                                                    $ak = 50;
                                                                                    } elseif ($c63[$i] == 'Nasional Diimplementasikan Industri') {
                                                                                    $ak = 40;
                                                                                    } elseif ($c63[$i] == 'Nasional') {
                                                                                    $ak = 30;
                                                                                    } elseif ($c63[$i] == 'Nasional Paten Sederhana Dirjen Kekayaan Intelektual Kemenkumham') {
                                                                                    $ak = 20;
                                                                                    } elseif ($c63[$i] == 'Karya ciptaan, desain industri, indikasi geografis Dirjen Kekayaan Intelektual Kemenkumham') {
                                                                                    $ak = 15;
                                                                                    }
                                                                                    $this->berkas->constraint('c6' . $i, $id_pengajuan, $ak);
                                                                                    unset($ak);
                                                                                    }
                                                                                    $this->berkas->upload_files($filenames, $_FILES['C65']);
                                                                                    unset($filenames);
                                                                                    }

                                                                                    //Pengajuan C7
                                                                                    $c71 = $this->input->post('C71');
                                                                                    $c72 = $this->input->post('C72');
                                                                                    $c73 = $this->input->post('C73');
                                                                                    $c74 = $this->input->post('C74');
                                                                                    $c75 = $this->input->post('C75');
                                                                                    if ($c71 != NULL) {
                                                                                    for ($i = 0; $i < count($c71); $i++) { if ($c71[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_c7';
                                                                                        $this->berkas->c7($id_pengajuan, $c71[$i], $c72[$i], $c73[$i], $c74[$i], $filename);
                                                                                        }
                                                                                        $filenames[] = $filename;
                                                                                        if ($c73[$i] == 'Internasional') {
                                                                                        $ak = 20;
                                                                                        } elseif ($c73[$i] == 'Nasional') {
                                                                                        $ak = 15;
                                                                                        } elseif ($c73[$i] == 'Lokal') {
                                                                                        $ak = 10;
                                                                                        }
                                                                                        $this->berkas->constraint('c7' . $i, $id_pengajuan, $ak);
                                                                                        unset($ak);
                                                                                        }
                                                                                        $this->berkas->upload_files($filenames, $_FILES['C75']);
                                                                                        unset($filenames);
                                                                                        }

                                                                                        //Pengajuan C8
                                                                                        $c81 = $this->input->post('C81');
                                                                                        $c82 = $this->input->post('C82');
                                                                                        $c83 = $this->input->post('C83');
                                                                                        $c84 = $this->input->post('C84');
                                                                                        if ($c81 != NULL) {
                                                                                        for ($i = 0; $i < count($c81); $i++) { if ($c81[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_c8';
                                                                                            $this->berkas->c8($id_pengajuan, $c81[$i], $c82[$i], $c83[$i], $filename);
                                                                                            }
                                                                                            $filenames[] = $filename;
                                                                                            if ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Pencipta/Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 20;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Pencipta/Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 15;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Pencipta/Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 10;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 20;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 15;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 10;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Penata Arstistik/Penata Musik/Penata Rias/PenataBusana/ Penata Tari' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 10;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Penata Arstistik/Penata Musik/Penata Rias/PenataBusana/ Penata Tari' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 6;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Penata Arstistik/Penata Musik/Penata Rias/PenataBusana/ Penata Tari' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 3;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'PenataLampu/PenataSuara/PenataPanggung/IlustratorFoto/Kunduktor' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 10;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'PenataLampu/PenataSuara/PenataPanggung/IlustratorFoto/Kunduktor' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 6;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'PenataLampu/PenataSuara/PenataPanggung/IlustratorFoto/Kunduktor' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 3;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Pendisplay Pameran/Pembuat FotoDokumentasi/Pewarta Foto/Pembawa Acara/Reporter/RedakturPelaksana' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 6;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Pendisplay Pameran/Pembuat FotoDokumentasi/Pewarta Foto/Pembawa Acara/Reporter/RedakturPelaksana' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 4;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Pendisplay Pameran/Pembuat FotoDokumentasi/Pewarta Foto/Pembawa Acara/Reporter/RedakturPelaksana' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 2;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Sebagai Pemusik/Pengrawit/Penari/Dalang/Pemeran/Pengarah AcaraTelevisi/Pelaksana Perancangan' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 6;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Sebagai Pemusik/Pengrawit/Penari/Dalang/Pemeran/Pengarah AcaraTelevisi/Pelaksana Perancangan' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 4;
                                                                                            } elseif ($c81[$i] == 'Karya Seni' && $c82[$i] == 'Sebagai Pemusik/Pengrawit/Penari/Dalang/Pemeran/Pengarah AcaraTelevisi/Pelaksana Perancangan' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 2;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Naskah Drama/Novel' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 20;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Naskah Drama/Novel' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 15;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Naskah Drama/Novel' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 10;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Buku Kumpulan Cerpen' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 20;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Buku Kumpulan Cerpen' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 15;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Buku Kumpulan Cerpen' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 10;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Buku Kumpulan Puisi' && $c83[$i] == 'Internasional') {
                                                                                            $ak = 20;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Buku Kumpulan Puisi' && $c83[$i] == 'Nasional') {
                                                                                            $ak = 15;
                                                                                            } elseif ($c81[$i] == 'Karya Sastra' && $c82[$i] == 'Penulis Buku Kumpulan Puisi' && $c83[$i] == 'Lokal') {
                                                                                            $ak = 10;
                                                                                            }
                                                                                            $this->berkas->constraint('c8' . $i, $id_pengajuan, $ak);
                                                                                            unset($ak);
                                                                                            }
                                                                                            $this->berkas->upload_files($filenames, $_FILES['C84']);
                                                                                            unset($filenames);
                                                                                            }
                                                                                            redirect('/dosen/pengmas/' . $id_pengajuan);
                                                                                            }






                                                                                            // Form Pengabdian Masyarakat
                                                                                            public function pengmas()
                                                                                            {
                                                                                            $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
                                                                                            $data['array'] = $datauser[0];

                                                                                            $id_pengajuan = $this->uri->segment(3);
                                                                                            $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
                                                                                            $data['data_pengajuan'] = $data_pengajuan[0];
                                                                                            $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

                                                                                            $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();
                                                                                            $data['constraint'] = $constraint[0];



                                                                                            $data['nama'] = $datauser[0]['nama_lengkap'];
                                                                                            $data['foto'] = $datauser[0]['foto'];
                                                                                            $data['title'] = 'Pengajuan Angka Kredit';
                                                                                            $data['id_pengajuan'] = $this->uri->segment(3);
                                                                                            $this->load->view('templates/auth_header', $data);
                                                                                            $this->load->view('dosen/pengmas');
                                                                                            $this->load->view('templates/tabel_pengmas');
                                                                                            $this->load->view('templates/auth_footer_2');
                                                                                            }
                                                                                            public function action_pengmas()
                                                                                            {
                                                                                            $id_pengajuan = $this->input->post('id_pengajuan');
                                                                                            $filenames = array();
                                                                                            $ak = 0;


                                                                                            // Pengajuan D1
                                                                                            $d11 = $this->input->post('D11');
                                                                                            $d12 = $this->input->post('D12');
                                                                                            $d13 = $this->input->post('D13');
                                                                                            $d14 = $this->input->post('D14');
                                                                                            if ($d11 != NULL) {
                                                                                            for ($i = 0; $i < count($d11); $i++) { if ($d11[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_d1';
                                                                                                $this->berkas->d1($id_pengajuan, $d11[$i], $d12[$i], $d13[$i], $filename);
                                                                                                }
                                                                                                $filenames[] = $filename;
                                                                                                $this->berkas->constraint('d1' . $i, $id_pengajuan, 5.5);
                                                                                                }
                                                                                                $this->berkas->upload_files($filenames, $_FILES['D14']);
                                                                                                unset($filenames);
                                                                                                }

                                                                                                //Pengajuan D2
                                                                                                $d21 = $this->input->post('D21');
                                                                                                $d22 = $this->input->post('D22');
                                                                                                $d23 = $this->input->post('D23');
                                                                                                if ($d21 != NULL) {
                                                                                                for ($i = 0; $i < count($d21); $i++) { if ($d21[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_d2';
                                                                                                    $this->berkas->d2($id_pengajuan, $d21[$i], $d22[$i], $filename);
                                                                                                    }
                                                                                                    $filenames[] = $filename;
                                                                                                    $this->berkas->constraint('d2' . $i, $id_pengajuan, 3);
                                                                                                    }
                                                                                                    $this->berkas->upload_files($filenames, $_FILES['D23']);
                                                                                                    unset($filenames);
                                                                                                    }

                                                                                                    //Pengajuan D3
                                                                                                    $d31 = $this->input->post('D31');
                                                                                                    $d32 = $this->input->post('D32');
                                                                                                    $d33 = $this->input->post('D33');
                                                                                                    $d34 = $this->input->post('D34');
                                                                                                    $d35 = $this->input->post('D35');
                                                                                                    if ($d31 != NULL) {
                                                                                                    for ($i = 0; $i < count($d31); $i++) { if ($d31[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_d3';
                                                                                                        $this->berkas->d3($id_pengajuan, $d31[$i], $d32[$i], $d33[$i], $d34[$i], $filename);
                                                                                                        }
                                                                                                        $filenames[] = $filename;
                                                                                                        if ($d33[$i] == '1 Smt/lebih' && $d34[$i] == 'Internasional') {
                                                                                                        $ak = 4;
                                                                                                        } elseif ($d33[$i] == '1 Smt/lebih' && $d34[$i] == 'Nasional') {
                                                                                                        $ak = 3;
                                                                                                        } elseif ($d33[$i] == '1 Smt/lebih' && $d34[$i] == 'Lokal') {
                                                                                                        $ak = 2;
                                                                                                        } elseif ($d33[$i] == '< 1 Smt' && $d34[$i]=='Internasional' ) { $ak=3; } elseif ($d33[$i]=='< 1 Smt' && $d34[$i]=='Nasional' ) { $ak=2; } elseif ($d33[$i]=='< 1 Smt' && $d34[$i]=='Lokal' ) { $ak=1; } elseif ($d33[$i]=='< 1 Smt' && $d34[$i]=='Insidental' ) { $ak=1; } $this->berkas->constraint('d3' . $i, $id_pengajuan, $ak);
                                                                                                            unset($ak);
                                                                                                            }
                                                                                                            $this->berkas->upload_files($filenames, $_FILES['D35']);
                                                                                                            unset($filenames);
                                                                                                            }

                                                                                                            //Pengajuan D4
                                                                                                            $d41 = $this->input->post('D41');
                                                                                                            $d42 = $this->input->post('D42');
                                                                                                            $d43 = $this->input->post('D43');
                                                                                                            if ($d41 != NULL) {
                                                                                                            for ($i = 0; $i < count($d41); $i++) { if ($d41[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_d4';
                                                                                                                $this->berkas->d4($id_pengajuan, $d41[$i], $d42[$i], $filename);
                                                                                                                }
                                                                                                                $filenames[] = $filename;
                                                                                                                if ($d41[$i] == 'Berdasarkan Bidang Keahlian') {
                                                                                                                $ak = 1.5;
                                                                                                                } elseif ($d41[$i] == 'Berdasarkan Penugasan PT') {
                                                                                                                $ak = 1;
                                                                                                                } elseif ($d41[$i] == 'Berdasarkan fungsi/jabatan') {
                                                                                                                $ak = 0.5;
                                                                                                                }
                                                                                                                $this->berkas->constraint('d4' . $i, $id_pengajuan, $ak);
                                                                                                                unset($ak);
                                                                                                                }
                                                                                                                $this->berkas->upload_files($filenames, $_FILES['D43']);
                                                                                                                unset($filenames);
                                                                                                                }

                                                                                                                //Pengajuan D5
                                                                                                                $d51 = $this->input->post('D51');
                                                                                                                $d52 = $this->input->post('D52');
                                                                                                                $d53 = $this->input->post('D53');
                                                                                                                if ($d51 != NULL) {
                                                                                                                for ($i = 0; $i < count($d51); $i++) { if ($d51[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_d5';
                                                                                                                    $this->berkas->d5($id_pengajuan, $d51[$i], $d52[$i], $filename);
                                                                                                                    }
                                                                                                                    $filenames[] = $filename;
                                                                                                                    $this->berkas->constraint('d5' . $i, $id_pengajuan, 3);
                                                                                                                    }
                                                                                                                    $this->berkas->upload_files($filenames, $_FILES['D53']);
                                                                                                                    unset($filenames);
                                                                                                                    }

                                                                                                                    //Pengajuan D6
                                                                                                                    $d61 = $this->input->post('D61');
                                                                                                                    $d62 = $this->input->post('D62');
                                                                                                                    $d63 = $this->input->post('D63');
                                                                                                                    if ($d61 != NULL) {
                                                                                                                    for ($i = 0; $i < count($d61); $i++) { if ($d61[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_d6';
                                                                                                                        $this->berkas->d6($id_pengajuan, $d61[$i], $d62[$i], $filename);
                                                                                                                        }
                                                                                                                        $filenames[] = $filename;
                                                                                                                        $this->berkas->constraint('d6' . $i, $id_pengajuan, 5);
                                                                                                                        }
                                                                                                                        $this->berkas->upload_files($filenames, $_FILES['D63']);
                                                                                                                        unset($filenames);
                                                                                                                        }

                                                                                                                        //Pengajuan D7
                                                                                                                        $d71 = $this->input->post('D71');
                                                                                                                        $d72 = $this->input->post('D72');
                                                                                                                        $d73 = $this->input->post('D73');
                                                                                                                        $d74 = $this->input->post('D74');
                                                                                                                        $d75 = $this->input->post('D75');
                                                                                                                        if ($d71 != NULL) {
                                                                                                                        for ($i = 0; $i < count($d71); $i++) { if ($d71[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_d7';
                                                                                                                            $this->berkas->d7($id_pengajuan, $d71[$i], $d72[$i], $d73[$i], $d74[$i], $filename);
                                                                                                                            }
                                                                                                                            $filenames[] = $filename;
                                                                                                                            if ($d72[$i] == 'Internasional') {
                                                                                                                            $ak = 1.5;
                                                                                                                            } elseif ($d72[$i] == 'Nasional') {
                                                                                                                            $ak = 1;
                                                                                                                            }
                                                                                                                            $this->berkas->constraint('d7' . $i, $id_pengajuan, $ak);
                                                                                                                            unset($ak);
                                                                                                                            }
                                                                                                                            $this->berkas->upload_files($filenames, $_FILES['D75']);
                                                                                                                            unset($filenames);
                                                                                                                            }
                                                                                                                            redirect('/dosen/penunjang/' . $id_pengajuan);
                                                                                                                            }








                                                                                                                            // Form Unsur Penunjang
                                                                                                                            public function penunjang()
                                                                                                                            {
                                                                                                                            $datauser = $this->m_auth->data_user($this->session->userdata('nip'));
                                                                                                                            $data['array'] = $datauser[0];

                                                                                                                            $id_pengajuan = $this->uri->segment(3);
                                                                                                                            $data_pengajuan = $this->m_pengajuan->data_pengajuan_sekarang($id_pengajuan);
                                                                                                                            $data['data_pengajuan'] = $data_pengajuan[0];
                                                                                                                            $jabatan_to = $data_pengajuan[0]['jabatan_fungsi_to'];

                                                                                                                            $constraint = $this->db->query("SELECT * FROM tbl_constraint_persen WHERE jab_fungsional='$jabatan_to'")->result_array();
                                                                                                                            $data['constraint'] = $constraint[0];



                                                                                                                            $data['nama'] = $datauser[0]['nama_lengkap'];
                                                                                                                            $data['foto'] = $datauser[0]['foto'];
                                                                                                                            $data['title'] = 'Pengajuan Angka Kredit';
                                                                                                                            $data['id_pengajuan'] = $this->uri->segment(3);
                                                                                                                            $this->load->view('templates/auth_header', $data);
                                                                                                                            $this->load->view('dosen/penunjang');
                                                                                                                            $this->load->view('templates/tabel_penunjang');
                                                                                                                            $this->load->view('templates/auth_footer_2');
                                                                                                                            }
                                                                                                                            public function action_penunjang()
                                                                                                                            {
                                                                                                                            $id_pengajuan = $this->input->post('id_pengajuan');
                                                                                                                            $filenames = array();
                                                                                                                            $ak = 0;



                                                                                                                            //Pengajuan E1
                                                                                                                            $e11 = $this->input->post('E11');
                                                                                                                            $e12 = $this->input->post('E12');
                                                                                                                            $e13 = $this->input->post('E13');
                                                                                                                            $e14 = $this->input->post('E14');
                                                                                                                            if ($e11 != NULL) {
                                                                                                                            for ($i = 0; $i < count($e11); $i++) { if ($e11[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e1';
                                                                                                                                $this->berkas->e1($id_pengajuan, $e11[$i], $e12[$i], $e13[$i], $filename);
                                                                                                                                }
                                                                                                                                $filenames[] = $filename;
                                                                                                                                if ($e12[$i] == 'Ketua/Wakil Ketua') {
                                                                                                                                $ak = 3;
                                                                                                                                } elseif ($e12[$i] == 'Anggota') {
                                                                                                                                $ak = 2;
                                                                                                                                }
                                                                                                                                $this->berkas->constraint('e1' . $i, $id_pengajuan, $ak);
                                                                                                                                unset($ak);
                                                                                                                                }
                                                                                                                                $this->berkas->upload_files($filenames, $_FILES['E14']);
                                                                                                                                unset($filenames);
                                                                                                                                }

                                                                                                                                //Pengajuan E2
                                                                                                                                $e21 = $this->input->post('E21');
                                                                                                                                $e22 = $this->input->post('E22');
                                                                                                                                $e23 = $this->input->post('E23');
                                                                                                                                $e24 = $this->input->post('E24');
                                                                                                                                $e25 = $this->input->post('E25');
                                                                                                                                $e26 = $this->input->post('E26');
                                                                                                                                if ($e21 != NULL) {
                                                                                                                                for ($i = 0; $i < count($e21); $i++) { if ($e21[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e2';
                                                                                                                                    $this->berkas->e2($id_pengajuan, $e21[$i], $e22[$i], $e23[$i], $e24[$i], $e25[$i], $filename);
                                                                                                                                    }
                                                                                                                                    $filenames[] = $filename;
                                                                                                                                    if ($e23[$i] == 'Panitia Pusat' && $e24[$i] == 'Ketua/Wakil Ketua') {
                                                                                                                                    $ak = 3;
                                                                                                                                    } elseif ($e23[$i] == 'Panitia Pusat' && $e24[$i] == 'Anggota') {
                                                                                                                                    $ak = 2;
                                                                                                                                    } elseif ($e23[$i] == 'Panitia Daerah' && $e24[$i] == 'Ketua/Wakil Ketua') {
                                                                                                                                    $ak = 2;
                                                                                                                                    } elseif ($e23[$i] == 'Panitia Daerah' && $e24[$i] == 'Anggota') {
                                                                                                                                    $ak = 1;
                                                                                                                                    }
                                                                                                                                    $this->berkas->constraint('e2' . $i, $id_pengajuan, $ak);
                                                                                                                                    unset($ak);
                                                                                                                                    }
                                                                                                                                    $this->berkas->upload_files($filenames, $_FILES['E26']);
                                                                                                                                    unset($filenames);
                                                                                                                                    }

                                                                                                                                    //Pengajuan E3
                                                                                                                                    $e31 = $this->input->post('E31');
                                                                                                                                    $e32 = $this->input->post('E32');
                                                                                                                                    $e33 = $this->input->post('E33');
                                                                                                                                    $e34 = $this->input->post('E34');
                                                                                                                                    $e35 = $this->input->post('E35');
                                                                                                                                    if ($e31 != NULL) {
                                                                                                                                    for ($i = 0; $i < count($e31); $i++) { if ($e31[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e3';
                                                                                                                                        $this->berkas->e3($id_pengajuan, $e31[$i], $e32[$i], $e33[$i], $e34[$i], $filename);
                                                                                                                                        }
                                                                                                                                        $filenames[] = $filename;
                                                                                                                                        if ($e32[$i] == 'Internasional' && $e33[$i] == 'Pengurus') {
                                                                                                                                        $ak = 2;
                                                                                                                                        } elseif ($e32[$i] == 'Internasional' && $e33[$i] == 'Anggota, atas permintaan') {
                                                                                                                                        $ak = 1;
                                                                                                                                        } elseif ($e32[$i] == 'Internasional' && $e33[$i] == 'Anggota') {
                                                                                                                                        $ak = 0.5;
                                                                                                                                        } elseif ($e32[$i] == 'Nasional' && $e33[$i] == 'Pengurus') {
                                                                                                                                        $ak = 1.5;
                                                                                                                                        } elseif ($e32[$i] == 'Nasional' && $e33[$i] == 'Anggota, atas permintaan') {
                                                                                                                                        $ak = 1;
                                                                                                                                        } elseif ($e32[$i] == 'Nasional' && $e33[$i] == 'Anggota') {
                                                                                                                                        $ak = 0.5;
                                                                                                                                        }
                                                                                                                                        $this->berkas->constraint('e3' . $i, $id_pengajuan, $ak);
                                                                                                                                        unset($ak);
                                                                                                                                        }
                                                                                                                                        $this->berkas->upload_files($filenames, $_FILES['E35']);
                                                                                                                                        unset($filenames);
                                                                                                                                        }

                                                                                                                                        //Pengajuan E4
                                                                                                                                        $e41 = $this->input->post('E41');
                                                                                                                                        $e42 = $this->input->post('E42');
                                                                                                                                        $e43 = $this->input->post('E43');
                                                                                                                                        $e44 = $this->input->post('E44');
                                                                                                                                        if ($e41 != NULL) {
                                                                                                                                        for ($i = 0; $i < count($e41); $i++) { if ($e41[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e4';
                                                                                                                                            $this->berkas->e4($id_pengajuan, $e41[$i], $e42[$i], $e43[$i], $filename);
                                                                                                                                            }
                                                                                                                                            $filenames[] = $filename;
                                                                                                                                            $this->berkas->constraint('e4' . $i, $id_pengajuan, 1);
                                                                                                                                            }
                                                                                                                                            $this->berkas->upload_files($filenames, $_FILES['E44']);
                                                                                                                                            unset($filenames);
                                                                                                                                            }

                                                                                                                                            //Pengajuan E5
                                                                                                                                            $e51 = $this->input->post('E51');
                                                                                                                                            $e52 = $this->input->post('E52');
                                                                                                                                            $e53 = $this->input->post('E53');
                                                                                                                                            $e54 = $this->input->post('E54');
                                                                                                                                            if ($e51 != NULL) {
                                                                                                                                            for ($i = 0; $i < count($e51); $i++) { if ($e51[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e5';
                                                                                                                                                $this->berkas->e5($id_pengajuan, $e51[$i], $e52[$i], $e53[$i], $filename);
                                                                                                                                                }
                                                                                                                                                $filenames[] = $filename;
                                                                                                                                                if ($e52[$i] == 'Ketua Delegasi') {
                                                                                                                                                $ak = 3;
                                                                                                                                                } elseif ($e52[$i] == 'Anggota') {
                                                                                                                                                $ak = 2;
                                                                                                                                                }
                                                                                                                                                $this->berkas->constraint('e5' . $i, $id_pengajuan, $ak);
                                                                                                                                                unset($ak);
                                                                                                                                                }
                                                                                                                                                $this->berkas->upload_files($filenames, $_FILES['E54']);
                                                                                                                                                unset($filenames);
                                                                                                                                                }

                                                                                                                                                //Pengajuan E6
                                                                                                                                                $e61 = $this->input->post('E61');
                                                                                                                                                $e62 = $this->input->post('E62');
                                                                                                                                                $e63 = $this->input->post('E63');
                                                                                                                                                $e64 = $this->input->post('E64');
                                                                                                                                                $e65 = $this->input->post('E65');
                                                                                                                                                if ($e61 != NULL) {
                                                                                                                                                for ($i = 0; $i < count($e61); $i++) { if ($e61[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e6';
                                                                                                                                                    $this->berkas->e6($id_pengajuan, $e61[$i], $e62[$i], $e63[$i], $e64[$i], $filename);
                                                                                                                                                    }
                                                                                                                                                    $filenames[] = $filename;
                                                                                                                                                    if ($e62[$i] == 'Internasional/Nasional/Regional' && $e63[$i] == 'Ketua') {
                                                                                                                                                    $ak = 3;
                                                                                                                                                    } elseif ($e62[$i] == 'Internasional/Nasional/Regional' && $e63[$i] == 'Anggota/Peserta') {
                                                                                                                                                    $ak = 2;
                                                                                                                                                    } elseif ($e62[$i] == 'Lingkungan Perguruan Tinggi' && $e63[$i] == 'Ketua') {
                                                                                                                                                    $ak = 2;
                                                                                                                                                    } elseif ($e62[$i] == 'Lingkungan Perguruan Tinggi' && $e63[$i] == 'Anggota/Peserta') {
                                                                                                                                                    $ak = 1;
                                                                                                                                                    }
                                                                                                                                                    $this->berkas->constraint('e6' . $i, $id_pengajuan, $ak);
                                                                                                                                                    unset($ak);
                                                                                                                                                    }
                                                                                                                                                    $this->berkas->upload_files($filenames, $_FILES['E65']);
                                                                                                                                                    unset($filenames);
                                                                                                                                                    }

                                                                                                                                                    //Pengajuan E7
                                                                                                                                                    $e71 = $this->input->post('E71');
                                                                                                                                                    $e72 = $this->input->post('E72');
                                                                                                                                                    $e73 = $this->input->post('E73');
                                                                                                                                                    if ($e71 != NULL) {
                                                                                                                                                    for ($i = 0; $i < count($e71); $i++) { if ($e71[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e7';
                                                                                                                                                        $this->berkas->e7($id_pengajuan, $e71[$i], $e72[$i], $filename);
                                                                                                                                                        }
                                                                                                                                                        $filenames[] = $filename;
                                                                                                                                                        if ($e71[$i] == 'Penghargaan/Tanda Jasa Satya Lencana 30 Tahun') {
                                                                                                                                                        $ak = 3;
                                                                                                                                                        } elseif ($e71[$i] == 'Penghargaan/Tanda Jasa Satya Lencana 20 Tahun') {
                                                                                                                                                        $ak = 2;
                                                                                                                                                        } elseif ($e71[$i] == 'Penghargaan/Tanda Jasa Satya Lencana 10 Tahun') {
                                                                                                                                                        $ak = 1;
                                                                                                                                                        } elseif ($e71[$i] == 'Tingkat Internasional') {
                                                                                                                                                        $ak = 5;
                                                                                                                                                        } elseif ($e71[$i] == 'Tingkat Nasional') {
                                                                                                                                                        $ak = 3;
                                                                                                                                                        } elseif ($e71[$i] == 'Tingkat Daerah/Lokal') {
                                                                                                                                                        $ak = 1;
                                                                                                                                                        }
                                                                                                                                                        $this->berkas->constraint('e7' . $i, $id_pengajuan, $ak);
                                                                                                                                                        unset($ak);
                                                                                                                                                        }
                                                                                                                                                        $this->berkas->upload_files($filenames, $_FILES['E73']);
                                                                                                                                                        unset($filenames);
                                                                                                                                                        }

                                                                                                                                                        //Pengajuan E8
                                                                                                                                                        $e81 = $this->input->post('E81');
                                                                                                                                                        $e82 = $this->input->post('E82');
                                                                                                                                                        $e83 = $this->input->post('E83');
                                                                                                                                                        $e84 = $this->input->post('E84');
                                                                                                                                                        if ($e81 != NULL) {
                                                                                                                                                        for ($i = 0; $i < count($e81); $i++) { if ($e81[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e8';
                                                                                                                                                            $this->berkas->e8($id_pengajuan, $e81[$i], $e82[$i], $e83[$i], $filename);
                                                                                                                                                            }
                                                                                                                                                            $filenames[] = $filename;
                                                                                                                                                            $this->berkas->constraint('e8' . $i, $id_pengajuan, 5);
                                                                                                                                                            }
                                                                                                                                                            $this->berkas->upload_files($filenames, $_FILES['E84']);
                                                                                                                                                            unset($filenames);
                                                                                                                                                            }

                                                                                                                                                            //Pengajuan E9
                                                                                                                                                            $e91 = $this->input->post('E91');
                                                                                                                                                            $e92 = $this->input->post('E92');
                                                                                                                                                            $e93 = $this->input->post('E93');
                                                                                                                                                            $e94 = $this->input->post('E94');
                                                                                                                                                            if ($e91 != NULL) {
                                                                                                                                                            for ($i = 0; $i < count($e91); $i++) { if ($e91[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e9';
                                                                                                                                                                $this->berkas->e9($id_pengajuan, $e91[$i], $e92[$i], $e93[$i], $filename);
                                                                                                                                                                }
                                                                                                                                                                $filenames[] = $filename;
                                                                                                                                                                if ($e93[$i] == 'Internasional') {
                                                                                                                                                                $ak = 5;
                                                                                                                                                                } elseif ($e93[$i] == 'Nasional') {
                                                                                                                                                                $ak = 3;
                                                                                                                                                                } elseif ($e93[$i] == 'Daerah/Lokal') {
                                                                                                                                                                $ak = 1;
                                                                                                                                                                }
                                                                                                                                                                $this->berkas->constraint('e9' . $i, $id_pengajuan, $ak);
                                                                                                                                                                unset($ak);
                                                                                                                                                                }
                                                                                                                                                                $this->berkas->upload_files($filenames, $_FILES['E94']);
                                                                                                                                                                unset($filenames);
                                                                                                                                                                }

                                                                                                                                                                //Pengajuan E10
                                                                                                                                                                $e101 = $this->input->post('E101');
                                                                                                                                                                $e102 = $this->input->post('E102');
                                                                                                                                                                $e103 = $this->input->post('E103');
                                                                                                                                                                $e104 = $this->input->post('E104');
                                                                                                                                                                if ($e101 != NULL) {
                                                                                                                                                                for ($i = 0; $i < count($e101); $i++) { if ($e101[$i] !="" ) { $filename=$this->session->userdata('nip') . '_' . $id_pengajuan . '_' . $i . '_e10';
                                                                                                                                                                    $this->berkas->e10($id_pengajuan, $e101[$i], $e102[$i], $e103[$i], $filename);
                                                                                                                                                                    }
                                                                                                                                                                    $filenames[] = $filename;
                                                                                                                                                                    $this->berkas->constraint('e10' . $i, $id_pengajuan, 0.5);
                                                                                                                                                                    }
                                                                                                                                                                    $this->berkas->upload_files($filenames, $_FILES['E104']);
                                                                                                                                                                    unset($filenames);
                                                                                                                                                                    }
                                                                                                                                                                    redirect('/dosen/resume_pengajuan/' . $id_pengajuan);
                                                                                                                                                                    }