<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Penilaian Angka Kredit</h1>
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


    <!-- Area Pertama -->
    <div class="container-fluid p-2">
        <div class="card col-xl-6 shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Keterangan Dosen Pengaju</h6>
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

                            .table-bio tbody td:last-child {
                                width: 50%;
                            }
                        </style>
                        <table class="table-bio">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td><?= $user['nama_lengkap']; ?></td>
                                <tr>
                                    <td>NIP</td>
                                    <td><?= $user['nip']; ?></td>
                                </tr>

                                <tr>
                                    <td>Unit Kerja</td>
                                    <td><?= $user['unit_kerja']; ?></td>
                                </tr>
                                <tr>
                                    <td>Angka Kredit</td>
                                    <td><?= $user['angka_kredit']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pengajuan</td>
                                    <td><?= $user['tgl_pengajuan']; ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Constraint -->
    <div class="container-fluid p-2">
        <div class="card shadow" style="width: 100%;">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Constraint Pengajuan</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <h5 class="pt-1 pb-1 text-center body-content-a1">Pengajuan</h5>
                <table class="greyGridTable" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Jabatan Fungsional</th>
                            <th>Pangkat</th>
                            <th>Golongan Ruang</th>
                            <th>Angka Kredit</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight: bold;">
                        <tr>
                            <td>Saat Ini </td>
                            <td><?= $user['jabatan_fungsi']; ?></td>
                            <td><?= $user['pangkat']; ?></td>
                            <td><?= $user['golongan_ruang']; ?></td>
                            <td><?= $user['angka_kredit']; ?></td>
                        </tr>
                        <tr>
                            <td>Diajukan Ke- </td>
                            <td><?= $data_pengajuan['jabatan_fungsi_to'] ?></td>
                            <td><?= $data_pengajuan['pangkat_to'] ?></td>
                            <td><?= $data_pengajuan['gol_to'] ?></td>
                            <td><?= $data_pengajuan['ak_to'] ?></td>
                        </tr>
                    </tbody>
                </table>


                <h5 class="pb-2 body-content-a1">Kum Kekurangan Angka : <?= $data_pengajuan['kurang_ak'] ?></h5>
                <table class="greyGridTable" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                    <thead>
                        <tr>
                            <th rowspan="2"></th>
                            <th>Pendidikan</th>
                            <th>Penelitian</th>
                            <th>Pengabdian Masy. </th>
                            <th>Penunjang</th>
                        </tr>
                        <tr>

                            <th>Minimum</th>
                            <th>Minimum</th>
                            <th>Rentang</th>
                            <th>Maksimal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-weight: bold;">Persentase</td>
                            <td><?= $constraint['persen_pendidikan']; ?></td>
                            <td><?= $constraint['persen_penelitian']; ?></td>
                            <td><?= $constraint['persen_pengmas']; ?></td>
                            <td><?= $constraint['persen_penunjang']; ?></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Angka Kredit</td>
                            <td><?= $data_pengajuan['kurang_ak'] * $constraint['persen_pendidikan']; ?></td>
                            <td><?= $data_pengajuan['kurang_ak'] * $constraint['persen_penelitian']; ?></td>
                            <td>0.5 - <?= $data_pengajuan['kurang_ak'] * $constraint['persen_pengmas']; ?></td>
                            <td>0 - <?= $data_pengajuan['kurang_ak'] * $constraint['persen_penunjang']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <style>
                    .body-content-1 {
                        font-weight: bold;
                        font-size: 14px;
                        color: black;
                        margin-left: 5rem;
                    }

                    .body-content-a {
                        font-weight: bold;
                        font-size: 16px;
                        color: black;
                        margin-left: 3rem;
                    }

                    .body-content-a1 {
                        font-weight: bold;
                        font-size: 20px;
                        color: black;
                        margin-left: 3rem;
                    }
                </style>
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
            <h5 class="head-bab">E. Unsur Penunjang</h5>
        </div>
        <form class="user" enctype="multipart/form-data" method="post" action="<?= base_url('admin/action_penetapan_penunjang'); ?>">
            <input type="hidden" value="<?= $id_pengajuan; ?>" name="id_pengajuan">

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    1. Menjadi anggota dalam suatu panitia/Badan pada perguruan tinggi</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E1">
                    <thead>
                        <tr>
                            <th>Nama Badan/Kepanitiaan</th>
                            <th>Jabatan (Option)</th>
                            <th>Tahun Pelaksanaan</th>
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
                        foreach ($e1 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e1[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e11']; ?></td>
                                <td><?= $value['e12']; ?></td>
                                <td><?= $value['e13']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e14'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e1[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e1_final[]" style="width: 3rem;"></input></td>
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
                    2. Menjadi anggota panitia/badan pada lembaga pemerintah</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E2">
                    <thead>
                        <tr>
                            <th>Nama Badan/ Kepanitiaan</th>
                            <th>Nama Lembaga</th>
                            <th>Tingkat Kepanitiaan (Option)</th>
                            <th>Jabatan</th>
                            <th>Tahun Pelaksanaan</th>
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
                        foreach ($e2 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e2[]" value="<?= $value['id']; ?>">
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
                                <td><?= $maks_e2[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e2_final[]" style="width: 3rem;"></input></td>
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
                    3. Menjadi anggota organisasi profesi</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E3">
                    <thead>
                        <tr>
                            <th>Nama Organisasi</th>
                            <th>Tingkatan Organisasi (Option)</th>
                            <th>Jabatan (Option)</th>
                            <th>Tahun</th>
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
                        foreach ($e3 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e3[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e31']; ?></td>
                                <td><?= $value['e32']; ?></td>
                                <td><?= $value['e33']; ?></td>
                                <td><?= $value['e34']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e35'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e3[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e3_final[]" style="width: 3rem;"></input></td>
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
                    4. Mewakili perguruan tinggi/lembaga pemerintah duduk dalam panitia antar lembaga, tiap kepanitiaan </h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E4">
                    <thead>
                        <tr>
                            <th>Nama Kepanitiaan</th>
                            <th>Lembaga yang Diwakili</th>
                            <th>Tahun Pelaksanaan</th>
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
                        foreach ($e4 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e4[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e41']; ?></td>
                                <td><?= $value['e42']; ?></td>
                                <td><?= $value['e43']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e44'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e4[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e4_final[]" style="width: 3rem;"></input></td>
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
                    5. Menjadi anggota delegasi nasional ke pertemuan internasional</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E5">
                    <thead>
                        <tr>
                            <th>Nama Pertemuan internasional</th>
                            <th>Jabatan (Option)</th>
                            <th>Tahun Pelaksanaan</th>
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
                        foreach ($e5 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e5[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e51']; ?></td>
                                <td><?= $value['e52']; ?></td>
                                <td><?= $value['e53']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e54'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e5[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e5_final[]" style="width: 3rem;"></input></td>
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
                    6. Berperan serta aktif dalam pertemuan ilmiah</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E6">
                    <thead>
                        <tr>
                            <th>Nama Kegiatan/ Kepanitiaan</th>
                            <th>Tingkatan (Option)</th>
                            <th>Jabatan (Option)</th>
                            <th>Tahun Pelaksanaan</th>
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
                        foreach ($e6 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e6[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e61']; ?></td>
                                <td><?= $value['e62']; ?></td>
                                <td><?= $value['e63']; ?></td>
                                <td><?= $value['e64']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e65'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e6[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e6_final[]" style="width: 3rem;"></input></td>
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
                    7. Mendapat tanda jasa/penghargaan</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E7">
                    <thead>
                        <tr>
                            <th>Janis Tanda Jasa</th>
                            <th>Tahun Diterima</th>
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
                        foreach ($e7 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e7[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e71']; ?></td>
                                <td><?= $value['e72']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e73'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e7[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e7_final[]" style="width: 3rem;"></input></td>
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
                    8. Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E8">
                    <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <th>Tingkat Buku (Option)</th>
                            <th>Tahun Terbit</th>
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
                        foreach ($e8 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e8[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e81']; ?></td>
                                <td><?= $value['e82']; ?></td>
                                <td><?= $value['e83']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e84'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e8[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e8_final[]" style="width: 3rem;"></input></td>
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
                    9. Memiliki prestasi di bidang olahraga/humaniora </h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E9">
                    <thead>
                        <tr>
                            <th>Bidang Prestasi (Option)</th>
                            <th>Prestasi yang diperoleh</th>
                            <th>Tingkat (Option)</th>
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
                        foreach ($e9 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e9[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e91']; ?></td>
                                <td><?= $value['e92']; ?></td>
                                <td><?= $value['e93']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e94'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e9[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e9_final[]" style="width: 3rem;"></input></td>
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
                    10. Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable E10">
                    <thead>
                        <tr>
                            <th>Jabatan (Option)</th>
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
                        foreach ($e10 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_e10[]" value="<?= $value['id']; ?>">
                                <td><?= $value['e101']; ?></td>
                                <td><?= $value['e102']; ?></td>
                                <td><?= $value['e103']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e104'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_e10[$urut]['ak_maksimal']; ?></td>
                                <td><?= $value['ak_p1']; ?></td>
                                <td><?= $value['ak_p2']; ?></td>
                                <td><?= $value['ak_p3']; ?></td>
                                <td><input type="number" name="nilai_e10_final[]" style="width: 3rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="container row">
                <div class="col-sm-9">
                    <a type="submit" href="<?= base_url('admin/penetapan_ak_pengmas'); ?>" class="float-right btn btn-primary btn-user btn=block">
                        Sebelumnya
                    </a>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="float-right btn btn-primary btn-user btn=block">
                        Selanjutnya
                    </button>
                </div>
            </div>

        </form>
    </div>


</div>