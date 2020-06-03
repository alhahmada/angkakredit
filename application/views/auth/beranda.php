<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- KONTEN HALAMAN -->


    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Beranda Dosen</h1>
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

    <!-- 1 Row, 2 Area -->
    <div class="card-deck container col-xl-12">

        <!-- Area Pertama -->
        <div class="card shadow col-xl-8 mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Keterangan Pribadi</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <div class="chart-piee pt-1 pb-2">
                    <div class="col-lg body-content">

                        <style>
                            .table-bio {
                                width: 100%;
                                text-align: left;
                                font-size: 16px;
                                color: black;
                            }

                            .table-bio tbody td {
                                padding-bottom: 0.6rem;
                            }

                            .table-bio tbody td:first-child {
                                width: 50%;
                            }
                        </style>
                        <table class="table-bio">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>$get.Data.User</td>
                                    <!-- <><?= $array['nama_lengkap']; ?> -->
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td>$get.Data.User</td>
                                    <!-- <?= $array['email']; ?> -->
                                </tr>
                                <tr>
                                    <td>Jabatan Fungsional</td>
                                    <td>$get.Data.User</td>
                                    <!-- <?= $array['jabatan_fungsi']; ?> -->
                                </tr>
                                <tr>
                                    <td>Pangkat/Gol.Ruang</td>
                                    <td>$get.Data.User</td>
                                    <!-- <?= $array['pangkat'] . "/" . $array['golongan_ruang']; ?> -->
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>$get.Data.User</td>
                                    <!--<?= $array['nip']; ?>-->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Area Kedua -->

        <div class="card shadow col-xl-4 mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Angka Kredit Saat ini</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <div class="chart-piee pt-4 pb-2">

                    <h6>Pie Chart Angka Kredit</h6>


                </div>
            </div>
        </div>

    </div>




    <!-- Area Full 1 -->
    <div class="container-fluid col-xl-12">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">History Pengajuan</h6>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="chart-pie">
                    <div class="pt-4 pb-5">
                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Progress Pengajuan</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                    <th>Angka Kredit yang diterima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pt-2 pb-2">
                        <style>
                            .table-ket {
                                width: 100%;
                                text-align: left;
                                font-size: 16px;
                                color: black;
                                position: absolute;
                                bottom: 0px;
                            }

                            .table-ket thead th {
                                font-weight: bold;
                                font-size: 13px;
                            }

                            .table-ket tbody td {
                                width: 33%;
                                font-style: italic;
                                font-size: 12px;
                            }
                        </style>
                        <table class="table-ket">
                            <thead>
                                <tr>
                                    <th colspan="3">Keterangan / Status :</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>"0" : Pengajuan</td>
                                    <td>"3" : Pemilihan Tim Penilai</td>
                                    <td>"6" : Selesai</td>
                                </tr>
                                <tr>
                                    <td>"1" : Verifikasi Berkas</td>
                                    <td>"4" : Penilaian</td>
                                    <td>"7" : Pengajuan Ditolak</td>
                                </tr>
                                <tr>
                                    <td>"2" : Verifikasi Poin Pengajuan</td>
                                    <td>"5" : Penetapan Angka Kredit</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- Area Full 2 -->
    <div class="container-fluid col-xl-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tata Cara Pengajuan</h6>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="chart-piee pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
        </div>
    </div>





    <!-- Lainnya -->
    <div class="container-fluid">
        <div class="row col-lg-6 mb-4 pt-5  ">
            <h1 class="head-content">Unduh / Download</h1>
        </div>
    </div>

    <div class="row  justify-content-center">
        <div class="col-lg-5 mb-4">
            <div class="card text-white shadow" style="background-color: #282b3b;">
                <div class="card-body">
                    Panduan Ristekdikti
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-4">
            <div class="card bg-dark text-white shadow">
                <div class="card-body">
                    Format Daftar Usulan PAK
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-4">
            <div class="card bg-dark text-white shadow">
                <div class="card-body">
                    Format Berkas Pengajuan
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-4">
            <div class="card text-white shadow" style="background-color: #282b3b;">
                <div class="card-body">
                    Pedoman Pengajuan
                </div>
            </div>
        </div>

    </div>

</div>

<div class="pb-5"></div>




<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>