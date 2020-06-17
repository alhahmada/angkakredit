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
        <div class="card shadow col-xl-7 mb-4">
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
                                width: 45%;
                                font-weight: bold;
                            }
                        </style>
                        <table class="table-bio">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td><?= $array['nama_lengkap'] ?></td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td><?= $array['nip'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td><?= $array['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jabatan Fungsional</td>
                                    <td><?= $array['jabatan_fungsi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pangkat</td>
                                    <td><?= $array['pangkat']; ?></td>
                                </tr>
                                <tr>
                                    <td>Golongan Ruang</td>
                                    <td><?= $array['golongan_ruang']; ?></td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td><?= $array['no_hp'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Area Kedua -->

        <div class="card shadow col-xl-5 mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Angka Kredit Saat ini</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <div class="chart-piee" style="text-align : center;">
                    <canvas id="myChart" style="width: 100%; height: auto;"></canvas>
                </div>
            </div>
        </div>

    </div>




    <!-- Area Full 1 -->
    <div class="container-fluid" style="width: 100%;">
        <div class="card shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">History Pengajuan</h6>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="chart-piee">
                    <div class="container pt-4 pb-5" style="width: 100%;">
                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pengajuan</th>
                                    <th>Tanggal Pengajuan (Y-M-d)</th>
                                    <th>Progress Pengajuan</th>
                                    <th>Progress Log</th>
                                    <th>Angka Kredit yang diterima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pengajuan as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $data['id_pengajuan']; ?></td>
                                        <td><?= $data['tgl_pengajuan']; ?></td>
                                        <td><?= $data['progress_pengajuan']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" href="<?= base_url('dosen/log_pengajuan/' . $data['id_pengajuan']); ?>">
                                                <span>Lihat Log</span>
                                            </a>
                                        </td>
                                        <td><?= $data['ak_diterima']; ?></td>
                                    <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="container" style="width: 100%; height: 4 rem;">
                        <style>
                            .table-ket {
                                width: 100%;
                                text-align: left;
                                font-size: 16px;
                                margin-top: 1.5rem;
                                color: black;
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
                                    <td>"0" : Pengajuan Telah Dikirim</td>
                                    <td>"3" : Tim Penilai Telah Ditentukan</td>
                                    <td>"6" : Selesai</td>
                                </tr>
                                <tr>
                                    <td>"1" : Berkas Sudah Diverifikasi</td>
                                    <td>"4" : Penilaian Oleh Tim Selesai</td>
                                    <td>"7" : Pengajuan Ditolak</td>
                                </tr>
                                <tr>
                                    <td>"2" : Poin Pengajuan Sudah Terverifikasi </td>
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
                <h6 class="m-0 font-weight-bold text-primary">Alur Pengajuan Angka Kredit</h6>
            </div>
            <!-- Body -->
            <div class="card-body">
                <style>
                    .container-foto {
                        width: 90%;
                        margin: 0 auto;
                        position: relative;
                    }

                    .alur {
                        width: 100%;
                        height: auto;
                        margin-top: 1rem;
                        margin-bottom: 1rem;

                    }
                </style>
                <div class="chart-piee pt-4 pb-2">
                    <div class="container-foto">
                        <img class="alur" src="<?= base_url('assets/img/alur.png'); ?>"></img>
                    </div>
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
    <style>
        .buttona {
            background-color: #282b3b;
            width: 26rem !important;
        }

        .buttona:hover {
            background-color: #5a5c69;
        }
    </style>

    <div class="row  justify-content-center">
        <div class="col-lg-5 mb-4">
            <a type="button" class="card buttona text-white nav-link shadow" target="_blank" href="<?php echo base_url('/assets/document/docs/PO-PAK-RISTEKDIKTI-2019.pdf'); ?>">
                <div class="card-body">
                    Panduan Ristekdikti
                </div>
            </a>
        </div>
        <div class="col-lg-5 mb-4">
            <a class="card buttona text-white nav-link shadow" target="_blank" href="<?php echo base_url('/assets/document/docs/contoh.pdf'); ?>">
                <div class="card-body">
                    Format Daftar Usulan PAK
                </div>
            </a>
        </div>
        <div class="col-lg-5 mb-4">
            <a class="card buttona text-white nav-link shadow" target="_blank" href="<?php echo base_url('/assets/document/docs/contoh.pdf'); ?>">
                <div class="card-body">
                    Format Berkas Pengajuan
                </div>
            </a>
        </div>
        <div class="col-lg-5 mb-4">
            <a class="card buttona text-white nav-link shadow" target="_blank" href="<?php echo base_url('/assets/document/docs/contoh.pdf'); ?>">
                <div class="card-body">
                    Pedoman Pengajuan
                </div>
            </a>
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

<script></script>

<script type="text/javascript">
    Chart.defaults.global.maintainAspectRatio = false;
    var data = {
        labels: ["Asisten Ahli", "Lektor", "Lektor Kepala", "Profesor"],
        datasets: [{
            data: [3, 3, 8, 7],
            backgroundColor: ['#4e73df', '#1cc88a', '#4e73df', '#1cc88a'],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2e59d9', '#17a673'],
            hoverBorderColor: "rgba(234, 244, 1)",
        }]
    };

    Chart.pluginService.register({
        beforeDraw: function(chart) {
            var width = chart.chart.width,
                height = chart.chart.height,
                ctx = chart.chart.ctx;

            ctx.restore();
            var fontSize = (height / 114).toFixed(2);
            ctx.font = fontSize + "em sans-serif";
            ctx.textBaseline = "middle";

            var text = <?= $array['angka_kredit'] ?>,
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 2;

            ctx.fillText(text, textX, textY);
            ctx.save();
        }
    });

    var chart = new Chart(document.getElementById('myChart'), {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 65,
        }
    });
</script>