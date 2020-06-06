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

<div class="container-fluid p-5">
    <div class="card shadow" style="width: 100%;">
        <!-- Header -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Constraint Pengajuan</h6>
        </div>
        <!--Body -->
        <div class="card-body">
            <h5 class="pt-1 pb-2 body-content-a">Pengajuan : Dari Lektor Kepala 100 Menuju Lektor Kepala 200</h5>
            <h5 class="pt-1 pb-2 body-content-a">Kum Kekurangan Angka : 100</h5>
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
                        <td>45%</td>
                        <td>35%</td>
                        <td>0,5 - 10%</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Angka Kredit</td>
                        <td>45</td>
                        <td>35</td>
                        <td>10</td>
                        <td>10</td>
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
            </style>

            <h5 class="pt-1 pb-2 body-content-a">Unsur Penelitian (C)</h5>
            <h5 class="pt-1 pb-2 body-content-1">1. Poin C2 e + C3 Maksimal 5% Dari Total Unsur Penelitian</h5>
            <h5 class="pt-1 pb-2 body-content-1">2. Poin C1 Jurnal Nasional Maksimal 25% Dari Total Unsur Penelitian</h5>
            <h5 class="pt-1 pb-2 body-content-1">3. Poin C2a + C2b + C2c + C2d Tingkat Nasional Maksimal 25% Dari Total Unsur Penelitian</h5>
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

    <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="head-bab">A. Pendidikan</h5>
    </div>


    <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
        <h5 class=" head-subbab">
            1. Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah </h5>
    </div>
    <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_pendidikan'); ?>">
        <input type="hidden" name="id_pengajuan" value="<?php echo $id_pengajuan; ?>">
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
                2. Mengikuti diklat prajabatan golongan III</h5>
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
                1. Melaksanakan perkuliahan/tutorial/perkuliahan praktikum dan membimbing,menguji serta menyelenggarakan pendidikan di laboratorium, praktik keguruan, bengkel/studio/kebun percobaan/teknologi pengajaran dan praktik lapangan (setiap semester)</h5>
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
                4. Membimbing dan ikut membimbing dalam menghasilkan disertasi, tesis, skripsi dan laporan akhir studi yang sesuai dengan bidang penugasannya</h5>
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
                5. Bertugas sebagai penguji pada ujian akhir/Profesi (Setiap Mahasiswa)</h5>
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
                6. Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintifik (setiap semester)</h5>
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
                7. Mengambengkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi(Setiap Produk)</h5>
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
                8. Mengembangkan bahan pengajaran/bahan kuliah yang mempunyai nilai kebaharuan(Setiap Produk)</h5>
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
                9. Menyampaikan orasi ilmiah di tingkat perguruan tinggi</h5>
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
                11. Membimbing dosen yang mempunyai jabatan akademik lebih rendah setiap semester(Bagi Min. Lektor Kepala)</h5>
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
                12. Melaksanakan kegiatan datasering dan pencangkokan diluar institusi tempat bekerja (Setiap Semester)</h5>
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

        <div class="container row">
            <div class="col-sm-9">
                <a href="<?= base_url('dosen/pengajuan_dosen'); ?>" class="float-right btn btn-primary btn-user btn=block">
                    Sebelumnya
                </a>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="float-right btn btn-primary btn-user btn=block">Selanjutnya</button>
            </div>
        </div>
    </form>
    <div class="p-5"></div>

</div>