<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container p-5">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Daftar Penilaian Angka Kredit</h1>
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


    <!-- Daftar Penilaian Baru-->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Penilaian Baru</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pb-2">

                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Ket. Penilai</th>
                                    <th>Penilaian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Dosen A</td>
                                    <td>10 Mei 2020</td>
                                    <td>Penilai ke-2</td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan'); ?>">
                                            <span>Mulai Penilaian</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Muhammad Ali Irfan</td>
                                    <td>13 Mei 2020</td>
                                    <td>Penilai ke-1</td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan'); ?>">
                                            <span>Mulai Penilaian</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan'); ?>">
                                            <span>-
                                                <!-- Mulai Penilaian -->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan'); ?>">
                                            <span>-
                                                <!-- Mulai Penilaian -->
                                            </span>
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

    <!-- Tahap Sedang DInilai-->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dalam Tahap Sedang Dinilai</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-4 pb-2">


                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Ket. Penilai</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Dosen A</td>
                                    <td>10 Mei 2020</td>
                                    <td>Penilai ke-1</td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan'); ?>">
                                            <span>Lanjutkan Penilaian</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Dimas Nur Ramadhani</td>
                                    <td>18 Mei 2020</td>
                                    <td>Penilai ke-3</td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan'); ?>">
                                            <span>Lanjutkan Penilaian</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan'); ?>">
                                            <span>-
                                                <!-- Lanjutkan Penilaian -->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan'); ?>">
                                            <span>-
                                                <!-- Lanjutkan Penilaian -->
                                            </span>
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

    <!-- Selesai DInilai-->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Selesai Dinilai</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-4 pb-2">


                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Tanggal Submit Penilaian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Dosen A</td>
                                    <td>10 Mei 2020</td>
                                    <td>20 Juni 2020</td>
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

    <style>
        .button-tabel {
            position: absolute;
            bottom: 2px;
            right: 1rem;
        }
    </style>

</div>
<div class="pt-5"></div>