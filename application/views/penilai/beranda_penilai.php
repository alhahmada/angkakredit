<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Beranda Tim Penilai</h1>
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


    <!-- Area Full 1 -->
    <div class="container-fluid col-xl-12">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Keterangan Pribadi Penilai</h6>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="chart-piee pt-1">
                    <div class="col-lg body-content">
                        <style>
                            .table-bio {
                                width: 50%;
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
                                    <td><?= $array['nama_lengkap']; ?></td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td><?= $array['nip']; ?></td>
                                </tr>
                                <tr>
                                    <td>Pangkat/Gol.Ruang</td>
                                    <td><?= $array['pangkat'] . "/" . $array['golongan_ruang']; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td><?= $array['email']; ?></td>
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
                <h6 class="m-0 font-weight-bold text-primary">Daftar Penilaian</h6>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="chart-piee pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
        </div>
    </div>


    <!-- Area Full 3 -->
    <div class="container-fluid col-xl-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Alur Penilaian</h6>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="chart-piee pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
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