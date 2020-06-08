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
            <h5 class="pt-1 pb-1 text-center body-content-a1">Pengajuan</h5>
            <table class="greyGridTable" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                <thead>
                    <tr>
                        <th></th>
                        <th>Jabatan Fungsional</th>
                        <th>Pangkat</th>
                        <th>Golongan Ruang</th>
                        <th>Angka Kredit</th>
                    </tr>
                </thead>
                <tbody style="font-weight: bold;">
                    <tr>
                        <td>Saat Ini </td>
                        <td><?= $array['jabatan_fungsi']; ?></td>
                        <td><?= $array['pangkat']; ?></td>
                        <td><?= $array['golongan_ruang']; ?></td>
                        <td><?= $array['angka_kredit']; ?></td>
                    </tr>
                    <tr>
                        <td>Diajukan Ke- </td>
                        <td><?= $data_pengajuan['jabatan_fungsi_to'] ?></td>
                        <td><?= $data_pengajuan['pangkat_to'] ?></td>
                        <td><?= $data_pengajuan['gol_to'] ?></td>
                        <td><?= $data_pengajuan['ak_to'] ?></td>
                    </tr>
                </tbody>
            </table>


            <h5 class="pb-2 body-content-a1">Kum Kekurangan Angka : <?= $data_pengajuan['kurang_ak'] ?></h5>
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
                        <td><?= $constraint['persen_pendidikan']; ?></td>
                        <td><?= $constraint['persen_penelitian']; ?></td>
                        <td><?= $constraint['persen_pengmas']; ?></td>
                        <td><?= $constraint['persen_penunjang']; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Angka Kredit</td>
                        <td><?= $data_pengajuan['kurang_ak'] * $constraint['persen_pendidikan']; ?></td>
                        <td><?= $data_pengajuan['kurang_ak'] * $constraint['persen_penelitian']; ?></td>
                        <td>0.5 - <?= $data_pengajuan['kurang_ak'] * $constraint['persen_pengmas']; ?></td>
                        <td>0 - <?= $data_pengajuan['kurang_ak'] * $constraint['persen_penunjang']; ?></td>
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

                .body-content-a1 {
                    font-weight: bold;
                    font-size: 20px;
                    color: black;
                    margin-left: 3rem;
                }
            </style>
            <h5 class="pt-1 pb-2 body-content-a">Constraint Unsur Penelitian (C)</h5>
            <h5 class="pt-1 pb-2 body-content-1">1. Poin C2 e + C3 Maksimal 5% Dari Total Unsur Penelitian</h5>
            <?php if ($data_pengajuan['jabatan_fungsi_to'] != 'Asisten Ahli' or $data_pengajuan['jabatan_fungsi_to'] != 'Lektor') { ?>
                <h5 class="pt-1 pb-2 body-content-1">2. Poin C1 Jurnal Nasional Maksimal 25% Dari Total Unsur Penelitian</h5>
                <h5 class="pt-1 pb-2 body-content-1">3. Poin C2a + C2b + C2c + C2d Tingkat Nasional Maksimal 25% Dari Total Unsur Penelitian</h5>
            <?php } ?>
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
                $urut = 0;
                foreach ($a1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['a15']); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_a1[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }
                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($a2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['a24'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_a2[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b15'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b1[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b22'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b2[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b3 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b33'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b3[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b4 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b45'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b4[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b5 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b54'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b5[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b6 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b63'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b6[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b7 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b75'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b7[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b8 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b85'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b8[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b9 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b94'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b9[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b10 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b104'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b10[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b11 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b114'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b11[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b12 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b124'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b12[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($b13 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b132'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_b13[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }
                unset($no);
                unset($urut); ?>

            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th class="nav-item text-center">
                        <?= $total_pendidikan[0]['total']; ?>
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
                <?php $no = 1;
                $urut = 0;
                foreach ($c1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c15'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_c1[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($c2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c25'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_c2[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($c3 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c33'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_c3[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($c4 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c44'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_c4[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($c5 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c54'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_c5[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($c6 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c65'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_c6[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($c7 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c75'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_c7[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($c8 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c84'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_c8[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }
                unset($no);
                unset($urut); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th class="nav-item text-center">
                        <?= $total_penelitian[0]['total']; ?>
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
                <?php $no = 1;
                $urut = 0;
                foreach ($d1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d14'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_d1[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($d2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d23'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_d2[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($d3 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d35'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_d3[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($d4 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d43'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_d4[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($d5 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d53'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_d5[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($d6 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d63'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_d6[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($d7 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d75'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_d7[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }
                unset($no);
                unset($urut); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th class="nav-item text-center">
                        <?= $total_pengmas[0]['total']; ?>
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
                <?php $no = 1;
                $urut = 0;
                foreach ($e1 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e14'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e1[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e2 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e26'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e2[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e3 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e35'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e3[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e4 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e44'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e4[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e5 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e54'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e5[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e6 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e65'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e6[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e7 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e73'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e7[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e8 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e84'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e8[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e9 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e94'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e9[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }

                unset($urut); ?>
                <?php
                $urut = 0;
                foreach ($e10 as $key => $value) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td style="text-align: left;"><?= $value['jenis_pengajuan']; ?></td>
                        <td class="nav-item text-center">
                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e104'] . '.pdf'); ?>">
                                <span>Cek Kelengkapan Berkas</span>
                            </a>
                        </td>
                        <td><?= $maks_e10[$urut]['ak_maksimal']; ?></td>
                    </tr>
                <?php $no++;
                    $urut++;
                }
                unset($no);
                unset($urut); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th class="nav-item text-center">
                        <?= $total_penunjang[0]['total']; ?>
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
                    <td><?= $persentase_pendidikan; ?>%</td>
                    <td><?= $total_pendidikan[0]['total']; ?></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td class="text-left">Penelitian</td>
                    <td><?= $persentase_penelitian; ?>%</td>
                    <td><?= $total_penelitian[0]['total'];  ?></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td class="text-left">Pengabdian Masyarakat</td>
                    <td><?= $persentase_pengmas; ?>%</td>
                    <td><?= $total_pengmas[0]['total']; ?></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td class="text-left">Unsur Penunjang</td>
                    <td><?= $persentase_penunjang; ?>%</td>
                    <td><?= $total_penunjang[0]['total']; ?></td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total Maksimal Angka Kredit yang Diperoleh </th>
                    <th><?= $total_AK[0]['total']; ?></th>
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