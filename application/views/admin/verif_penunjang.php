<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Verifikasi Pengajuan Angka Kredit </h1>
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
                                    <td><?= $user['nama_lengkap']; ?></td>
                                </tr>
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
                                    <td><?= $user['jabatan_fungsi']; ?></td>
                                    <td><?= $data_pengajuan['jabatan_fungsi_to']; ?></td>
                                </tr>
                                <tr>
                                    <td>Pangkat</td>
                                    <td><?= $user['pangkat']; ?></td>
                                    <td><?= $data_pengajuan['pangkat_to']; ?></td>
                                </tr>
                                <tr>
                                    <td>Golongan Ruang</td>
                                    <td><?= $user['golongan_ruang']; ?></td>
                                    <td><?= $data_pengajuan['gol_to']; ?></td>
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
                                    <td>: <?= $data_pengajuan['ak_to']; ?></td>
                                </tr>
                                <tr>
                                    <td>Kekurangan Angka Kredit</td>
                                    <td>: <?= $data_pengajuan['kurang_ak']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>

    </div>


    <!-- Verifikasi Berkas Penunjang-->
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

        <form action="<?= base_url('/admin/action_verif_penunjang'); ?>" method="POST" id="verif_penunjang">
            <input type="hidden" name="id_pengajuan" value="<?= $id_pengajuan; ?>">

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            <th>Lampirkan Bukti</th>

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
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>





            <div class="container row p-2">
                <div class="card-body">
                    <div>
                        <h6 class="head-subbab font-weight-bold">Berikan Catatan</h6>
                        <textarea name="keterangan" class="col_comment" style="width: 100%; font-family: 'Times New Roman';font-size: 10pt;"></textarea>
                    </div>
                </div>
            </div>


            <div class="container row p-5">
                <div class="col-sm-9">
                    <button data-toggle="modal" type="button" data-target="#tolakModal" class="float-right btn btn-primary btn-user btn=block">
                        Tolak Pengajuan
                    </button>
                </div>
                <div class="col-sm-3">
                    <button data-toggle="modal" type="button" data-target="#verModal" class="float-right btn btn-primary btn-user btn=block">
                        Verifikasi Pengajuan
                    </button>
                </div>
            </div>
            <!-- Modal Verifikasi Berkas -->
            <div class="modal fade" id="verModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Verifikasi Berkas ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Klik Lanjutkan Untuk Memverifikasi Berkas Pengajuan Angka Kredit</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" name="aksi" value="terima" type="submit">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Tolak Verifikasi Berkas-->
            <div class="modal fade" id="tolakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tolak Berkas Pengajuan ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Klik Lanjutkan Untuk Menolak Berkas Pengajuan Angka Kredit</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" name="aksi" value="tolak" type="submit">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </div>



        </form>


    </div>


</div>