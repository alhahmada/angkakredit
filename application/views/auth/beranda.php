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
    <div class="container row">

        <!-- Area Pertama -->
        <div class="col-xl-8  col-lg-5">
            <div class="card shadow mb-4">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Keterangan Pribadi</h6>
                </div>
                <!--Body -->
                <div class="card-body">
                    <div class="chart-piee pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Area Kedua -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Angka Kredit Saat ini</h6>
                </div>
                <!--Body -->
                <div class="card-body">
                    <div class="chart-piee pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>

                    </div>
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
    <div class="container">
        <div class="row col-lg-6 mb-4">
            <h1 class="head-content">Lainnya</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 mb-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    Panduan Ristekdikti
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