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




<!-- Content Row E. Unsur Penunjang-->
<div class="container-fluid p-5">

    <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_penunjang'); ?>">
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
            <h5 class="head-bab">E. Unsur Penunjang</h5>
        </div>
        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                1. Menjadi anggota dalam suatu panitia/Badan pada perguruan tinggi (Setiap Tahun)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E1">
                <thead>
                    <tr>
                        <th>Nama Badan/Kepanitiaan</th>
                        <th>Jabatan (Option)</th>
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
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowE1">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                2. Menjadi anggota panitia/badan pada lembaga pemerintah (Setiap Kepanitiaan)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E2">
                <thead>
                    <tr>
                        <th>Nama Badan/Kepanitiaan</th>
                        <th>Nama Lembaga</th>
                        <th>Tingkat Kepanitiaan (Option)</th>
                        <th>Jabatan</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowE2">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                3. Menjadi anggota organisasi profesi (Setiap Periode Jabatan)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E3">
                <thead>
                    <tr>
                        <th>Nama Organisasi</th>
                        <th>Tingkatan Organisasi (Option)</th>
                        <th>Jabatan (Option)</th>
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
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowE3">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                4. Mewakili perguruan tinggi/lembaga pemerintah duduk dalam panitia antar lembaga, tiap kepanitiaan </h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E4">
                <thead>
                    <tr>
                        <th>Nama Kepanitiaan</th>
                        <th>Lembaga yang Diwakili</th>
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
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowE4">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                5. Menjadi anggota delegasi nasional ke pertemuan internasional (Setiap Kegiatan)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E5">
                <thead>
                    <tr>
                        <th>Nama Pertemuan internasional</th>
                        <th>Jabatan (Option)</th>
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
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowE5">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                6. Berperan serta aktif dalam pertemuan ilmiah (Setiap Kegiatan)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E6">
                <thead>
                    <tr>
                        <th>Nama Kegiatan/Kepanitiaan</th>
                        <th>Tingkatan (Option)</th>
                        <th>Jabatan (Option)</th>
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
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="float-right" id="addRowE6">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                7. Mendapat tanda jasa/penghargaan</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E7">
                <thead>
                    <tr>
                        <th>Janis Tanda Jasa</th>
                        <th>Tahun Diterima</th>
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
            <button type="button" class="float-right" id="addRowE7">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                8. Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional (Setiap Buku)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E8">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Tingkat Buku (Option)</th>
                        <th>Tahun Terbit</th>
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
            <button type="button" class="float-right" id="addRowE8">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                9. Memiliki prestasi di bidang olahraga/humaniora (Tiap Piagam/Medali)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E9">
                <thead>
                    <tr>
                        <th>Bidang Prestasi (Option)</th>
                        <th>Prestasi yang diperoleh</th>
                        <th>Tingkat (Option)</th>
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
            <button type="button" class="float-right" id="addRowE9">+ Tambah</button>
        </div>

        <div class="p-3"></div>

        <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
            <h5 class="head-subbab">
                10. Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)</h5>
        </div>

        <div class="pb-5 pt-3">
            <table class="greyGridTable E10">
                <thead>
                    <tr>
                        <th>Jabatan (Option)</th>
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
            <button type="button" class="float-right" id="addRowE10">+ Tambah</button>
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
                    <div class="modal-body">Klik Lanjutkan Untuk Mengirim Berkas Unsur Penunjang Pengajuan Usulan Penilaian Angka Kredit Anda. Tidak Dapat dilakukan Pengeditan setelah Berkas Disubmit</div>
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