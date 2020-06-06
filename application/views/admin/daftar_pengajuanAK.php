<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Judul Halaman -->
    <div class="container p-5">
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Daftar Pengajuan Angka Kredit Dosen</h1>
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

    <!-- Tabel Baru Diajukan -->
    <div class="row">
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan Baru Diajukan</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pb-2">

                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengajuan as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $value['nama_lengkap']; ?></td>
                                        <td><?= date('d F Y', strtotime($value['tgl_pengajuan'])); ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" href="<?= base_url('admin/cek_berkas/' . $value['id_pengajuan']); ?>">
                                                <span>Cek Kelengkapan Berkas</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="container" style="width: 100%; height: 4rem;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Tahap Verifikasi -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan dalam Tahap Verifikasi</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-2 pb-2">
                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Berkas Terverifikasi</th>
                                    <th>Verifikasi Unsur Pendidikan</th>
                                    <th>Verifikasi Unsur Penelitian</th>
                                    <th>Verifikasi Unsur Pegabdian Masy.</th>
                                    <th>Verifikasi Unsur Penunjang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengajuan1 as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $value['nama_lengkap']; ?></td>
                                        <td><?= date('d F Y', strtotime($value['tgl_pengajuan'])); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                                <span>Cek Kelengkapan Berkas</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="container" style="width: 100%; height: 4rem;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Tahap Alokasi Tim Penilai -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan dalam Tahap Pengalokasian Tim Penilai</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-4 pb-2">


                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Pilih Tim Penilai</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Dosen A</td>
                                    <td>10 Mei 2020</td>
                                    <td class="nav-item text-center">
                                        <script>

                                        </script>

                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" id="btn_pilih_penilai" data-target="#modal_pilih_penilai">Pilih Tim Penilai</button>
                                        <div class="modal fade" id="modal_pilih_penilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Pilih Penilai Pertama
                                                        <select style="width: 20%" id="penilai1" name="penilai1" onchange="optionp1(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> Anzjay </option>
                                                            <option value="B"> Bajaj </option>
                                                            <option value="C"> Cakwe </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-body">Pilih Penilai Kedua
                                                        <select style="width: 20%" id="penilai2" name="penilai2" onchange="optionp2(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> A </option>
                                                            <option value="B"> B </option>
                                                            <option value="C"> C </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-body">Pilih Penilai Ketiga
                                                        <select style="width: 20%" id="penilai2" name="penilai2" onchange="optionp2(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> A </option>
                                                            <option value="B"> B </option>
                                                            <option value="C"> C </option>
                                                        </select>
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tetapkan Penilai</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Dosen F</td>
                                    <td>17 Mei 2020</td>
                                    <td class="nav-item text-center">
                                        <script>

                                        </script>

                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" id="btn_pilih_penilai" data-target="#modal_pilih_penilai">Pilih Tim Penilai</button>
                                        <div class="modal fade" id="modal_pilih_penilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Pilih Penilai Pertama
                                                        <select style="width: 20%" id="penilai1" name="penilai1" onchange="optionp1(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> Anzjay </option>
                                                            <option value="B"> Bajaj </option>
                                                            <option value="C"> Cakwe </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-body">Pilih Penilai Kedua
                                                        <select style="width: 20%" id="penilai2" name="penilai2" onchange="optionp2(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> A </option>
                                                            <option value="B"> B </option>
                                                            <option value="C"> C </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-body">Pilih Penilai Ketiga
                                                        <select style="width: 20%" id="penilai2" name="penilai2" onchange="optionp2(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> A </option>
                                                            <option value="B"> B </option>
                                                            <option value="C"> C </option>
                                                        </select>
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tetapkan Penilai</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Aditya Faizal Arifin</td>
                                    <td>21 Mei 2020</td>
                                    <td class="nav-item text-center">
                                        <script>

                                        </script>

                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" id="btn_pilih_penilai" data-target="#modal_pilih_penilai">Pilih Tim Penilai</button>
                                        <div class="modal fade" id="modal_pilih_penilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Pilih Penilai Pertama
                                                        <select style="width: 20%" id="penilai1" name="penilai1" onchange="optionp1(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> Anzjay </option>
                                                            <option value="B"> Bajaj </option>
                                                            <option value="C"> Cakwe </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-body">Pilih Penilai Kedua
                                                        <select style="width: 20%" id="penilai2" name="penilai2" onchange="optionp2(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> A </option>
                                                            <option value="B"> B </option>
                                                            <option value="C"> C </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-body">Pilih Penilai Ketiga
                                                        <select style="width: 20%" id="penilai2" name="penilai2" onchange="optionp2(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> A </option>
                                                            <option value="B"> B </option>
                                                            <option value="C"> C </option>
                                                        </select>
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tetapkan Penilai</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <script>

                                        </script>

                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" id="btn_pilih_penilai" data-target="#modal_pilih_penilai">Pilih Tim Penilai</button>
                                        <div class="modal fade" id="modal_pilih_penilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Pilih Penilai Pertama
                                                        <select style="width: 20%" id="penilai1" name="penilai1" onchange="optionp1(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> Anzjay </option>
                                                            <option value="B"> Bajaj </option>
                                                            <option value="C"> Cakwe </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-body">Pilih Penilai Kedua
                                                        <select style="width: 20%" id="penilai2" name="penilai2" onchange="optionp2(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> A </option>
                                                            <option value="B"> B </option>
                                                            <option value="C"> C </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-body">Pilih Penilai Ketiga
                                                        <select style="width: 20%" id="penilai2" name="penilai2" onchange="optionp2(this)">
                                                            <option value="" selected disabled hidden> ... </option>
                                                            <option value="A"> A </option>
                                                            <option value="B"> B </option>
                                                            <option value="C"> C </option>
                                                        </select>
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tetapkan Penilai</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container" style="width: 100%; height: 4rem;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tahap Penilaian -->
    <div class="row">
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan dalam Tahap Penilaian</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-4 pb-2">


                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Penilai 1</th>
                                    <th>Penilai 2</th>
                                    <th>Penilai 3</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Dosen A</td>
                                    <td>10 Mei 2020</td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>Belum Dinilai</span>
                                        </a>
                                    </td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>Belum Dinilai</span>
                                        </a>
                                    </td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>Sudah Dinilai</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Made Indra Prastya</td>
                                    <td>11 Mei 2020</td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>Belum Dinilai</span>
                                        </a>
                                    </td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>Belum Dinilai</span>
                                        </a>
                                    </td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>Sudah Dinilai</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/cek_berkas#'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container" style="width: 100%; height: 4rem;"></div>
                </div>
            </div>
        </div>
    </div>

    <!--Tahap Penetapan Angka Kredit -->
    <div class="row">
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan dalam Tahap Penetapan Angka Kredit</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-4 pb-2">


                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Penetapan Angka Kredit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Dosen A</td>
                                    <td>10 Mei 2020</td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/penetapan_ak_pendidikan'); ?>">
                                            <span>Mulai Tahap Penetapan</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/penetapan_ak_pendidikan'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/penetapan_ak_pendidikan'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/penetapan_ak_pendidikan'); ?>">
                                            <span>-</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container" style="width: 100%; height: 4rem;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengajuan Selesai -->
    <div class="row">
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan Selesai</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-4 pb-2">


                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Angka Kredit Final</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Dosen A</td>
                                    <td>10 Mei 2020</td>
                                    <td>X11</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container" style="width: 100%; height: 4rem;"></div>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="pt-5"></div>