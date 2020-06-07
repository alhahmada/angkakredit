<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Penetapan Angka Kredit</h1>
            <style>
                .head-content {
                    font-size: 30px;
                    color: #4e73df;
                    font-weight: bold;
                    font-family: Cambria;
                }

                .body-content {
                    font-size: 18px;
                    color: black;
                    font-family: 'Times New Roman';
                }
            </style>
        </div>
    </div>


    <!-- 1 Row, 2 Area -->
    <div class="card-deck container">

        <!-- Area Pertama -->

        <div class="card col-xl-6 shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Keterangan Pribadi</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <div class="chart-piee pt-1 pb-2">
                    <div class="col-lg body-content">

                        <style>
                            .table-bio {
                                width: 100%;
                                text-align: left;
                                font-size: 16px;
                                color: black;
                            }

                            .table-bio tbody td {
                                padding-bottom: 0.6rem;
                            }

                            .table-bio tbody td:first-child {
                                width: 50%;
                            }
                        </style>
                        <table class="table-bio">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>$get.Data.User</td>
                                    <!-- <><?= $array['nama_lengkap']; ?> -->
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>$get.Data.User</td>
                                    <!--<?= $array['nip']; ?>-->
                                </tr>

                                <tr>
                                    <td>Unit Kerja</td>
                                    <td>$get.Data.User</td>
                                    <!-- <?= $array['unit_kerja']; ?> -->
                                </tr>
                                <tr>
                                    <td>Angka Kredit</td>
                                    <td>$get.Data.User</td>
                                    <!-- <?= $array['angka_kredit']; ?> -->
                                </tr>
                                <tr>
                                    <td>Tanggal Pengajuan</td>
                                    <td>$get.Data.User</td>
                                    <!-- <?= $array['tgl_pengajuan']; ?> -->
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


        <!-- Area Kedua -->

        <div class="card col-xl-6 shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pengajuan Kenaikan</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <div class="chart-piee pb-2">
                    <div class="pb-5">
                        <style>
                            .table_ver {
                                border: 0px solid black;
                                width: 100%;
                                text-align: center;
                                border-collapse: collapse;
                            }

                            .table_ver td,
                            .table_ver th {
                                border: 1px solid black;
                                padding: 3px 4px;
                            }

                            .table_ver thead th {
                                font-size: 13px;
                                font-weight: bold;
                                color: #123a56;
                                border-top: none;
                                border-left: none;
                                border-bottom: 1 px solid black;
                                border-right: 1 px solid black;
                                padding-bottom: 0.75rem;
                            }

                            .table_ver thead th:last-child {
                                border-right: none;
                            }

                            .table_ver tbody td {
                                font-size: 12px;
                                color: black;
                                padding-top: 0.5rem;
                                text-align: center;
                                border-top: none;
                                font-weight: bold;
                                border-left: none;
                                border-bottom: none;
                                border-right: 1 px solid black;
                            }

                            .table_ver tbody td:last-child {
                                border-right: none;
                            }

                            .table_ver tbody td:first-child {
                                text-align: left;
                            }
                        </style>
                        <table class="table_ver">
                            <thead>
                                <tr style="font-weight: bold;">
                                    <th style="width: 30%;"></th>
                                    <th style="width: 35%;">Saat Ini</th>
                                    <th style="width: 35%;">Diajukan</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jabatan Fungsional</td>
                                    <td>Lektor Kepala</td>
                                    <td>Profesor</td>
                                </tr>
                                <tr>
                                    <td>Pangkat</td>
                                    <td>Penata Muda Tk. 1</td>
                                    <td>Penata</td>
                                </tr>
                                <tr>
                                    <td>Golongan Ruang</td>
                                    <td>III D</td>
                                    <td>IV A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pt-2 pb-2">
                        <style>
                            .table-rangkuman {
                                width: 100%;
                                text-align: left;
                                font-size: 14px;
                                color: black;
                                position: absolute;
                                bottom: 0px;
                                font-weight: bold;
                            }

                            .table-rangkuman tbody td:first-child {
                                width: 60%;
                                font-size: 12px;
                            }
                        </style>
                        <table class="table-rangkuman">
                            <tbody>
                                <tr>
                                    <td>Angka Kredit Kum yang Dibutuhkan</td>
                                    <td>: 550</td>
                                </tr>
                                <tr>
                                    <td>Kekurangan Angka Kredit</td>
                                    <td>: 150</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>

    </div>



    <!-- Penetapan Pendidikan -->
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

            .greyGridTable thead th:last-child,
            tbody td:last-child {
                width: 10%;
            }

            .greyGridTable tbody td:nth-last-child(2),
            td:nth-last-child(3),
            td:nth-last-child(4) {
                width: 6%;
            }

            .greyGridTable tbody td:nth-last-child(5) {
                width: 10%;
            }
        </style>

        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">A. Pendidikan</h5>
        </div>

        <form class="user" enctype="multipart/form-data" method="post" action="<?= base_url('admin/action_penetapan_pendidikan'); ?>">
            <input type="hidden" value="<?= $id_pengajuan; ?>" name="id_pengajuan">
            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    1. Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah </h5>
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
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($a1 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_a1[]" value="<?= $value['id']; ?>">
                                <td><?= $value['a11']; ?></td>
                                <td><?= $value['a12']; ?></td>
                                <td><?= $value['a13']; ?></td>
                                <td><?= $value['a14']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['a15'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_a1[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_a1_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>

            </div>



            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    2. Mengikuti diklat prajabatan golongan III</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable A2">
                    <thead>
                        <tr>
                            <th>Nama Diklat</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($a2 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_a2[]" value="<?= $value['id']; ?>">
                                <td><?= $value['a21']; ?></td>
                                <td><?= $value['a22']; ?></td>
                                <td><?= $value['a23']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['a24'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_a2[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_a2_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>




            <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                <h5 class="head-bab">B. Pelaksanaan Pendidikan</h5>
            </div>




            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    1. Melaksanakan perkuliahan/tutorial/perkuliahan praktikum dan membimbing,menguji serta menyelenggarakan pendidikan di laboratorium, praktik keguruan, bengkel/studio/kebun percobaan/teknologi pengajaran dan praktik lapangan (setiap semester)</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B1">
                    <thead>
                        <tr>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Mata Kuliah</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b1 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b1[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b11']; ?></td>
                                <td><?= $value['b12']; ?></td>
                                <td><?= $value['b13']; ?></td>
                                <td><?= $value['b14']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b15'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b1[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b1_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>




            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    2. Membimbing seminar mahasiswa (Setiap Semester)</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B2">
                    <thead>
                        <tr>
                            <th>Tahun Akademik</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b2 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b2[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b21']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b22'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b2[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b2_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
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
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b3 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b3[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b31']; ?></td>
                                <td><?= $value['b32']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b33'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b3[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b3_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>


            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    4. Membimbing dan ikut membimbing dalam menghasilkan disertasi, tesis, skripsi dan laporan akhir studi yang sesuai dengan bidang penugasannya</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B4">
                    <thead>
                        <tr>
                            <th>Jenis(Option)</th>
                            <th>Tugas/Peran (Option)</th>
                            <th>Tahun Akademik</th>
                            <th>Jumlah Mahasiswa (Option)</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b4 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b4[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b41']; ?></td>
                                <td><?= $value['b42']; ?></td>
                                <td><?= $value['b43']; ?></td>
                                <td><?= $value['b44']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b45'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b4[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b4_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    5. Bertugas sebagai penguji pada ujian akhir/Profesi (Setiap Mahasiswa)</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B5">
                    <thead>
                        <tr>
                            <th>Jabatan Dalam Sidang (Option)</th>
                            <th>Tahun Akademik</th>
                            <th>Jumlah Mahasiswa</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b5 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b5[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b51']; ?></td>
                                <td><?= $value['b52']; ?></td>
                                <td><?= $value['b53']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b54'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b5[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b5_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    6. Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintifik (setiap semester)</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B6">
                    <thead>
                        <tr>
                            <th>Jenis (Isian)</th>
                            <th>Tahun Akademik</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b6 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b6[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b61']; ?></td>
                                <td><?= $value['b62']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b63'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b6[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b6_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    7. Mengambengkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi(Setiap Produk)</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B7">
                    <thead>
                        <tr>
                            <th>Jenis (Isian)</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th>Mata Kuliah</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b7 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b7[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b71']; ?></td>
                                <td><?= $value['b72']; ?></td>
                                <td><?= $value['b73']; ?></td>
                                <td><?= $value['b74']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b75'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b7[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b7_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>


            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    8. Mengembangkan bahan pengajaran/bahan kuliah yang mempunyai nilai kebaharuan(Setiap Produk)</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B8">
                    <thead>
                        <tr>
                            <th>Jenis (Option)</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th>Mata Kuliah</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b8 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b8[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b81']; ?></td>
                                <td><?= $value['b82']; ?></td>
                                <td><?= $value['b83']; ?></td>
                                <td><?= $value['b84']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b85'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b8[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b8_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>


            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    9. Menyampaikan orasi ilmiah di tingkat perguruan tinggi</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B9">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b9 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b9[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b91']; ?></td>
                                <td><?= $value['b92']; ?></td>
                                <td><?= $value['b93']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b94'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b9[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b9_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
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
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b10 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b10[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b101']; ?></td>
                                <td><?= $value['b102']; ?></td>
                                <td><?= $value['b103']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b104'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b10[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b10_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    11. Membimbing dosen yang mempunyai jabatan akademik lebih rendah setiap semester(Bagi Min. Lektor Kepala)</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B11">
                    <thead>
                        <tr>
                            <th>Jenis (Option)</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b11 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b11[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b111']; ?></td>
                                <td><?= $value['b112']; ?></td>
                                <td><?= $value['b113']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b114'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b11[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b11_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    12. Melaksanakan kegiatan datasering dan pencangkokan diluar institusi tempat bekerja (Setiap Semester)</h5>
            </div>
            <div class="pb-5 pt-3">
                <table class="greyGridTable B12">
                    <thead>
                        <tr>
                            <th>Jenis (Option)</th>
                            <th>Tahun Akademik</th>
                            <th>Semester</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b12 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b12[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b121']; ?></td>
                                <td><?= $value['b122']; ?></td>
                                <td><?= $value['b123']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b124'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b12[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b12_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
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
                            <th>Lampirkan Bukti</th>
                            <th>AK Maks</th>
                            <th>AK-1</th>
                            <th>AK-2</th>
                            <th>AK-3</th>
                            <th>AK Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($b13 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_b13[]" value="<?= $value['id']; ?>">
                                <td><?= $value['b131']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b132'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_b13[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_b13_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="container row">
                <div class="col-sm-11">
                    <button type="submit" class="float-right btn btn-primary btn-user btn=block">
                        Selanjutnya
                    </button>
                </div>
            </div>

        </form>


    </div>
</div>