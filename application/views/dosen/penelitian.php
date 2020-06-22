<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Pengajuan Angka Kredit Dosen</h1>
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
            <h5 class="pt-1 pb-2 body-content-a">Constraint Unsur Penelitian (C)</h5>
            <h5 class="pt-1 pb-2 body-content-1">1. Poin C2 e + C3 Maksimal 5% Dari Total Unsur Penelitian</h5>
            <?php if ($data_pengajuan['jabatan_fungsi_to'] != 'Asisten Ahli' or $data_pengajuan['jabatan_fungsi_to'] != 'Lektor') { ?>
                <h5 class="pt-1 pb-2 body-content-1">2. Poin C1 Jurnal Nasional Maksimal 25% Dari Total Unsur Penelitian</h5>
                <h5 class="pt-1 pb-2 body-content-1">3. Poin C2a + C2b + C2c + C2d Tingkat Nasional Maksimal 25% Dari Total Unsur Penelitian</h5>
            <?php } ?>
        </div>
    </div>
</div>


<!-- Content Row B. Penelitian-->
<div class="container-fluid p-5">
    <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_penelitian'); ?>">
        <input type="hidden" name="id_pengajuan" value="<?php echo $id_pengajuan; ?>">


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
        </style>


        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">C. Penelitian</h5>
        </div>
        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                1. Menghasilkan karya ilmiah sesuai dengan bidang ilmunya</h5>
            <h5 class="head-subbab">
                Maksimal 1 Buku Per Tahun. Untuk Poin Jurnal, Penjelasan Ada di Halaman Informasi</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable C1">
                <thead>
                    <tr>
                        <th>Jenis Karya*</th>
                        <th>Judul Karya</th>
                        <th>Jenjang/ Tingkat/ Bentuk*</th>
                        <th>Tahun</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC1">+ Tambah</button>
        </div>

        <div class="p-3"></div>


        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                2. Hasil penelitian atau hasil pemikiran yang didiseminasikan</h5>
            <h5 class="head-subbab">
                Penjelasan Dilampirkan di Halaman Informasi</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable C2">
                <thead>
                    <tr>
                        <th>Jenis Publikasi</th>
                        <th>Judul Penelitian</th>
                        <th>Tingkat/Jenjang</th>
                        <th>Tahun Didiseminasikan</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC2">+ Tambah</button>
        </div>

        <div class="p-3"></div>



        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                3. Hasil penelitian atau pemikiran atau kerjasama industri yang tidak dipublikasikan (tersimpan dalam perpustakaan) yang dilakukan secara melembaga</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable C3">
                <thead>
                    <tr>
                        <th>Judul Penelitian</th>
                        <th>Tahun Pelaksanaan</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC3">+ Tambah</button>
        </div>

        <div class="p-3"></div>



        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                4. Menerjemahkan/menyadur buku ilmiah yang diterbitkan (ber ISBN)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable C4">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Tahun Pelaksanaan</th>
                        <th>No ISBN</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC4">+ Tambah</button>
        </div>

        <div class="p-3"></div>


        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                5. Mengedit/menyunting karya ilmiah dalam bentuk buku yang diterbitkan (ber ISBN)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable C5">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Tahun Pelaksanaan</th>
                        <th>No ISBN</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC5">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                6. Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HaKI secara nasional atau internasional</h5>
            <h5 class="head-subbab">
                Tingkat/Jenjang pilihan F (Urutan 6) Maksimal 2 Karya Per Semester</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable C6">
                <thead>
                    <tr>
                        <th>Jenis (Option)</th>
                        <th>Judul Karya</th>
                        <th>Tingkat/Jenjang (Option)</th>
                        <th>Tahun Pembuatan</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC6">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                7. Membuat rancangan dan karya teknologi yang tidak dipatenkan; rancangan dan karya seni monumental yang tidak terdaftar di HaKI tetapi telah dipresentasikan pada forum yang teragenda</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable C7">
                <thead>
                    <tr>
                        <th>Jenis (Option)</th>
                        <th>Judul Karya</th>
                        <th>Tingkat/Jenjang (Option)</th>
                        <th>Tahun Pembuatan</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC7">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                8. Membuat rancangan dan kaya seni yang tidak terdaftar HaKI</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable C8">
                <thead>
                    <tr>
                        <th>Unsur</th>
                        <th>Sub Unsur</th>
                        <th>Tingkat</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowC8">+ Tambah</button>
        </div>
        <div class="p-5"></div>

        <div class="pt-3">
            <button data-toggle="modal" type="button" style="margin-right: 8rem; width: 10rem;" data-target="#pengajuanModal" class="float-right btn btn-primary text-center btn-user btn=block">
                Selanjutnya
            </button>
        </div>

        <div class="modal fade" id="pengajuanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajukan Pengajuan ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Klik Lanjutkan Untuk Mengirim Berkas Unsur Penelitian Pengajuan Usulan Penilaian Angka Kredit Anda. Tidak Dapat dilakukan Pengeditan setelah Berkas Disubmit</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" type="submit">Lanjutkan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="p-5"></div>




</div>
</div>