<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container pb-3">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">History Pengajuan Selesai</h1>
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
            </style>
        </div>
    </div>



    <!-- Body -->
    <div class="container">
        <div class="pt-3 pb-3">
            <table class="greyGridTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pengajuan</th>
                        <th>Nama Dosen</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Lihat Log</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pengajuan_tolak as $key => $data) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $data['id_pengajuan']; ?></td>
                            <td><?= $data['nama_lengkap']; ?></td>
                            <td><?= $data['tgl_pengajuan']; ?></td>
                            <td class="nav-item text-center">
                                <a class="nav-link" href="<?= base_url('admin/log_pengajuan/' . $data['id_pengajuan']); ?>">
                                    <span>Lihat Log</span>
                                </a>
                            </td>
                        <?php $no++;
                    } ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="pt-5 pb-2"></div>


</div>