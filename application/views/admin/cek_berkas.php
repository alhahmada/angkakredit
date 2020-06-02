<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Verifikasi Berkas Pengajuan Angka Kredit </h1>
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


    <!-- Tabel Cek Berkas -->
    <div class="container-fluid p-5">
        <div class="pb-5 pt-3">
            <table class="greyGridTable">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>File yang dilampirkan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td class="text-left">Scan Surat Pengantar dari Pimpinan Perguruan Tinggi</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td class="text-left">Scan Resume dari pak.dikti.go.id (Cap + Ttd)</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td class="text-left">Scan Ijazah Terakhir (Optional)</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td class="text-left">PDF Abstrak Disertasi (Optional)</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td class="text-left">Scan Surat Kepala Pemberian Tugas Belajar (Optional)</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td class="text-left">Scan Surat Kepala Pengaktifan Kembali (Optional)</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td class="text-left">Scan DUPAK</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td class="text-left">Scan PAK terakhir</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td class="text-left">Scan SK Jabatan Terakhir</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td class="text-left">Scan SK Pangkat/Golongan PNS Terakhir</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td class="text-left">Scan PPKP (DP3) 2 Tahun Terakhir</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td class="text-left">Scan Surat Keterangan Melaksanakan Penelitian</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td class="text-left">Scan Persetujuan/Pertimbangan Senat</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td class="text-left">Scan Daftar Hadir Anggota Senat</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td class="text-left">Scan Surat Pengesahan Hasil Validasi Karya Ilmiah (Optional)</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td class="text-left">Scan Surat Pernyataan Keabsahan Karya Ilmiah</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td class="text-left">Scan Sertifikat Pendidik</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td class="text-left">Surat Klarifikasi</td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url(''); ?>">
                                <span>Cek Lampiran</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <form action="" method="POST" id="cek_berkas">

            <!-- Insert Catatan -->
            <div class="container p-2">
                <div class="card-body">
                    <div>
                        <style>
                            .head-subbab {
                                font-size: 18px;
                                color: black;
                                font-family: 'Times New Roman';
                                font-weight: bold;
                            }
                        </style>
                        <h6 class="head-subbab">Berikan Catatan</h6>
                        <textarea class="col_comment" style="width: 100%; font-family: 'Times New Roman';font-size: 10pt;"></textarea>
                    </div>
                </div>
            </div>

            <!-- Tombol Action -->
            <div class="container row p-5">
                <div class="col-sm-9">
                    <a href="<?= base_url('admin/daftar_pengajuanAK'); ?>" class="float-right btn btn-primary btn-user btn=block">
                        Tolak Pengajuan
                    </a>
                </div>
                <div class="col-sm-3">
                    <a type="submit" href="<?= base_url('admin/daftar_pengajuanAK'); ?>" class="float-right btn btn-primary btn-user btn=block">
                        Verifikasi Berkas
                    </a>
                </div>
            </div>


        </form>
    </div>
    <style>
        .head-subbab {
            font-size: 18px;
            color: black;
            font-family: 'Times New Roman';
            font-weight: bold;
        }
    </style>
</div>