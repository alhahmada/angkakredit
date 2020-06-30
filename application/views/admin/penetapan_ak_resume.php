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


    <!-- Area Pertama -->
    <div class="card-deck container">
        <div class="card col-xl-6 shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Keterangan Dosen Pengaju</h6>
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

                            .table-bio tbody td:last-child {
                                width: 50%;
                            }
                        </style>
                        <table class="table-bio">
                            <tbody>
                                <tr>
                                    <td style="width: 50%;">Nama Lengkap</td>
                                    <td style="width: 50%;"><?= $user['nama_lengkap']; ?></td>
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

        <div class="card col-xl-6 shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Keterangan Penilai</h6>
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

                            .table-bio tbody td:last-child {
                                width: 50%;
                            }
                        </style>
                        <table class="table-bio">
                            <tbody>
                                <tr>
                                    <td style="width: 50%;">Penilai 1</td>
                                    <td style="width: 50%;">: <?= $penilai[0]['nama_lengkap']; ?></td>
                                <tr>
                                    <td>Penilai 2</td>
                                    <td>: <?= $penilai[1]['nama_lengkap']; ?></td>
                                </tr>

                                <tr>
                                    <td>Penilai 3</td>
                                    <td>: <?= $penilai[2]['nama_lengkap']; ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Constraint -->
    <div class="container-fluid p-2">
        <div class="card shadow" style="width: 100%;">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Constraint Pengajuan</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <h5 class="pt-1 pb-1 text-center body-content-a1">Pengajuan</h5>
                <table class="greyGridTable" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                    <thead>
                        <tr>
                            <th style="width: 20%;"></th>
                            <th style="width: 20%;">Jabatan Fungsional</th>
                            <th style="width: 20%;">Pangkat</th>
                            <th style="width: 20%;">Golongan Ruang</th>
                            <th style="width: 20%;">Angka Kredit</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight: bold;">
                        <tr>
                            <td>Saat Ini </td>
                            <td><?= $user['jabatan_fungsi']; ?></td>
                            <td><?= $user['pangkat']; ?></td>
                            <td><?= $user['golongan_ruang']; ?></td>
                            <td><?= $user['angka_kredit']; ?></td>
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
                            <th style="width: 20%;" rowspan="2"></th>
                            <th style="width: 20%;">Pendidikan</th>
                            <th style="width: 20%;">Penelitian</th>
                            <th style="width: 20%;">Pengabdian Masy. </th>
                            <th style="width: 20%;">Penunjang</th>
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
    </div>


    <!-- Penetapan Resume -->
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

            .greyGridTable tbody td:nth-last-child(1),
            td:nth-last-child(2) {
                width: 10%;
            }
        </style>

        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">Resume Penetapan Per Unsur</h5>
        </div>

        <table class="greyGridTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Unsur Pengajuan</th>
                    <th>Persentase</th>
                    <th>Angka Kredit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td class="text-left">Pendidikan dan Pelaksanaan Pendidikan</td>
                    <td><?= $persen_pendidikan_final; ?>%</td>
                    <td><?= $data_nilai[0]['ak_pendidikan_final']; ?></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td class="text-left">Penelitian</td>
                    <td><?= $persen_penelitian_final; ?>%</td>
                    <td><?= $data_nilai[0]['ak_penelitian_final']; ?></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td class="text-left">Pengabdian Masyarakat</td>
                    <td><?= $persen_pengmas_final; ?>%</td>
                    <td><?= $data_nilai[0]['ak_pengmas_final']; ?></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td class="text-left">Unsur Penunjang</td>
                    <td><?= $persen_penunjang_final; ?>%</td>
                    <td><?= $data_nilai[0]['ak_penunjang_final']; ?></td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-center">Total Angka Kredit yang Diperoleh </th>
                    <th><?= $total_nilai; ?></th>
                </tr>
            </tfoot>
        </table>
        <form enctype="multipart/form-data" method="post" action="<?= base_url('admin/action_penetapan_ak_resume'); ?>">
            <input type="hidden" value="<?= $id_pengajuan; ?>" name="id_pengajuan">
            <div class="container p-3">
                <div class="card-body">
                    <div>
                        <h6 class="head-subbab font-weight-bold">Berikan Catatan</h6>
                        <textarea class="col_comment" name="komentar" style="width: 100%; font-family: 'Times New Roman';font-size: 10pt;"></textarea>
                    </div>
                </div>
            </div>

            <div class="container row p-4">
                <div class="col-sm-10">
                    <button data-toggle="modal" type="button" data-target="#verModal" class="float-right btn btn-primary btn-user btn=block">
                        Tetapkan Nilai Angka Kredit
                    </button>
                </div>
            </div>
            <!-- Modal Verifikasi Berkas -->
            <div class="modal fade" id="verModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tetapkan Nilai ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Klik Lanjutkan Untuk Menetapkan Hasil Penilaian Angka Kredit</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" name="aksi" value="terima" type="submit">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </div>



        </form>



    </div>
</div>