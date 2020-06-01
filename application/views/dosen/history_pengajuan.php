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
                            <?php $no=1; foreach ($pengajuan as $key => $data) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['tgl_pengajuan']; ?></td>
                                <td><?= $data['progress_pengajuan']; ?></td>
                                <td><?= $data['tgl_pengajuan']; ?></td>
                                <td><?= $data['id_pengajuan']; ?></td>
                                <td><?= $data['ak_diterima']; ?></td>
                            <?php $no++; } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>