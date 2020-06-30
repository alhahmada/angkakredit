<!-- Begin Page Content -->


<div class="container-fluid">
    <style>
        /* Style the tab */

        /* Style the buttons inside the tab */
        .tab {
            background-color: #494e57;
            color: white;
            float: left;
            border: none;
            border-right: 1px solid black;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 12px;
            width: 20%;
            height: 3.5rem;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            font-family: Cambria;
        }

        .nolep {
            border-right: none !important;
        }

        /* Change background color of buttons on hover */
        .tab:hover {
            background-color: #3c3e42;
        }

        /* Create an active/current tablink class */
        .tab.active {
            background-color: #282b3b;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: none;
            height: 100%;
        }
    </style>

    <div class="container" style="height: 95%;">

        <button class="tab " onclick="openinfoTab(event, 'resume')">Resume Pengajuan</button>
        <button class="tab " onclick="openinfoTab(event, 'pendidikan')">Unsur Pendidikan</button>
        <button class="tab " onclick="openinfoTab(event, 'penelitian')">Unsur Penelitian</button>
        <button class="tab " onclick="openinfoTab(event, 'pengmas')">Unsur Peng. Masy.</button>
        <button class="tab nolep " onclick="openinfoTab(event, 'penunjang')">Unsur Penunjang</button>

        <style>
            .head-content {
                font-size: 25px;
                color: black;
                font-weight: bold;
                font-family: Cambria;
                text-transform: uppercase;
                letter-spacing: 0.05rem;
            }

            .body-content {
                font-size: 18px;
                color: black;
                font-family: 'Times New Roman';
            }

            .text-sorry {
                font-size: 20px !important;
                color: red !important;
            }
        </style>

        <!-- Tab Resume-->
        <div id="resume" class="tabcontent pt-5">
            <!-- Judul Halaman -->
            <div class="container">
                <!-- Row Pertama -->
                <div class="justify-content-between pb-2 pt-5">
                    <h1 class="head-content">Jenis dan Log Pengajuan</h1>
                </div>
            </div>


            <!-- Jenis Pengajuan -->
            <style>
                .table-log {
                    width: 100%;
                    text-align: left;
                    font-size: 20px;
                    color: black;
                    font-family: Cambria;
                    font-weight: bold;
                    position: relative;
                    margin-bottom: 2rem;
                }

                .table-log tbody td:first-child {
                    width: 40%;
                }

                .table-log1 {
                    width: 80%;
                    text-align: center;
                    font-size: 17px;
                    color: #4e73df;
                    font-family: Cambria;
                    font-weight: bold;

                }

                .table-log1 tbody tr td {
                    height: 2.5rem;
                    border-left: 1px solid black;
                }

                .table-log1 tbody td:first-child {
                    width: 50%;
                    /* color: #42444e; */
                    color: black;
                    border-left: none !important;
                }
            </style>
            <div class="container-fluid pt-5 pb-2">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="pt-2 pb-1 col-xl-7" style="margin-left: 3rem;">
                            <table class="table-log">
                                <tbody>
                                    <tr>
                                        <td>Nama Dosen</td>
                                        <td>: <?= $nama_pengaju[0]['nama_lengkap']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ID Pengajuan</td>
                                        <td>: <?= $id_pengajuan; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pengajuan</tdtyle=>
                                        <td>: <?= $tgl_pengajuan['tgl_pengajuan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Diajukan Ke</td>
                                        <td>: </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <table class="table-log1" align="center">
                            <tbody>
                                <tr>
                                    <td>Jabatan Fungsional</td>
                                    <td><?= $data_pengajuan_id['jabatan_fungsi_to']; ?></td>
                                </tr>
                                <tr>
                                    <td>Pangkat / Golongan Ruang</td>
                                    <td><?= $data_pengajuan_id['pangkat_to']; ?> / <?= $data_pengajuan_id['gol_to']; ?></td>
                                </tr>
                                <tr style="border-bottom: none !important;">
                                    <td>Angka Kredit Yang Diterima</td>
                                    <td><?= $data_pengajuan_id['ak_diterima']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php if ($data_pengajuan_id['progress_pengajuan'] == '7' || $data_pengajuan_id['progress_pengajuan'] == '8') { ?>
                            <div class="pt-5 pb-4 justify-content-center text-center">
                                <a href="<?= base_url('dosen/pengajuan_unsur/' . $id_pengajuan); ?>" class="btn btn-primary text-center btn-user btn=block" style="width: 300px; font-weight: bold;">
                                    Edit Pengajuan
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Konten Pengajuan #ID Pengajuan -->
            <div class="container-fluid pt-2 pb-2">
                <div class="card shadow" style="width: 100%;">
                    <div class="card-body">
                        <style>
                            table.tbl-log-pengajuan {
                                margin-top: 2rem;
                                margin-bottom: 2rem;
                                color: black;
                                border-collapse: collapse;
                            }

                            table.tbl-log-pengajuan thead th {
                                font-size: 20px;
                                font-weight: bold;
                                font-family: Cambria;
                                text-align: center;
                                color: #4e73df;
                                border-bottom: 2px solid #cec7c7;
                            }

                            table.tbl-log-pengajuan tbody tr:nth-child(even) {
                                background-color: #e7dfdf;
                            }

                            table.tbl-log-pengajuan tbody td {
                                font-size: 14px;
                                font-weight: bold;
                                font-family: Cambria;
                                text-align: center;
                                border-bottom: 1px solid #cec7c7;
                            }

                            table.tbl-log-pengajuan tbody tr:last-child {
                                border-bottom: none;
                            }

                            table.tbl-log-pengajuan tbody tr {
                                height: 2.5rem;
                            }

                            table.tbl-log-pengajuan tbody td:nth-child(2) {
                                text-align: left;
                                padding-left: 20px;
                            }

                            table.tbl-log-pengajuan tbody td:nth-child(5) {
                                text-align: left;
                                padding-left: 10px;
                            }
                        </style>
                        <table class="tbl-log-pengajuan" style="width: 100%;">
                            <thead>
                                <tr style="height: 3.5rem;">
                                    <th style="width: 5%;">No.</th>
                                    <th style="width: 25%;">Jenis Progress</th>
                                    <th style="width: 15%;">Status</th>
                                    <th style="width: 20%;">Tanggal Penetapan</th>
                                    <th style="width: 35%;">Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Verifikasi Berkas</td>
                                    <td><?= $status_berkas; ?></td>
                                    <td><?= $verif_berkas['updated_at']; ?></td>
                                    <td><?= $verif_berkas['keterangan']; ?></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Verifikasi Unsur Pendidikan</td>
                                    <td><?= $status_pendidikan; ?></td>
                                    <td><?= $verif_pendidikan['updated_at']; ?></td>
                                    <td><?= $verif_pendidikan['keterangan']; ?></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Verifikasi Unsur Penelitian</td>
                                    <td><?= $status_penelitian; ?></td>
                                    <td><?= $verif_penelitian['updated_at']; ?></td>
                                    <td><?= $verif_penelitian['keterangan']; ?></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Verifikasi Unsur Pengabd. Masy.</td>
                                    <td><?= $status_pengmas; ?></td>
                                    <td><?= $verif_pengmas['updated_at']; ?></td>
                                    <td><?= $verif_pengmas['keterangan']; ?></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Verifikasi Unsur Penunjang</td>
                                    <td><?= $status_penunjang; ?></td>
                                    <td><?= $verif_penunjang['updated_at']; ?></td>
                                    <td><?= $verif_penunjang['keterangan']; ?></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Penilaian Pertama</td>
                                    <td><?= $status_penilaian_1; ?></td>
                                    <td><?= $penilaian_1[0]['updated_at']; ?></td>
                                    <td><?= $penilaian_1[0]['keterangan']; ?></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Penilaian Kedua</td>
                                    <td><?= $status_penilaian_2; ?></td>
                                    <td><?= $penilaian_2[0]['updated_at']; ?></td>
                                    <td><?= $penilaian_2[0]['keterangan']; ?></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Penilaian Ketiga</td>
                                    <td><?= $status_penilaian_3; ?></td>
                                    <td><?= $penilaian_3[0]['updated_at']; ?></td>
                                    <td><?= $penilaian_3[0]['keterangan']; ?></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Penetapan Angka Kredit</td>
                                    <td><?= $status_penetapanAK; ?></td>
                                    <td><?= $penetapanAK[0]['updated_at']; ?></td>
                                    <td><?= $penetapanAK[0]['keterangan']; ?></td>
                                </tr>

                            </tbody>

                        </table>



                    </div>
                </div>
            </div>

            <!-- Resume Pengajuan -->
            <div class="container">
                <!-- Row Pertama -->
                <div class="justify-content-between pb-2 pt-5">
                    <h1 class="head-content">Resume Pengajuan</h1>
                </div>
            </div>

            <!-- Tabel Resume Total -->
            <div class="container-fluid pb-5">
                <table class="greyGridTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Unsur Pengajuan</th>
                            <th>Persentase</th>
                            <th>Total Angka Kredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td class="text-left">Pendidikan dan Pelaksanaan Pendidikan</td>
                            <td><?= $persentase_pendidikan; ?>%</td>
                            <td><?= $total_pendidikan; ?></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td class="text-left">Penelitian</td>
                            <td><?= $persentase_penelitian; ?>%</td>
                            <td><?= $total_penelitian;  ?></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td class="text-left">Pengabdian Masyarakat</td>
                            <td><?= $persentase_pengmas; ?>%</td>
                            <td><?= $total_pengmas; ?></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td class="text-left">Unsur Penunjang</td>
                            <td><?= $persentase_penunjang; ?>%</td>
                            <td><?= $total_penunjang; ?></td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                            <th><?= $total_AK; ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>


        </div>

        <!-- Tab Pengajuan Pendidikan -->
        <div id="pendidikan" class="tabcontent pt-5">
            <!-- Judul Halaman -->
            <div class="container">
                <!-- Row Pertama -->
                <div class="justify-content-between pb-2 pt-5">
                    <h1 class="head-content">Pengajuan Unsur Pendidikan</h1>
                </div>
            </div>

            <!-- Unsur Pendidikan -->
            <div class="container-fluid p-5">
                <style>
                    .head-bab {
                        font-size: 24px;
                        color: #4e73df;
                        font-weight: bold;
                        font-family: Cambria;
                    }

                    .head-subbab {
                        font-size: 18px;
                        color: black;
                        font-family: 'Times New Roman';
                    }
                </style>
                <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="head-bab">A. Pendidikan</h5>
                </div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        1. Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah (1/periode Penilaian)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable A1">
                        <thead>
                            <tr>
                                <th>Tingkatan Pendidikan</th>
                                <th>Universitas/Institusi</th>
                                <th>Tahun Masuk</th>
                                <th>Tahun Keluar</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($a1 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['a11']; ?></td>
                                    <td><?= $value['a12']; ?></td>
                                    <td><?= $value['a13']; ?></td>
                                    <td><?= $value['a14']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['a15'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        2. Mengikuti diklat prajabatan golongan III (1/periode Penilaian)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable A2">
                        <thead>
                            <tr>
                                <th>Nama Diklat</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($a2 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['a21']; ?></td>
                                    <td><?= $value['a22']; ?></td>
                                    <td><?= $value['a23']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['a24'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>




                <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="head-bab">B. Pelaksanaan Pendidikan</h5>
                </div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        1. Melaksanakan perkuliahan/tutorial/perkuliahan praktikum dan membimbing,menguji serta menyelenggarakan pendidikan di laboratorium, praktik keguruan, bengkel/studio/kebun percobaan/teknologi pengajaran dan praktik lapangan (Maks 12 SKS/semester)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B1">
                        <thead>
                            <tr>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b1 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b11']; ?></td>
                                    <td><?= $value['b12']; ?></td>
                                    <td><?= $value['b13']; ?></td>
                                    <td><?= $value['b14']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b15'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        2. Membimbing Seminar Mahasiswa (Setiap Semester)</h5>
                </div>
                <div class="pb-5 pt-3">

                    <table class="greyGridTable B2">
                        <thead>
                            <tr>
                                <th>Tahun Akademik</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b2 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b21']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b22'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        3. Membimbing Paktik Kerja Lapangan (Setiap Semester)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B3">
                        <thead>
                            <tr>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b3 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b31']; ?></td>
                                    <td><?= $value['b32']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b33'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        4. Membimbing dan ikut membimbing dalam menghasilkan disertasi, tesis, skripsi dan laporan akhir studi yang sesuai dengan bidang penugasannya (Setiap Semester)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B4">
                        <thead>
                            <tr>
                                <th>Jenis(Option)</th>
                                <th>Tugas/Peran (Option)</th>
                                <th>Tahun Akademik</th>
                                <th>Jumlah Mahasiswa (Option)</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b4 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b41']; ?></td>
                                    <td><?= $value['b42']; ?></td>
                                    <td><?= $value['b43']; ?></td>
                                    <td><?= $value['b44']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b45'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        5. Bertugas sebagai penguji pada ujian akhir/Profesi (Setiap Semester)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B5">
                        <thead>
                            <tr>
                                <th>Jabatan Dalam Sidang (Option)</th>
                                <th>Tahun Akademik</th>
                                <th>Jumlah Mahasiswa</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b5 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b51']; ?></td>
                                    <td><?= $value['b52']; ?></td>
                                    <td><?= $value['b53']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b54'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        6. Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintifik (2 Kegiatan/semester)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B6">
                        <thead>
                            <tr>
                                <th>Jenis (Isian)</th>
                                <th>Tahun Akademik</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b6 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b61']; ?></td>
                                    <td><?= $value['b62']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b63'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        7. Mengambangkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi(Maks 1 Mata Kuliah/Semester)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B7">
                        <thead>
                            <tr>
                                <th>Jenis (Isian)</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Mata Kuliah</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b7 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b71']; ?></td>
                                    <td><?= $value['b72']; ?></td>
                                    <td><?= $value['b73']; ?></td>
                                    <td><?= $value['b74']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b75'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        8. Mengembangkan bahan pengajaran/bahan kuliah yang mempunyai nilai kebaharuan(Maks 1 Buku/Tahun dan 2 Produk/Semester)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B8">
                        <thead>
                            <tr>
                                <th>Jenis (Option)</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Mata Kuliah</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b8 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b81']; ?></td>
                                    <td><?= $value['b82']; ?></td>
                                    <td><?= $value['b83']; ?></td>
                                    <td><?= $value['b84']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b85'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        9. Menyampaikan orasi ilmiah di tingkat perguruan tinggi (Maks 2 Orasi/Semester</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B9">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b9 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b91']; ?></td>
                                    <td><?= $value['b92']; ?></td>
                                    <td><?= $value['b93']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b94'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        10. Menduduki jabatan pimpinan perguruan tinggi sesuai tugas pokok, fungsi, kewenangan dan/atau setara (Setiap Semester)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B10">
                        <thead>
                            <tr>
                                <th>Jabatan yang diduduki (Option)</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b10 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b101']; ?></td>
                                    <td><?= $value['b102']; ?></td>
                                    <td><?= $value['b103']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b104'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        11. Membimbing dosen yang mempunyai jabatan akademik lebih rendah setiap semester bagi Lektor Kepala atau Profesor (Maks 1 orang)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B11">
                        <thead>
                            <tr>
                                <th>Jenis (Option)</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b11 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b111']; ?></td>
                                    <td><?= $value['b112']; ?></td>
                                    <td><?= $value['b113']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b114'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        12. Melaksanakan kegiatan datasering dan pencangkokan diluar institusi tempat bekerja bagi Lektor Kepala atau Profesor (Maks 1 orang)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B12">
                        <thead>
                            <tr>
                                <th>Jenis (Option)</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b12 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b121']; ?></td>
                                    <td><?= $value['b122']; ?></td>
                                    <td><?= $value['b123']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b124'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        13. Melaksanakan pengembangan diri untuk meningkatkan kompetensi</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable B13">
                        <thead>
                            <tr>
                                <th>Lama Program Pengembangan yang diikuti</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($b13 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['b131']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b132'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

        <!-- Tab Pengajuan Penelitian -->
        <div id="penelitian" class="tabcontent pt-5">
            <!-- Judul Halaman -->
            <div class="container">
                <!-- Row Pertama -->
                <div class="justify-content-between pb-2 pt-5">
                    <h1 class="head-content">Pengajuan Unsur Penelitian</h1>
                </div>
            </div>
            <!-- Unsur Penelitian -->
            <div class="container-fluid p-5">
                <style>
                    .head-bab {
                        font-size: 24px;
                        color: #4e73df;
                        font-weight: bold;
                        font-family: Cambria;
                    }

                    .head-subbab {
                        font-size: 18px;
                        color: black;
                        font-family: 'Times New Roman';
                    }
                </style>

                <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="head-bab">C. Penelitian</h5>
                </div>
                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        1. Menghasilkan karya ilmiah sesuai dengan bidang ilmunya</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable C1">
                        <thead>
                            <tr>
                                <th>Jenis Karya*</th>
                                <th>Judul Karya</th>
                                <th>Jenjang/Tingkat/Bentuk*</th>
                                <th>Tahun</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($c1 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['c11']; ?></td>
                                    <td><?= $value['c12']; ?></td>
                                    <td><?= $value['c13']; ?></td>
                                    <td><?= $value['c14']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c15'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>


                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        2. Hasil penelitian atau hasil pemikiran yang didiseminasikan</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C2">
                        <thead>
                            <tr>
                                <th>Jenis Publikasi</th>
                                <th>Judul Penelitian</th>
                                <th>Tingkat/Jenjang</th>
                                <th>Tahun Didiseminasikan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($c2 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['c21']; ?></td>
                                    <td><?= $value['c22']; ?></td>
                                    <td><?= $value['c23']; ?></td>
                                    <td><?= $value['c24']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c25'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>



                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        3. Hasil penelitian atau pemikiran atau kerjasama industri yang tidak dipublikasikan (tersimpan dalam perpustakaan) yang dilakukan secara melembaga</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C3">
                        <thead>
                            <tr>
                                <th>Judul Penelitian</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($c3 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['c31']; ?></td>
                                    <td><?= $value['c32']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c33'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>



                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        4. Menerjemahkan/menyadur buku ilmiah yang diterbitkan (ber ISBN)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C4">
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>No ISBN</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($c4 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['c41']; ?></td>
                                    <td><?= $value['c42']; ?></td>
                                    <td><?= $value['c43']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c44'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>


                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        5. Mengedit/menyunting karya ilmiah dalam bentuk buku yang diterbitkan (ber ISBN)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C5">
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>No ISBN</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($c5 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['c51']; ?></td>
                                    <td><?= $value['c52']; ?></td>
                                    <td><?= $value['c53']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c54'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        6. Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HaKI secara nasional atau internasional</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C6">
                        <thead>
                            <tr>
                                <th>Jenis (Option)</th>
                                <th>Judul Karya</th>
                                <th>Tingkat/Jenjang (Option)</th>
                                <th>Tahun Pembuatan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($c6 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['c61']; ?></td>
                                    <td><?= $value['c62']; ?></td>
                                    <td><?= $value['c63']; ?></td>
                                    <td><?= $value['c64']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c65'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        7. Membuat rancangan dan karya teknologi yang tidak dipatenkan; rancangan dan karya seni monumental yang tidak terdaftar di HaKI tetapi telah dipresentasikan pada forum yang teragenda</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C7">
                        <thead>
                            <tr>
                                <th>Jenis (Option)</th>
                                <th>Judul Karya</th>
                                <th>Tingkat/Jenjang (Option)</th>
                                <th>Tahun Pembuatan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($c7 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['c71']; ?></td>
                                    <td><?= $value['c72']; ?></td>
                                    <td><?= $value['c73']; ?></td>
                                    <td><?= $value['c74']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c75'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        8. Membuat rancangan dan kaya seni yang tidak terdaftar HaKI</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable C8">
                        <thead>
                            <tr>
                                <th>Unsur</th>
                                <th>Sub Unsur</th>
                                <th>Tingkat</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($c8 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['c81']; ?></td>
                                    <td><?= $value['c82']; ?></td>
                                    <td><?= $value['c83']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c84'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>




        </div>


        <!-- Tab Pengajuan Pengmas -->
        <div id="pengmas" class="tabcontent pt-5">
            <!-- Judul Halaman -->
            <div class="container">
                <!-- Row Pertama -->
                <div class="justify-content-between pb-2 pt-5">
                    <h1 class="head-content">Pengajuan Unsur Pengabdian Masyarakat</h1>
                </div>
            </div>
            <!-- Unsur Pengmas -->
            <div class="container-fluid p-5">

                <style>
                    .head-bab {
                        font-size: 24px;
                        color: #4e73df;
                        font-weight: bold;
                        font-family: Cambria;
                    }

                    .head-subbab {
                        font-size: 18px;
                        color: black;
                        font-family: 'Times New Roman';
                    }
                </style>
                <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="head-bab">D. Pengabdian Masyarakat</h5>
                </div>
                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        1. Menduduki jabatan pimpinan pada lembaga pemerintahan/pejabat negara yang harus dibebaskan dari jabatan organiknya tiap semester</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable D1">
                        <thead>
                            <tr>
                                <th>Nama Lembaga</th>
                                <th>Jabatan</th>
                                <th>Tahun Menjabat (Sejak)</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($d1 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['d11']; ?></td>
                                    <td><?= $value['d12']; ?></td>
                                    <td><?= $value['d13']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d14'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        2. Melaksanakan pengembangan hasil pendidikan, dan penelitian yang dapat dimanfaatkan oleh masyarakat/industri setiap program</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable D2">
                        <thead>
                            <tr>
                                <th>Judul Penelitian/Nama Program</th>
                                <th>Tahun Diterapkan/Diterbitkan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody> <?php foreach ($d2 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['d21']; ?></td>
                                    <td><?= $value['d22']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d23'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        3. Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat, terjadwal/terprogram (Setiap Program)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable D3">
                        <thead>
                            <tr>
                                <th>Nama Program</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Lama Pelaksanaan</th>
                                <th>Tingkat</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody> <?php foreach ($d3 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['d31']; ?></td>
                                    <td><?= $value['d32']; ?></td>
                                    <td><?= $value['d33']; ?></td>
                                    <td><?= $value['d34']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d35'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        4. Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan, tiap program</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable D4">
                        <thead>
                            <tr>
                                <th>Jenis Pelayanan</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody> <?php foreach ($d4 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['d41']; ?></td>
                                    <td><?= $value['d42']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d43'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        5. Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan, tiap karya</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable D5">
                        <thead>
                            <tr>
                                <th>Jenis Karya</th>
                                <th>Tahun Pembuatan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody> <?php foreach ($d5 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['d51']; ?></td>
                                    <td><?= $value['d52']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d53'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        6. Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal pengabdian kepada masyarakat atau teknologi tepat guna, merupakan diseminasi dari iuran program kegiatan pengabdian kepada masyarakat, tiap karya</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable D6">
                        <thead>
                            <tr>
                                <th>Jenis Karya</th>
                                <th>Tahun Pembuatan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody> <?php foreach ($d6 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['d61']; ?></td>
                                    <td><?= $value['d62']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d63'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        7. Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun)</h5>
                </div>
                <div class="pb-5 pt-3">
                    <table class="greyGridTable D7">
                        <thead>
                            <tr>
                                <th>Nama Pengelola Jurnal</th>
                                <th>Level Jurnal</th>
                                <th>Jabatan (Option)</th>
                                <th>Tahun</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody> <?php foreach ($d7 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['d71']; ?></td>
                                    <td><?= $value['d72']; ?></td>
                                    <td><?= $value['d73']; ?></td>
                                    <td><?= $value['d74']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d75'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <!-- Tab Pengajuan Penunjang -->
        <div id="penunjang" class="tabcontent pt-5">
            <!-- Judul Halaman -->
            <div class="container">
                <!-- Row Pertama -->
                <div class="justify-content-between pb-2 pt-5">
                    <h1 class="head-content">Pengajuan Unsur Penunjang</h1>
                </div>
            </div>
            <!-- Unsur Pengmas -->
            <div class="container-fluid p-5">

                <style>
                    .head-bab {
                        font-size: 24px;
                        color: #4e73df;
                        font-weight: bold;
                        font-family: Cambria;
                    }

                    .head-subbab {
                        font-size: 18px;
                        color: black;
                        font-family: 'Times New Roman';
                    }
                </style>

                <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="head-bab">E. Unsur Penunjang</h5>
                </div>
                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        1. Menjadi anggota dalam suatu panitia/Badan pada perguruan tinggi (Setiap Tahun)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E1">
                        <thead>
                            <tr>
                                <th>Nama Badan/Kepanitiaan</th>
                                <th>Jabatan (Option)</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e1 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e11']; ?></td>
                                    <td><?= $value['e12']; ?></td>
                                    <td><?= $value['e13']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e14'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        2. Menjadi anggota panitia/badan pada lembaga pemerintah (Setiap Kepanitiaan)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E2">
                        <thead>
                            <tr>
                                <th>Nama Badan/Kepanitiaan</th>
                                <th>Nama Lembaga</th>
                                <th>Tingkat Kepanitiaan (Option)</th>
                                <th>Jabatan</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e2 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e21']; ?></td>
                                    <td><?= $value['e22']; ?></td>
                                    <td><?= $value['e23']; ?></td>
                                    <td><?= $value['e24']; ?></td>
                                    <td><?= $value['e25']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e26'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        3. Menjadi anggota organisasi profesi (Setiap Periode Jabatan)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E3">
                        <thead>
                            <tr>
                                <th>Nama Organisasi</th>
                                <th>Tingkatan Organisasi (Option)</th>
                                <th>Jabatan (Option)</th>
                                <th>Tahun</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e3 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e31']; ?></td>
                                    <td><?= $value['e32']; ?></td>
                                    <td><?= $value['e33']; ?></td>
                                    <td><?= $value['e34']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e35'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        4. Mewakili perguruan tinggi/lembaga pemerintah duduk dalam panitia antar lembaga, tiap kepanitiaan </h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E4">
                        <thead>
                            <tr>
                                <th>Nama Kepanitiaan</th>
                                <th>Lembaga yang Diwakili</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e4 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e41']; ?></td>
                                    <td><?= $value['e42']; ?></td>
                                    <td><?= $value['e43']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e44'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        5. Menjadi anggota delegasi nasional ke pertemuan internasional (Setiap Kegiatan)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E5">
                        <thead>
                            <tr>
                                <th>Nama Pertemuan internasional</th>
                                <th>Jabatan (Option)</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e5 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e51']; ?></td>
                                    <td><?= $value['e52']; ?></td>
                                    <td><?= $value['e53']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e54'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        6. Berperan serta aktif dalam pertemuan ilmiah (Setiap Kegiatan)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E6">
                        <thead>
                            <tr>
                                <th>Nama Kegiatan/Kepanitiaan</th>
                                <th>Tingkatan (Option)</th>
                                <th>Jabatan (Option)</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e6 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e61']; ?></td>
                                    <td><?= $value['e62']; ?></td>
                                    <td><?= $value['e63']; ?></td>
                                    <td><?= $value['e64']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e65'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        7. Mendapat tanda jasa/penghargaan</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E7">
                        <thead>
                            <tr>
                                <th>Janis Tanda Jasa</th>
                                <th>Tahun Diterima</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e7 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e71']; ?></td>
                                    <td><?= $value['e72']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e73'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        8. Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional (Setiap Buku)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E8">
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Tingkat Buku (Option)</th>
                                <th>Tahun Terbit</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e8 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e81']; ?></td>
                                    <td><?= $value['e82']; ?></td>
                                    <td><?= $value['e83']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e84'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        9. Memiliki prestasi di bidang olahraga/humaniora (Tiap Piagam/Medali)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E9">
                        <thead>
                            <tr>
                                <th>Bidang Prestasi (Option)</th>
                                <th>Prestasi yang diperoleh</th>
                                <th>Tingkat (Option)</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e9 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e91']; ?></td>
                                    <td><?= $value['e92']; ?></td>
                                    <td><?= $value['e93']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e94'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>

                <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                    <h5 class="head-subbab">
                        10. Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable E10">
                        <thead>
                            <tr>
                                <th>Jabatan (Option)</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Lampiran</th>
                                <th>AK Final</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($e10 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['e101']; ?></td>
                                    <td><?= $value['e102']; ?></td>
                                    <td><?= $value['e103']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e104'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $value['ak_final']; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <div class="p-3"></div>
            </div>



        </div>


    </div>

</div>


<script>
    function openinfoTab(evt, menu) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(menu).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>