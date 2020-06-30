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
                                    <th>ID Pengajuan</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Penilaian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($pengajuanBN != null) {
                                    $no = 1;
                                    foreach ($pengajuanBN as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $value['id_pengajuan']; ?></td>
                                            <td><?= $value['nama_lengkap']; ?></td>
                                            <td><?= date('d F Y', strtotime($value['tgl_pengajuan'])); ?></td>
                                            <td class="nav-item text-center">
                                                <a class="nav-link" href="<?= base_url('penilai/nilai_pendidikan/' . $value['id_pengajuan']); ?>">
                                                    <span>
                                                        Mulai Penilaian
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    }
                                } else { ?>
                                    <tr style="height: 5 rem;">
                                        <td colspan="5" style="text-align: center; font-weight: bold;"> Tidak Ada Data Pengajuan Untuk Dinilai </td>
                                    </tr>
                                <?php } ?>
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
                                    <th>ID Pengajuan</th>
                                    <th>Nama Dosen</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th style="width: 7rem;">Penilaian Pendidikan</th>
                                    <th style="width: 7rem;">Penilaian Penelitian</th>
                                    <th style="width: 7rem;">Penilaian Pengmas</th>
                                    <th style="width: 7rem;">Penilaian Penunjang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengajuanSN as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $value['id_pengajuan']; ?></td>
                                        <td><?= $value['nama_lengkap']; ?></td>
                                        <td><?= $value['tgl_pengajuan']; ?></td>
                                        <td><?= $value['ak_pendidikan']; ?></td>
                                        <td><?= $value['ak_penelitian']; ?></td>
                                        <td><?= $value['ak_pengmas']; ?></td>
                                        <td><?= $value['ak_penunjang']; ?></td>
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

    <style>
        .button-tabel {
            position: absolute;
            bottom: 2px;
            right: 1rem;
        }
    </style>

</div>
<div class="pt-5"></div>