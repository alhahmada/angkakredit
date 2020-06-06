<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Resume Pengajuan Angka Kredit</h1>
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
</div>


<!-- Constraint -->
<div class="container-fluid p-5">
    <div class="card shadow" style="width: 100%;">
        <!-- Header -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Constraint Pengajuan</h6>
        </div>
        <!--Body -->
        <div class="card-body">
            <h5 class="pt-1 pb-2 body-content-a">Pengajuan : Dari Lektor Kepala 100 Menuju Lektor Kepala 200</h5>
            <h5 class="pt-1 pb-2 body-content-a">Kum Kekurangan Angka : 100</h5>
            <table class="greyGridTable" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                <thead>
                    <tr>
                        <th rowspan="2"></th>
                        <th>Pendidikan</th>
                        <th>Penelitian</th>
                        <th>Pengabdian Masy. </th>
                        <th>Penunjang</th>
                    </tr>
                    <tr>

                        <th>Minimum</th>
                        <th>Minimum</th>
                        <th>Rentang</th>
                        <th>Maksimal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bold;">Persentase</td>
                        <td>45%</td>
                        <td>35%</td>
                        <td>0,5 - 10%</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Angka Kredit</td>
                        <td>45</td>
                        <td>35</td>
                        <td>10</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
            <style>
                .body-content-1 {
                    font-weight: bold;
                    font-size: 14px;
                    color: black;
                    margin-left: 5rem;
                }

                .body-content-a {
                    font-weight: bold;
                    font-size: 16px;
                    color: black;
                    margin-left: 3rem;
                }
            </style>

            <h5 class="pt-1 pb-2 body-content-a">Unsur Penelitian (C)</h5>
            <h5 class="pt-1 pb-2 body-content-1">1. Poin C2 e + C3 Maksimal 5% Dari Total Unsur Penelitian</h5>
            <h5 class="pt-1 pb-2 body-content-1">2. Poin C1 Jurnal Nasional Maksimal 25% Dari Total Unsur Penelitian</h5>
            <h5 class="pt-1 pb-2 body-content-1">3. Poin C2a + C2b + C2c + C2d Tingkat Nasional Maksimal 25% Dari Total Unsur Penelitian</h5>
        </div>
    </div>
</div>



<!-- Resume Pendidikan dan Pengajaran -->
<div class="container-fluid">
    <div class="p-5">

        <style>
            .head-bab {
                font-size: 24px;
                color: #4e73df;
                font-weight: bold;
                font-family: Cambria;
            }

            .head-subbab {
                font-size: 18px;
                color: black;
                font-family: 'Times New Roman';
            }
        </style>

        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">Pendidikan dan Pengajaran</h5>
        </div>


        <table class="greyGridTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jenis Pengajuan</th>
                    <th>Keterangan Lampiran</th>
                    <th>Angka kredit maksimal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($a1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php $no++;
                } ?>
                <?php foreach ($a2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b3 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b4 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b5 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b6 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b7 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b8 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b9 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b10 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b11 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b12 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($b13 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>

            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th class="nav-item text-center">
                        XX..
                    </th>
                </tr>
            </tfoot>

        </table>
    </div>
</div>


<!-- Resume Penelitian -->
<div class="container-fluid">
    <div class="p-5">

        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">Penelitian</h5>
        </div>


        <table class="greyGridTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jenis Pengajuan</th>
                    <th>Keterangan Lampiran</th>
                    <th>Angka kredit maksimal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($c1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($c2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($c3 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($c4 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($c5 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($c6 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($c7 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($c8 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th class="nav-item text-center">
                        XX..
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


<!-- Resume Pengabdian Masyarakat -->
<div class="container-fluid">
    <div class="p-5">

        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">Pengabdian Masyarakat</h5>
        </div>

        <table class="greyGridTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jenis Pengajuan</th>
                    <th>Keterangan Lampiran</th>
                    <th>Angka kredit maksimal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($d1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($d2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($d3 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($d4 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($d5 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($d6 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($d7 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th class="nav-item text-center">
                        XX..
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>



<!-- Unsur Penunjang -->
<div class="container-fluid">
    <div class="p-5">

        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">Unsur Penunjang</h5>
        </div>



        <table class="greyGridTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jenis Pengajuan</th>
                    <th>Keterangan Lampiran</th>
                    <th>Angka kredit maksimal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($e1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e3 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e4 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e5 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e6 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e7 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e8 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e9 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($e10 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" href="<?= base_url('admin/' . $verifikator['unsur_verif'] . '/' . $value['id_pengajuan']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $ak_maks; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th class="nav-item text-center">
                        XX..
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


<!-- Resume Total -->
<div class="container-fluid">
    <div class="p-5">

        <div class="p-2 d-sm-flex text-center align-items-center justify-content-between mb-4">
            <h5 class="head-bab">Total Angka Kredit yang Diajukan</h5>
        </div>



        <table class="greyGridTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Unsur Pengajuan</th>
                    <th>Persentase</th>
                    <th>Total Angka Kredit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td class="text-left">Pendidikan dan Pelaksanaan Pendidikan</td>
                    <td>X1</td>
                    <td>X2</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td class="text-left">Penelitian</td>
                    <td>X1</td>
                    <td>X2</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td class="text-left">Pengabdian Masyarakat</td>
                    <td>X1</td>
                    <td>X2</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td class="text-left">Unsur Penunjang</td>
                    <td>X1</td>
                    <td>X2</td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th>XX..</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class="pt-3"></div>

<div class="container-fluid">
    <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_pengajuan_final'); ?>">

        <!-- Pemilihan Tipe/Jenis Pengajuan -->

        <div class="chart-piee pt-1 pb-1">
            <div class="row container p-2">
                <div class="col-sm-9">
                    <a href="<?= base_url('dosen/penunjang'); ?>" class="float-right btn btn-primary btn-user btn=block">
                        Sebelumnya
                    </a>
                </div>
                <div class="col-sm-2">
                    <button data-toggle="modal" type="button" data-target="#pengajuanModal" class="float-right btn btn-primary btn-user btn=block">
                        Submit Pengajuan
                    </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="pengajuanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajukan Pengajuan ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Klik Lanjutkan Untuk Mengirim Pengajuan Angka Kredit Anda</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" type="submit">Lanjutkan</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

<style>
    select.f {
        width: 120px;
        border: none;
    }

    .font_col_1 {
        font-size: 20px;
        font-weight: bold;
        text-align: right;
        color: chartreuse;
    }
</style>

<div class="p-5"></div>