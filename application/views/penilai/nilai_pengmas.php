<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Penilaian Angka Kredit</h1>
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


    <!-- Area Pertama -->
    <div class="container-fluid p-2">
        <div class="card col-xl-6 shadow mb-4">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Keterangan Dosen Pengaju</h6>
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

                            .table-bio tbody td:last-child {
                                width: 50%;
                            }
                        </style>
                        <table class="table-bio">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td><?= $user['nama_lengkap']; ?></td>
                                <tr>
                                    <td>NIP</td>
                                    <td><?= $user['nip']; ?></td>
                                </tr>

                                <tr>
                                    <td>Unit Kerja</td>
                                    <td><?= $user['unit_kerja']; ?></td>
                                </tr>
                                <tr>
                                    <td>Angka Kredit</td>
                                    <td><?= $user['angka_kredit']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pengajuan</td>
                                    <td><?= $user['tgl_pengajuan']; ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Constraint -->
    <div class="container-fluid p-2">
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
                            <td><?= $user['jabatan_fungsi']; ?></td>
                            <td><?= $user['pangkat']; ?></td>
                            <td><?= $user['golongan_ruang']; ?></td>
                            <td><?= $user['angka_kredit']; ?></td>
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
            </div>
        </div>
    </div>


    <!-- Penilaian Pengabdian Masyarakat -->
    <div class="container-fluid p-5">
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

            .greyGridTable thead th:last-child,
            tbody td:last-child {
                width: 14%;
            }

            .greyGridTable tbody td:nth-last-child(2) {
                width: 12%;
            }
        </style>
        <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="head-bab">D. Pengabdian Masyarakat</h5>
        </div>

        <form class="user" enctype="multipart/form-data" method="post" action="<?= base_url('penilai/action_nilai_pengmas'); ?>">
            <input type="hidden" value="<?= $id_pengajuan; ?>" name="id_pengajuan">

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    1. Menduduki jabatan pimpinan pada lembaga pemerintahan/pejabat negara yang harus dibebaskan dari jabatan organiknya tiap semester</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D1">
                    <thead>
                        <tr>
                            <th>Nama Lembaga</th>
                            <th>Jabatan</th>
                            <th>Tahun Menjabat (Sejak)</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($d1 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_d1[]" value="<?= $value['id']; ?>">
                                <td><?= $value['d11']; ?></td>
                                <td><?= $value['d12']; ?></td>
                                <td><?= $value['d13']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d14'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_d1[$urut]['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d1[]" step="0.1" max="<?= $maks_d1[$urut]['ak_maksimal']; ?>" style="width: 4rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    2. Melaksanakan pengembangan hasil pendidikan, dan penelitian yang dapat dimanfaatkan oleh masyarakat/industri setiap program</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D2">
                    <thead>
                        <tr>
                            <th>Judul Penelitian/Nama Program</th>
                            <th>Tahun Diterapkan/Diterbitkan</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($d2 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_d2[]" value="<?= $value['id']; ?>">
                                <td><?= $value['d21']; ?></td>
                                <td><?= $value['d22']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d23'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_d2[$urut]['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d2[]" step="0.1" max="<?= $maks_d2[$urut]['ak_maksimal']; ?>" style="width: 4rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    3. Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat, terjadwal/terprogram (Setiap Program)</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D3">
                    <thead>
                        <tr>
                            <th>Nama Program</th>
                            <th>Tahun Pelaksanaan</th>
                            <th>Lama Pelaksanaan</th>
                            <th>Tingkat</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($d3 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_d3[]" value="<?= $value['id']; ?>">
                                <td><?= $value['d31']; ?></td>
                                <td><?= $value['d32']; ?></td>
                                <td><?= $value['d33']; ?></td>
                                <td><?= $value['d34']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d35'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_d3[$urut]['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d3[]" step="0.1" max="<?= $maks_d3[$urut]['ak_maksimal']; ?>" style="width: 4rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    4. Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan, tiap program</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D4">
                    <thead>
                        <tr>
                            <th>Jenis Pelayanan</th>
                            <th>Tahun Pelaksanaan</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($d4 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_d4[]" value="<?= $value['id']; ?>">
                                <td><?= $value['d41']; ?></td>
                                <td><?= $value['d42']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d43'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_d4[$urut]['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d4[]" step="0.1" max="<?= $maks_d4[$urut]['ak_maksimal']; ?>" style="width: 4rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    5. Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan, tiap karya</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D5">
                    <thead>
                        <tr>
                            <th>Jenis Karya</th>
                            <th>Tahun Pembuatan</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($d5 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_d5[]" value="<?= $value['id']; ?>">
                                <td><?= $value['d51']; ?></td>
                                <td><?= $value['d52']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d53'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_d5[$urut]['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d5[]" step="0.1" max="<?= $maks_d5[$urut]['ak_maksimal']; ?>" style="width: 4rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    6. Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal pengabdian kepada masyarakat atau teknologi tepat guna, merupakan diseminasi dari iuran program kegiatan pengabdian kepada masyarakat, tiap karya</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D6">
                    <thead>
                        <tr>
                            <th>Jenis Karya</th>
                            <th>Tahun Pembuatan</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($d6 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_d6[]" value="<?= $value['id']; ?>">
                                <td><?= $value['d61']; ?></td>
                                <td><?= $value['d62']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d63'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_d6[$urut]['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d6[]" step="0.1" max="<?= $maks_d6[$urut]['ak_maksimal']; ?>" style="width: 4rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>

            <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                <h5 class="head-subbab">
                    7. Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun)</h5>
            </div>

            <div class="pb-5 pt-3">
                <table class="greyGridTable D7">
                    <thead>
                        <tr>
                            <th>Nama Pengelola Jurnal</th>
                            <th>Level Jurnal</th>
                            <th>Jabatan (Option)</th>
                            <th>Tahun</th>
                            <th>Lampirkan Bukti</th>
                            <th>AK Maksimal</th>

                            <th>AK yang diberikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 0;
                        foreach ($d7 as $key => $value) { ?>
                            <tr>
                                <input type="hidden" name="id_bab_d7[]" value="<?= $value['id']; ?>">
                                <td><?= $value['d71']; ?></td>
                                <td><?= $value['d72']; ?></td>
                                <td><?= $value['d73']; ?></td>
                                <td><?= $value['d74']; ?></td>
                                <td class="nav-item text-center">
                                    <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['d75'] . '.pdf'); ?>">
                                        <span>Cek Berkas</span>
                                    </a>
                                </td>
                                <td><?= $maks_d7[$urut]['ak_maksimal']; ?></td>
                                <td><input type="number" name="nilai_d7[]" step="0.1" max="<?= $maks_d7[$urut]['ak_maksimal']; ?>" style="width: 4rem;"></input></td>
                            </tr>
                        <?php $urut++;
                        }
                        unset($urut); ?>
                    </tbody>
                </table>
            </div>

            <div class="p-3"></div>


            <div class="container row">
                <div class="col-sm-9">
                    <button type="button" href="<?= base_url('penilai/nilai_penelitian'); ?>" class="float-right btn btn-primary btn-user btn=block">
                        Sebelumnya
                    </button>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="float-right btn btn-primary btn-user btn=block">
                        Selanjutnya
                    </button>
                </div>
            </div>

        </form>
    </div>


</div>