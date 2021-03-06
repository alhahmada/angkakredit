<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container p-5">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Daftar Verifikasi Pengajuan Angka Kredit</h1>
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


    <div class="row">

        <!-- Content Column -->
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Verifikasi Baru</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pb-2">

                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Pengajuan</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>

                                    <th>Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengajuan as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $value['id_pengajuan']; ?></td>
                                        <td><?= $value['nama_lengkap']; ?></td>
                                        <td><?= date('d F Y', strtotime($value['tgl_pengajuan'])); ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" href="<?= base_url('verificator/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                                <span>Cek Kelengkapan Berkas</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>

                            </tbody>
                        </table>
                        <style>
                            .button-tabel {
                                position: absolute;
                                bottom: 2px;
                                right: 1rem;
                            }
                        </style>
                    </div>
                    <div class="container" style="width: 100%; height: 4rem;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Selesai Diverifikasi</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-2   pb-2">


                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Pengajuan</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengajuanSV as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $value['id_pengajuan'] ?></td>
                                        <td><?= $value['nama_lengkap'] ?></td>
                                        <td><?= $value['tgl_pengajuan'] ?></td>
                                        <td>Terverifikasi</td>
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


</div>
<style>
    .end-konten {
        padding-top: 4rem !important;
    }
</style>
<div class="end-konten"></div>