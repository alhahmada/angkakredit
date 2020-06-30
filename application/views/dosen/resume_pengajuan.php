<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Resume Pengajuan Angka Kredit</h1>
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
</div>



<!-- Constraint -->
<div class="container-fluid p-5">
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
                        <td style="font-weight: bold;">AK Kum</td>
                        <td><?= $data_pengajuan['ak_to'] * $constraint['persen_pendidikan']; ?></td>
                        <td><?= $data_pengajuan['ak_to'] * $constraint['persen_penelitian']; ?></td>
                        <td>0.5 - <?= $data_pengajuan['ak_to'] * $constraint['persen_pengmas']; ?></td>
                        <td>0 - <?= $data_pengajuan['ak_to'] * $constraint['persen_penunjang']; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">AK Saat Ini</td>
                        <td><?= $data_ak['ak_pendidikan']; ?></td>
                        <td><?= $data_ak['ak_penelitian']; ?></td>
                        <td><?= $data_ak['ak_pengmas']; ?></td>
                        <td><?= $data_ak['ak_penunjang']; ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="color: black !important; font-weight: bold; height: 4rem;">
                        <td style=" font-size: 20px;">Kekurangan</td>
                        <td style=" font-size: 20px;"><?= $data_pengajuan['ak_to'] * $constraint['persen_pendidikan'] - $data_ak['ak_pendidikan']; ?></td>
                        <td style=" font-size: 20px;"><?= $data_pengajuan['ak_to'] * $constraint['persen_penelitian'] - $data_ak['ak_penelitian']; ?></td>
                        <?php if ($data_ak['ak_pengmas'] == 0) { ?>
                            <td style=" font-size: 20px;">0,5 - <?= $data_pengajuan['ak_to'] * $constraint['persen_pengmas'] - $data_ak['ak_pengmas']; ?></td>
                        <?php } elseif ($data_ak['ak_pengmas'] >= 0.5) { ?>
                            <td style=" font-size: 20px;">0 - <?= $data_pengajuan['ak_to'] * $constraint['persen_pengmas'] - $data_ak['ak_pengmas']; ?></td>
                        <?php } ?>
                        <td style=" font-size: 20px;">0 - <?= $data_pengajuan['ak_to'] * $constraint['persen_penunjang'] - $data_ak['ak_penunjang']; ?></td>
                    </tr>
                </tfoot>
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
            <!-- Batasan -->
            <h5 class="pt-1 pb-2 body-content-a1">Batas Syarat Pengajuan</h5>
            <!-- Tabel Batasan Menurut Jenis Pengajuan -->
            <table class="greyGridTable" style="margin-top: 2rem; margin-bottom: 3rem;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Batasan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. </td>
                        <td style="text-align: left;">Pegajuan Unsur C Poin 2.E + 3 Maksimal 5% dari Total Unsur Penelitian</td>
                        <td style="width: 20%;">ket</td>
                    </tr>
                    <?php if ($kode_batasan == 1) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } elseif ($kode_batasan == 2) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 atau 1.C.6 </td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } elseif ($kode_batasan == 3) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td style="text-align: left;">Minimal Terdapat 2 Unsur Pengajuan C Poin 1.C.1 / 1.C.2</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } elseif ($kode_batasan == 4) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } elseif ($kode_batasan == 5) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.1 / 1.C.2 / 1.C.3 (Untuk Magister)</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>5. </td>
                            <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.4 (Untuk Doktor)</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } elseif ($kode_batasan == 6) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td style="text-align: left;">Minimal Terdapat 4 Unsur Pengajuan C Poin 1.C.1 / 1.C.2</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>5. </td>
                            <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Doktor</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } elseif ($kode_batasan == 7) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>5. </td>
                            <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Doktor / Magister</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } elseif ($kode_batasan == 8) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.1 / 1.C.2</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } elseif ($kode_batasan == 9) { ?>
                        <tr>
                            <td>2. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                        <tr>
                            <td>4. </td>
                            <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.4</td>
                            <td style="width: 20%;">ket</td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<!-- Resume Total -->
<div class="container-fluid">
    <div class="p-5">

        <div class="p-2 d-sm-flex text-center align-items-center justify-content-between mb-4">
            <h5 class="head-bab">Total Angka Kredit yang Diajukan</h5>
        </div>



        <table class="greyGridTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Unsur Pengajuan</th>
                    <th>Persentase</th>
                    <th>Total Angka Kredit</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td class="text-left" style="font-weight: bold;">Pendidikan dan Pelaksanaan Pendidikan</td>
                    <td><?= $persentase_pendidikan; ?>%</td>
                    <td><?= $total_pendidikan; ?></td>
                    <?php if ($total_pendidikan < $data_pengajuan['kurang_ak'] * $constraint['persen_pendidikan']) { ?>
                        <td style="color: red;">Belum Tercukupi</td>
                    <?php } else { ?>
                        <td>Tercukupi</td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>2.</td>
                    <td class="text-left" style="font-weight: bold;">Penelitian</td>
                    <td><?= $persentase_penelitian; ?>%</td>
                    <td><?= $total_penelitian;  ?></td>
                    <?php if ($total_penelitian < $data_pengajuan['kurang_ak'] * $constraint['persen_penelitian']) { ?>
                        <td style="color: red;">Belum Tercukupi</td>
                    <?php } else { ?>
                        <td>Tercukupi</td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>3.</td>
                    <td class="text-left" style="font-weight: bold;">Pengabdian Masyarakat</td>
                    <td><?= $persentase_pengmas; ?>%</td>
                    <td><?= $total_pengmas; ?></td>
                    <?php if ($total_pengmas > $data_pengajuan['kurang_ak'] * $constraint['persen_pengmas']) { ?>
                        <td style="color: red;">Terlalu Banyak</td>
                    <?php } elseif ($total_pengmas + $data_ak['ak_pengmas'] < 0.5) { ?>
                        <td style="color: red;">Belum Tercukupi</td>
                    <?php } else { ?>
                        <td>Tercukupi</td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>4.</td>
                    <td class="text-left" style="font-weight: bold;">Unsur Penunjang</td>
                    <td><?= $persentase_penunjang; ?>%</td>
                    <td><?= $total_penunjang; ?></td>
                    <?php if ($total_penunjang > $data_pengajuan['kurang_ak'] * $constraint['persen_penunjang']) { ?>
                        <td style="color: red;">Terlalu Banyak</td>
                    <?php } else { ?>
                        <td>Tercukupi</td>
                    <?php } ?>
                </tr>

            </tbody>
            <tfoot>
                <tr style="height: 5rem;">
                    <th colspan="3">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th colspan="2"><?= $total_AK; ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class="pt-3"></div>

<div class="container-fluid text-center pt-5 pb-5">
    <div class="justify-content-between">
        <a href="<?= base_url('dosen/pengajuan_unsur/' . $data_pengajuan['id_pengajuan']); ?>" class="btn btn-primary text-center btn-user btn=block" style="width: 400px;">
            Kembali ke Halaman Pengajuan
        </a>
    </div>
</div>
<script>
    var myWindow;

    function closeWin() {
        myWindow.close();
    }
</script>

<style>
    select.f {
        width: 120px;
        border: none;
    }

    .font_col_1 {
        font-size: 20px;
        font-weight: bold;
        text-align: right;
        color: chartreuse;
    }
</style>