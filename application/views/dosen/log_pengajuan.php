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


    <!-- Constraint -->
    <!-- <div class="container-fluid p-5">
        <div class="card shadow" style="width: 100%;">
            
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Constraint Pengajuan</h6>
            </div>
            
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
                            <td><?= $array['jabatan_fungsi']; ?></td>
                            <td><?= $array['pangkat']; ?></td>
                            <td><?= $array['golongan_ruang']; ?></td>
                            <td><?= $array['angka_kredit']; ?></td>
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
    </div>  -->


    <!-- Konten Pengajuan #ID Pengajuan -->
    <div class="container-fluid p-5">
        <div class="card shadow" style="width: 100%;">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Log Pengajuan</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <div class="pt-2 pb-2">
                    <h5>Id Pengajuan : <?= $id_pengajuan; ?></h5>
                    <h5>Tanggal Pengajuan : <?= $tgl_pengajuan['tgl_pengajuan']; ?></h5>
                </div>
                <table style="text-align: center; width: 100%; height: auto;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis Progress</th>
                            <th>Status</th>
                            <th>Tanggal Penetapan</th>
                            <th>Catatan</th>
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