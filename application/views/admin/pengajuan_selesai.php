<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container pb-3">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">History Pengajuan Selesai</h1>
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
        <div class="pt-1 pb-3">
            <table class="greyGridTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dosen</th>
                        <th>Tanggal Penetapan</th>
                        <th>Daftar Penilai</th>
                        <th>Jabatan Saat Ini</th>
                        <th style="width: 15%;">Angka Kredit yang diterima</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pengajuan as $key => $data) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['tgl_pengajuan']; ?></td>
                            <td><?= $data['progress_pengajuan']; ?></td>
                            <td><?= $data['tgl_pengajuan']; ?></td>
                            <td><?= $data['id_pengajuan']; ?></td>
                            <td><?= $data['ak_diterima']; ?></td>
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


</div>