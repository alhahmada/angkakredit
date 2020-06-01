<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengajuan Angka Kredit Dosen</h1>
        <h5>Pengabdian Masyarakat</h5>
    </div>
</div>



<!-- Content Row A. Pendidikan-->
<div class="container-fluid">
    <div class="p-5">
        <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_pengmas'); ?>">
            <input type="hidden" name="id_pengajuan" value="<?php echo $id_pengajuan; ?>">

            <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                <h5 class="h5 mb-0 text-gray-800">D. Pelaksanaan Pengabdian Kepada Masyarakat</h5>
            </div>
            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    1. Menduduki jabatan pimpinan pada lembaga pemerintahan/pejabat negara yang harus dibebaskan dari jabatan organiknya tiap semester</h5>
            </div>

            <div class="p-5">
                <table class="greyGridTable D1">
                    <thead>
                        <tr>
                            <th>Nama Lembaga</th>
                            <th>Jabatan</th>
                            <th>Tahun Menjabat (Sejak)</th>
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
                <button type="button" class="float-right" id="addRowD1">+ Tambah</button>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    2. Melaksanakan pengembangan hasil pendidikan, dan penelitian yang dapat dimanfaatkan oleh masyarakat/industri setiap program</h5>
            </div>

            <div class="p-5">
                <table class="greyGridTable D2">
                    <thead>
                        <tr>
                            <th>Judul Penelitian/Nama Program</th>
                            <th>Tahun Diterapkan/Diterbitkan</th>
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
                <button type="button" class="float-right" id="addRowD2">+ Tambah</button>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    3. Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat, terjadwal/terprogram</h5>
            </div>

            <div class="p-5">
                <table class="greyGridTable D3">
                    <thead>
                        <tr>
                            <th>Nama Program</th>
                            <th>Tahun Pelaksanaan</th>
                            <th>Lama Pelaksanaan</th>
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
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="float-right" id="addRowD3">+ Tambah</button>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    4. Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan</h5>
            </div>

            <div class="p-5">
                <table class="greyGridTable D4">
                    <thead>
                        <tr>
                            <th>Jenis Pelayanan</th>
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
                <button type="button" class="float-right" id="addRowD4">+ Tambah</button>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    5. Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan, tiap karya</h5>
            </div>

            <div class="p-5">
                <table class="greyGridTable D5">
                    <thead>
                        <tr>
                            <th>Jenis Karya</th>
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
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="float-right" id="addRowD5">+ Tambah</button>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    6. Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal pengabdian kepada masyarakat atau teknologi tepat guna, merupakan diseminasi dari iuran program kegiatan pengabdian kepada masyarakat, tiap karya</h5>
            </div>

            <div class="p-5">
                <table class="greyGridTable D6">
                    <thead>
                        <tr>
                            <th>Jenis Karya</th>
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
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="float-right" id="addRowD6">+ Tambah</button>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-4">
                <h5 class="h6 mb-0 text-gray-800">
                    7. Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun)</h5>
            </div>

            <div class="p-5">
                <table class="greyGridTable D7">
                    <thead>
                        <tr>
                            <th>Nama Pengelola Jurnal</th>
                            <th>Level Jurnal</th>
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
                <button type="button" class="float-right" id="addRowD7">+ Tambah</button>
            </div>

            <div class="p-5"></div>

            <div class="container row">
                <div class="col-sm-9">
                    <a href="<?= base_url('dosen/penelitian'); ?>" class="float-right btn btn-primary btn-user btn=block">
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