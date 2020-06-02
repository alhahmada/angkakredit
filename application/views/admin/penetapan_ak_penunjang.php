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
            <h5 class="head-bab">E. Unsur Penunjang</h5>
        </div>
        <form>

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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url(''); ?>">
                                    <span>Cek Berkas</span>
                                </a>
                            </td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><input type="text" style="width: 3rem;"></input></td>
                        </tr>
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
                    <a type="submit" href="<?= base_url('admin/penetapan_ak_resume'); ?>" class="float-right btn btn-primary btn-user btn=block">
                        Selanjutnya
                    </a>
                </div>
            </div>

        </form>
    </div>


</div>