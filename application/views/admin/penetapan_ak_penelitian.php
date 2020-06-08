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
                                    <td><?= $array['nama_lengkap']; ?></td>
                                    <!-- <><?= $array['nama_lengkap']; ?> -->
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td><?= $array['nip']; ?></td>
                                    <!--<?= $array['nip']; ?> -->
                                </tr>

                                <tr>
                                    <td>Unit Kerja</td>
                                    <td> <?= $array['unit_kerja']; ?></td>
                                    <!-- <?= $array['unit_kerja']; ?> -->
                                </tr>
                                <tr>
                                    <td>Angka Kredit</td>
                                    <td><?= $array['angka_kredit']; ?></td>
                                    <!-- <?= $array['angka_kredit']; ?> -->
                                </tr>
                                <tr>
                                    <td>Tanggal Pengajuan</td>
                                    <td><?= $array['tgl_pengajuan']; ?></td>
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
            <h5 class="head-bab">C. Penelitian</h5>
        </div>
        <form class="user" enctype="multipart/form-data" method="post" action="<?= base_url('admin/action_penetapan_penelitian'); ?>">
            <input type="hidden" value="<?= $id_pengajuan; ?>" name="id_pengajuan">

            <div class="container-fluid">

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
                                <th>Jenjang/ Tingkat/ Bentuk*</th>
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
                            foreach ($c1 as $key => $value) { ?>
                                <tr>
                                    <input type="hidden" name="id_bab_c1[]" value="<?= $value['id']; ?>">
                                    <td><?= $value['c11']; ?></td>
                                    <td><?= $value['c12']; ?></td>
                                    <td><?= $value['c13']; ?></td>
                                    <td><?= $value['c14']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c15'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $maks_c1[$urut]['ak_maksimal']; ?></td>
                                    <td><?= $value['ak_p1'] ?></td>
                                    <td><?= $value['ak_p2'] ?></td>
                                    <td><?= $value['ak_p3'] ?></td>
                                    <td><input type="number" name="nilai_c1_final[]" style="width: 3rem;"></input></td>
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
                            foreach ($c2 as $key => $value) { ?>
                                <tr>
                                    <input type="hidden" name="id_bab_c2[]" value="<?= $value['id']; ?>">
                                    <td><?= $value['c21']; ?></td>
                                    <td><?= $value['c22']; ?></td>
                                    <td><?= $value['c23']; ?></td>
                                    <td><?= $value['c24']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c25'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $maks_c2[$urut]['ak_maksimal']; ?></td>
                                    <td><?= $value['ak_p1'] ?></td>
                                    <td><?= $value['ak_p2'] ?></td>
                                    <td><?= $value['ak_p3'] ?></td>
                                    <td><input type="number" name="nilai_c2_final[]" style="width: 3rem;"></input></td>
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
                        3. Hasil penelitian atau pemikiran atau kerjasama industri yang tidak dipublikasikan (tersimpan dalam perpustakaan) yang dilakukan secara melembaga</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C3">
                        <thead>
                            <tr>
                                <th>Judul Penelitian</th>
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
                            foreach ($c3 as $key => $value) { ?>
                                <tr>
                                    <input type="hidden" name="id_bab_c3[]" value="<?= $value['id']; ?>">
                                    <td><?= $value['c31']; ?></td>
                                    <td><?= $value['c32']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c33'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $maks_c3[$urut]['ak_maksimal']; ?></td>
                                    <td><?= $value['ak_p1'] ?></td>
                                    <td><?= $value['ak_p2'] ?></td>
                                    <td><?= $value['ak_p3'] ?></td>
                                    <td><input type="number" name="nilai_c3_final[]" style="width: 3rem;"></input></td>
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
                        4. Menerjemahkan/menyadur buku ilmiah yang diterbitkan (ber ISBN)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C4">
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>No ISBN</th>
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
                            foreach ($c4 as $key => $value) { ?>
                                <tr>
                                    <input type="hidden" name="id_bab_c4[]" value="<?= $value['id']; ?>">
                                    <td><?= $value['c41']; ?></td>
                                    <td><?= $value['c42']; ?></td>
                                    <td><?= $value['c43']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c44'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $maks_c4[$urut]['ak_maksimal']; ?></td>
                                    <td><?= $value['ak_p1'] ?></td>
                                    <td><?= $value['ak_p2'] ?></td>
                                    <td><?= $value['ak_p3'] ?></td>
                                    <td><input type="number" name="nilai_c4_final[]" style="width: 3rem;"></input></td>
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
                        5. Mengedit/menyunting karya ilmiah dalam bentuk buku yang diterbitkan (ber ISBN)</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C5">
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Tahun Pelaksanaan</th>
                                <th>No ISBN</th>
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
                            foreach ($c5 as $key => $value) { ?>
                                <tr>
                                    <input type="hidden" name="id_bab_c5[]" value="<?= $value['id']; ?>">
                                    <td><?= $value['c51']; ?></td>
                                    <td><?= $value['c52']; ?></td>
                                    <td><?= $value['c53']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c54'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $maks_c5[$urut]['ak_maksimal']; ?></td>
                                    <td><?= $value['ak_p1'] ?></td>
                                    <td><?= $value['ak_p2'] ?></td>
                                    <td><?= $value['ak_p3'] ?></td>
                                    <td><input type="number" name="nilai_c5_final[]" style="width: 3rem;"></input></td>
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
                            foreach ($c6 as $key => $value) { ?>
                                <tr>
                                    <input type="hidden" name="id_bab_c6[]" value="<?= $value['id']; ?>">
                                    <td><?= $value['c61']; ?></td>
                                    <td><?= $value['c62']; ?></td>
                                    <td><?= $value['c63']; ?></td>
                                    <td><?= $value['c64']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c65'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $maks_c6[$urut]['ak_maksimal']; ?></td>
                                    <td><?= $value['ak_p1'] ?></td>
                                    <td><?= $value['ak_p2'] ?></td>
                                    <td><?= $value['ak_p3'] ?></td>
                                    <td><input type="number" name="nilai_c6_final[]" style="width: 3rem;"></input></td>
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
                            foreach ($c7 as $key => $value) { ?>
                                <tr>
                                    <input type="hidden" name="id_bab_c7[]" value="<?= $value['id']; ?>">
                                    <td><?= $value['c71']; ?></td>
                                    <td><?= $value['c72']; ?></td>
                                    <td><?= $value['c73']; ?></td>
                                    <td><?= $value['c74']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c75'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $maks_c7[$urut]['ak_maksimal']; ?></td>
                                    <td><?= $value['ak_p1'] ?></td>
                                    <td><?= $value['ak_p2'] ?></td>
                                    <td><?= $value['ak_p3'] ?></td>
                                    <td><input type="number" name="nilai_c7_final[]" style="width: 3rem;"></input></td>
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
                        8. Membuat rancangan dan kaya seni yang tidak terdaftar HaKI</h5>
                </div>

                <div class="pb-5 pt-3">
                    <table class="greyGridTable C8">
                        <thead>
                            <tr>
                                <th>Unsur</th>
                                <th>Sub Unsur</th>
                                <th>Tingkat</th>
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
                            foreach ($c8 as $key => $value) { ?>
                                <tr>
                                    <input type="hidden" name="id_bab_c8[]" value="<?= $value['id']; ?>">
                                    <td><?= $value['c81']; ?></td>
                                    <td><?= $value['c82']; ?></td>
                                    <td><?= $value['c83']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c84'] . '.pdf'); ?>">
                                            <span>Cek Berkas</span>
                                        </a>
                                    </td>
                                    <td><?= $maks_c8[$urut]['ak_maksimal']; ?></td>
                                    <td><?= $value['ak_p1'] ?></td>
                                    <td><?= $value['ak_p2'] ?></td>
                                    <td><?= $value['ak_p3'] ?></td>
                                    <td><input type="number" name="nilai_c8_final[]" style="width: 3rem;"></input></td>
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
                        <a type="submit" href="<?= base_url('admin/penetapan_ak_pendidikan'); ?>" class="float-right btn btn-primary btn-user btn=block">
                            Sebelumnya
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="float-right btn btn-primary btn-user btn=block">
                            Selanjutnya
                        </button>
                    </div>
                </div>
            </div>

        </form>



    </div>
</div>