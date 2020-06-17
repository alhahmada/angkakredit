<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Log Pengajuan Angka Kredit</h1>
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


    <!-- Resume Pengajuan -->
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
            width: 50%;
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
                <div class="pt-2 pb-1 col-xl-5" style="margin-left: 3rem;">
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
            </div>
        </div>
    </div>



    <!-- Konten Pengajuan #ID Pengajuan -->
    <div class="container-fluid pt-2 pb-5">
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











</div>