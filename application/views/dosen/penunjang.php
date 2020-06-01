<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengajuan Angka Kredit Dosen</h1>
        <h5>Unsur Penunjang</h5>
    </div>
</div>



<!-- Content Row E. Unsur Penunjang-->
<div class="container-fluid">

    <div class="p-5">
        <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_penunjang'); ?>">
            <input type="hidden" name="id_pengajuan" value="<?php echo $id_pengajuan; ?>">

            <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                <h5 class="h5 mb-0 text-gray-800">E. Unsur Penunjang</h5>
            </div>
            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    1. Menjadi anggota dalam suatu panitia/Badan pada perguruan tinggi</h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    2. Menjadi anggota panitia/badan pada lembaga pemerintah</h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    3. Menjadi anggota organisasi profesi</h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    4. Mewakili perguruan tinggi/lembaga pemerintah duduk dalam panitia antar lembaga, tiap kepanitiaan </h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    5. Menjadi anggota delegasi nasional ke pertemuan internasional</h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    6. Berperan serta aktif dalam pertemuan ilmiah</h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    7. Mendapat tanda jasa/penghargaan</h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    8. Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional</h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    9. Memiliki prestasi di bidang olahraga/humaniora </h5>
            </div>

            <div class="p-5">
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

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    10. Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)</h5>
            </div>

            <div class="p-5">
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

            <div class="container row">
                <div class="col-sm-9">
                    <a href="<?= base_url('dosen/pengmas'); ?>" class="float-right btn btn-primary btn-user btn=block">
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
</div>