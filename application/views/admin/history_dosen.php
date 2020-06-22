<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container pb-3">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Tabel History Pengajuan Dosen</h1>
            <style>
                .head-content {
                    font-size: 30px;
                    color: #4e73df;
                    font-weight: bold;
                    font-family: Cambria;
                }

                .head-sub-content {
                    font-size: 22px;
                    color: black;
                    font-weight: bold;
                    font-family: Cambria;
                }

                .body-content {
                    font-size: 16px;
                    color: black;
                    font-family: 'Times New Roman';
                }
            </style>
        </div>
    </div>



    <!-- Body -->
    <div class="container">
        <div class="pt-5 pb-3">
            <style>
                .table-log {
                    width: 80%;
                    text-align: left;
                    font-size: 20px;
                    color: black;
                    font-family: Cambria;
                    font-weight: bold;
                    position: relative;
                    margin-bottom: 2rem;
                }

                .table-log tbody td:first-child {
                    width: 20%;
                }
            </style>
            <div class="container-fluid text-center">
                <table class="table-log">
                    <tbody>
                        <tr>
                            <td style="width: 5%;"></td>
                            <td>Nama Dosen</td>
                            <td>: <?= $nama_pengaju[0]['nama_lengkap']; ?></td>
                        </tr>
                        <tr>
                            <td style="width: 5%;">
                            <td>NIP</td>
                            <td>: <?= $nama_pengaju[0]['nip']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table class="greyGridTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pengajuan</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Progress Pengajuan</th>
                        <th>Lihat Log Pengajuan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($history as $key => $data) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['id_pengajuan']; ?></td>
                            <td><?= $data['tgl_pengajuan']; ?></td>
                            <td><?= $data['progress_pengajuan']; ?></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url('admin/log_pengajuan/' . $data['id_pengajuan']); ?>">
                                    <span>Lihat Log</span>
                                </a>
                            </td>
                        <?php $no++;
                    } ?>
                        </tr>
                </tbody>
            </table>
        </div>

        <div class="pt-5 pb-2">
            <style>
                .table-ket {
                    width: 100%;
                    text-align: left;
                    font-size: 16px;
                    color: black;
                    margin-top: 30px;
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
    <div class="pt-2 pb-5"></div>


</div>