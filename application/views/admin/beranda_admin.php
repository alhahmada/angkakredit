<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Beranda Administrator</h1>
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
                                    <!--<?= $array['nip']; ?>-->
                                </tr>
                                <tr>
                                    <td>Unit Kerja</td>
                                    <td><?= $array['unit_kerja']; ?></td>
                                    <!-- <?= $array['pangkat'] . "/" . $array['golongan_ruang']; ?> -->
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td><?= $array['email']; ?></td>
                                    <!-- <?= $array['angka_kredit']; ?> -->
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
                <h6 class="m-0 font-weight-bold text-primary">Daftar Dosen Harus Mengajukan</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <div class="chart-piee pb-2">
                    <div class="pb-5">
                        <style>
                            .table_admin {
                                border: 0px solid black;
                                width: 100%;
                                text-align: center;
                                border-collapse: collapse;
                            }

                            .table_admin td,
                            .table_admin th {
                                border: 1px solid black;
                                padding: 3px 4px;
                            }

                            .table_admin thead th {
                                font-size: 13px;
                                font-weight: bold;
                                color: #123a56;
                                border-top: none;
                                border-left: none;
                                border-bottom: 1 px solid black;
                                border-right: 1 px solid black;
                                padding-bottom: 0.75rem;
                            }

                            .table_admin thead th:last-child {
                                border-right: none;
                            }

                            .table_admin tbody td {
                                font-size: 11px;
                                color: black;
                                text-align: center;
                                border-top: none;
                                font-weight: bold;
                                border-left: none;
                                border-bottom: none;
                                border-right: 1 px solid black;
                            }

                            .table_admin tbody td:last-child {
                                border-right: none;
                            }

                            .table_admin tbody td:first-child {
                                text-align: left;
                            }
                        </style>
                        <table class="table_admin">
                            <thead>
                                <tr style="font-weight: bold;">
                                    <th style="width: 40%;">Nama Dosen</th>
                                    <th style="width: 35%;">Pengajuan Terakhir</th>
                                    <th style="width: 25%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Aditya Faizal Arifin</td>
                                    <td>2015</td>
                                    <td><a>Kirim Notifikasi</a></td>
                                </tr>
                                <tr>
                                    <td>Dimas Nur Ramadhani</td>
                                    <td>2016</td>
                                    <td><a>Kirim Notifikasi</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- Area Full 1 -->
    <div class="container-fluid col-xl-12">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pengajuan Dalam Progress</h6>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="chart-pie">
                    <div class="pt-4 pb-5">
                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>0</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jumlah Dosen</td>
                                    <?php for ($i = 0; $i < 8; $i++) {
                                        echo "<td>" . $progress[$i] . "</td>";
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pt-2 pb-2">
                        <style>
                            .table-ket {
                                width: 100%;
                                text-align: left;
                                font-size: 16px;
                                color: black;
                                position: absolute;
                                bottom: 0px;
                            }

                            .table-ket thead th {
                                font-weight: bold;
                                font-size: 13px;
                            }

                            .table-ket tbody td {
                                width: 33%;
                                font-style: italic;
                                font-size: 12px;
                            }
                        </style>
                        <table class="table-ket">
                            <thead>
                                <tr>
                                    <th colspan="3">Keterangan / Status :</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>"0" : Pengajuan</td>
                                    <td>"3" : Pemilihan Tim Penilai</td>
                                    <td>"6" : Selesai</td>
                                </tr>
                                <tr>
                                    <td>"1" : Verifikasi Berkas</td>
                                    <td>"4" : Penilaian</td>
                                    <td>"7" : Pengajuan Ditolak</td>
                                </tr>
                                <tr>
                                    <td>"2" : Verifikasi Poin Pengajuan</td>
                                    <td>"5" : Penetapan Angka Kredit</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>






</div>

<!-- Illustrations -->

<div class="pt-5 pb-3"></div>
</div>