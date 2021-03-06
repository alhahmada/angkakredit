<div class="container-fluid">
    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Database User</h1>
            <style>
                .head-content {
                    font-size: 30px;
                    color: #4e73df;
                    font-weight: bold;
                    font-family: Cambria;
                }

                .head-sub-content {
                    font-size: 22px;
                    color: black;
                    font-weight: bold;
                    font-family: Cambria;
                }

                .body-content {
                    font-size: 16px;
                    color: black;
                    font-family: 'Times New Roman';
                }

                .button-tabel {
                    margin-right: 10rem;
                    float: right;
                }
            </style>
        </div>
    </div>


    <!-- Pencarian -->
    


    <!-- Tabel Dosen -->
    <div class="container pb-2 pt-4" style="width: 100%; margin-left: 0.25rem; margin-right: 0.25rem;">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
		
                    <table class="table dataTable table-bordered display" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 5%;">No.</th>
                                <th style="width: 11%;">NIP</th>
                                <th style="width: 18%;">Nama Dosen</th>
                                <th style="width: 15%;">Email</th>
                                <th style="width: 8%;">Angka Kredit</th>
                                <th style="width: 10%;">Jabatan</th>
                                <th style="width: 8%;">Pangkat</th>
                                <th style="width: 15%;">Golongan</th>
                                <th style="width: 10%;">History Pengajuan</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 14px; color: black;">
                            <?php $no = 1;
                            foreach ($dosen as $key => $data) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $data['nip']; ?></td>
                                    <td><?= $data['nama_lengkap']; ?></td>
                                    <td><?= $data['email']; ?></td>
                                    <td><?= $data['angka_kredit']; ?></td>
                                    <td><?= $data['jabatan_fungsi']; ?></td>
                                    <td><?= $data['pangkat']; ?></td>
                                    <td><?= $data['golongan_ruang']; ?></td>
                                    <td class="nav-item text-center">
                                        <a class="nav-link" href="<?= base_url('admin/history_dosen/' . $data['nip']); ?>">
                                            <span>Lihat History</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

