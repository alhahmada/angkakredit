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

        <div class="container row">
            <div class="col-sm-9">
                <a href="<?= base_url('dosen/pendidikan'); ?>" class="float-right btn btn-primary btn-user btn=block">
                    Sebelumnya
                </a>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="float-right btn btn-primary btn-user btn=block">
                    Selanjutnya
                </button>
            </div>
        </div>

    </form>
    <div class="p-5"></div>




</div>
</div>