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






<!-- Content Row A. Pendidikan-->
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
    </style>

    <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_pendidikan'); ?>">
        <input type="hidden" name="id_pengajuan" value="<?php echo $id_pengajuan; ?>">

        <!-- <?php print_r($this->session->userdata);
                if ($error == 'error') { ?>
            <div style="width: 100%;background-color: red;color: black;text-align: center;">
                Angka Kredit Unsur Pendidikan Tidak Cukup!
                Isi Ulang dan Pastikan Mencukupi Angka Kredit Minimum!
            </div>
        <?php } ?> -->

        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">A. Pendidikan</h5>
        </div>
        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                1. Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah (1/periode Penilaian)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable A1 p-3">
                <thead>
                    <tr>
                        <th>Tingkatan Pendidikan</th>
                        <th>Universitas/Institusi</th>
                        <th>Tahun Masuk</th>
                        <th>Tahun Keluar</th>
                        <th>Lampirkan Scan Ijazah</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowA1">+ Tambah</button>
        </div>



        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                2. Mengikuti diklat prajabatan golongan III (1/periode Penilaian)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable A2">
                <thead>
                    <tr>
                        <th>Nama Diklat</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
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
            <button type="button" class="float-right" id="addRowA2">+ Tambah</button>
        </div>

        <div class="p-3"></div>




        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">B. Pelaksanaan Pendidikan</h5>
        </div>




        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                1. Melaksanakan perkuliahan/tutorial/perkuliahan praktikum dan membimbing,menguji serta menyelenggarakan pendidikan di laboratorium, praktik keguruan, bengkel/studio/kebun percobaan/teknologi pengajaran dan praktik lapangan (Maks 12 SKS/semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B1">
                <thead>
                    <tr>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
                        <th>Jumlah SKS</th>
                        <th>Mata Kuliah</th>
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
            <button type="button" class="float-right" id="addRowB1">+ Tambah</button>
        </div>

        <div class="p-3"></div>




        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                2. Membimbing seminar mahasiswa (Setiap Semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B2">
                <thead>
                    <tr>
                        <th>Tahun Akademik</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowB2">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                3. Membimbing Paktik Kerja Lapangan (Setiap Semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B3">
                <thead>
                    <tr>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
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
            <button type="button" class="float-right" id="addRowB3">+ Tambah</button>
        </div>

        <div class="p-3"></div>


        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                4. Membimbing dan ikut membimbing dalam menghasilkan disertasi, tesis, skripsi dan laporan akhir studi yang sesuai dengan bidang penugasannya (Setiap Semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B4">
                <thead>
                    <tr>
                        <th>Jenis(Option)</th>
                        <th>Tugas/Peran (Option)</th>
                        <th>Tahun Akademik</th>
                        <th>Jumlah Mahasiswa (Option)</th>
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
            <button type="button" class="float-right" id="addRowB4">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                5. Bertugas sebagai penguji pada ujian akhir/Profesi (Setiap Semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B5">
                <thead>
                    <tr>
                        <th>Jabatan Dalam Sidang (Option)</th>
                        <th>Tahun Akademik</th>
                        <th>Jumlah Mahasiswa</th>
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
            <button type="button" class="float-right" id="addRowB5">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                6. Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintifik (2 Kegiatan/semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B6">
                <thead>
                    <tr>
                        <th>Jenis (Isian)</th>
                        <th>Tahun Akademik</th>
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
            <button type="button" class="float-right" id="addRowB6">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                7. Mengambangkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi(Maks 1 Mata Kuliah/Semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B7">
                <thead>
                    <tr>
                        <th>Jenis (Isian)</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
                        <th>Mata Kuliah</th>
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
            <button type="button" class="float-right" id="addRowB7">+ Tambah</button>
        </div>

        <div class="p-3"></div>


        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                8. Mengembangkan bahan pengajaran/bahan kuliah yang mempunyai nilai kebaharuan(Maks 1 Buku/Tahun dan 2 Produk/Semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B8">
                <thead>
                    <tr>
                        <th>Jenis (Option)</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
                        <th>Mata Kuliah</th>
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
            <button type="button" class="float-right" id="addRowB8">+ Tambah</button>
        </div>

        <div class="p-3"></div>


        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                9. Menyampaikan orasi ilmiah di tingkat perguruan tinggi (Maks 2 Orasi/Semester</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B9">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
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
            <button type="button" class="float-right" id="addRowB9">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                10. Menduduki jabatan pimpinan perguruan tinggi sesuai tugas pokok, fungsi, kewenangan dan/atau setara (Setiap Semester)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B10">
                <thead>
                    <tr>
                        <th>Jabatan yang diduduki (Option)</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
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
            <button type="button" class="float-right" id="addRowB10">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                11. Membimbing dosen yang mempunyai jabatan akademik lebih rendah setiap semester bagi Lektor Kepala atau Profesor (Maks 1 orang)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B11">
                <thead>
                    <tr>
                        <th>Jenis (Option)</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
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
            <button type="button" class="float-right" id="addRowB11">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                12. Melaksanakan kegiatan datasering dan pencangkokan diluar institusi tempat bekerja bagi Lektor Kepala atau Profesor (Maks 1 orang)</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B12">
                <thead>
                    <tr>
                        <th>Jenis (Option)</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
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
            <button type="button" class="float-right" id="addRowB12">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class=" head-subbab">
                13. Melaksanakan pengembangan diri untuk meningkatkan kompetensi</h5>
        </div>
        <div class="pb-5 pt-3">
            <table class="greyGridTable B13">
                <thead>
                    <tr>
                        <th>Lama Program Pengembangan yang diikuti</th>
                        <th>Lampirkan Bukti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowB13">+ Tambah</button>
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
                    <div class="modal-body">Klik Lanjutkan Untuk Mengirim Berkas Unsur Pendidikan Pengajuan Usulan Penilaian Angka Kredit Anda. Tidak Dapat dilakukan Pengeditan setelah Berkas Disubmit</div>
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