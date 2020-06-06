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


    <!-- Penilaian Pengabdian Masyarakat -->
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
                width: 14%;
            }

            .greyGridTable tbody td:nth-last-child(2) {
                width: 12%;
            }
        </style>
        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">D. Pengabdian Masyarakat</h5>
        </div>

        <form>

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
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
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
                                <td><?= $d1['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d1" style="width: 3rem;"></input></td>
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
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($d2 as $key => $value) { ?>
                            <tr>
                                <td><?= $value['d21']; ?></td>
                                <td><?= $value['d22']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d23'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $d2['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d2" style="width: 3rem;"></input></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    3. Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat, terjadwal/terprogram</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D3">
                    <thead>
                        <tr>
                            <th>Nama Program</th>
                            <th>Tahun Pelaksanaan</th>
                            <th>Lama Pelaksanaan</th>
                            <th>Tingkat</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($d3 as $key => $value) { ?>
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
                                <td><?= $d3['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d3" style="width: 3rem;"></input></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    4. Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D4">
                    <thead>
                        <tr>
                            <th>Jenis Pelayanan</th>
                            <th>Tahun Pelaksanaan</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($d4 as $key => $value) { ?>
                            <tr>
                                <td><?= $value['d41']; ?></td>
                                <td><?= $value['d42']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d43'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $d4['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d4" style="width: 3rem;"></input></td>
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
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($d5 as $key => $value) { ?>
                            <tr>
                                <td><?= $value['d51']; ?></td>
                                <td><?= $value['d52']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d53'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $d5['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d5" style="width: 3rem;"></input></td>
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
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($d6 as $key => $value) { ?>
                            <tr>
                                <td><?= $value['d61']; ?></td>
                                <td><?= $value['d62']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d63'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $d6['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d6" style="width: 3rem;"></input></td>
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
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($d7 as $key => $value) { ?>
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
                                <td><?= $d7['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d7" style="width: 3rem;"></input></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>


            <div class="container row">
                <div class="col-sm-9">
                    <a type="submit" href="<?= base_url('penilai/nilai_penelitian'); ?>" class="float-right btn btn-primary btn-user btn=block">
                        Sebelumnya
                    </a>
                </div>
                <div class="col-sm-2">
                    <a type="submit" href="<?= base_url('penilai/nilai_penunjang'); ?>" class="float-right btn btn-primary btn-user btn=block">
                        Selanjutnya
                    </a>
                </div>
            </div>

        </form>
    </div>


</div>