<div class="container-fluid">
    <style>
        /* Style the tab */

        /* Style the buttons inside the tab */
        .tab {
            background-color: #494e57;
            color: white;
            float: left;
            border: none;
            border-right: 1px solid black;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 12px;
            width: 20%;
            height: 3.5rem;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            font-family: Cambria;
        }

        .nolep {
            border-right: none !important;
        }

        /* Change background color of buttons on hover */
        .tab:hover {
            background-color: #3c3e42;
        }

        /* Create an active/current tablink class */
        .tab.active {
            background-color: #282b3b;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: none;
            height: 100%;
        }
    </style>

    <div class="container" style="height: 95%;">

        <button class="tab" style="display: block;" onclick="openinfoTab(event, 'batasan')">Berkas Pengajuan</button>
        <button class="tab" onclick="openinfoTab(event, 'pendidikan')">Unsur Pendidikan</button>
        <button class="tab" onclick="openinfoTab(event, 'penelitian')">Unsur Penelitian</button>
        <button class="tab" onclick="openinfoTab(event, 'pengmas')">Unsur Peng. Masy.</button>
        <button class="tab nolep " onclick="openinfoTab(event, 'penunjang')">Unsur Penunjang</button>

        <style>
            .head-content {
                font-size: 25px;
                color: black;
                font-weight: bold;
                font-family: Cambria;
                text-transform: uppercase;
                letter-spacing: 0.05rem;
            }

            .body-content {
                font-size: 18px;
                color: black;
                font-family: 'Times New Roman';
            }

            .text-sorry {
                font-size: 20px !important;
                color: red !important;
            }
        </style>
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

            .hapus {
                width: 30px;
                height: 30px;
                font-size: 20px;
                background-color: tomato;
                color: white;
                border: none;
                border-radius: 15px;
            }
        </style>





        <!-- TAB CONSTRAINT ATAU BATASAN-->
        <div id="batasan" style="display: block;" class="active tabcontent pt-5">
            <!-- Judul Halaman -->
            <div class="container pb-5">
                <!-- Row Pertama -->
                <div class="justify-content-between pb-2 pt-5">
                    <h1 class="head-content">Berkas Pengajuan</h1>
                </div>
            </div>
            <!-- Area Pertama -->
            <div class=" container-fluid pt-3">
                <div class="card-deck container">
                    <!-- Keterangan Dosen Pengaju -->
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
            </div>


            <!-- Constraint -->
            <div class="p-5">
                <div class="card shadow" style="width: 100%;">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Constraint Pengajuan</h6>
                    </div>
                    <div class="card-body pt-5 pb-5">
                        <!-- Jenis Pengajuan -->
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

                        <!-- Kekurangan Angka -->
                        <h5 class="pb-2 body-content-a1">Kum Kekurangan Angka : <?= $data_pengajuan['kurang_ak'] ?></h5>
                        <table class="greyGridTable" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                            <thead>
                                <tr>
                                    <th style="width: 20%;" rowspan="2"></th>
                                    <th style="width: 20%;">Pendidikan</th>
                                    <th style="width: 20%;">Penelitian</th>
                                    <th style="width: 20%;">Pengabdian Masy. </th>
                                    <th style="width: 20%;">Penunjang</th>
                                </tr>
                                <tr>

                                    <th>Minimum</th>
                                    <th>Minimum</th>
                                    <th>Maksimal</th>
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
                                    <td style="font-weight: bold;">AK Kum</td>
                                    <td><?= $data_pengajuan['ak_to'] * $constraint['persen_pendidikan']; ?></td>
                                    <td><?= $data_pengajuan['ak_to'] * $constraint['persen_penelitian']; ?></td>
                                    <td>0.5 - <?= $data_pengajuan['ak_to'] * $constraint['persen_pengmas']; ?></td>
                                    <td>0 - <?= $data_pengajuan['ak_to'] * $constraint['persen_penunjang']; ?></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">AK Saat Ini</td>
                                    <td><?= $data_ak['ak_pendidikan']; ?></td>
                                    <td><?= $data_ak['ak_penelitian']; ?></td>
                                    <td><?= $data_ak['ak_pengmas']; ?></td>
                                    <td><?= $data_ak['ak_penunjang']; ?></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr style="color: black !important; font-weight: bold; height: 4rem;">
                                    <td style=" font-size: 20px;">Kekurangan</td>
                                    <td style=" font-size: 20px;"><?= $data_pengajuan['ak_to'] * $constraint['persen_pendidikan'] - $data_ak['ak_pendidikan']; ?></td>
                                    <td style=" font-size: 20px;"><?= $data_pengajuan['ak_to'] * $constraint['persen_penelitian'] - $data_ak['ak_penelitian']; ?></td>
                                    <?php if ($data_ak['ak_pengmas'] == 0) { ?>
                                        <td style=" font-size: 20px;">0,5 - <?= $data_pengajuan['ak_to'] * $constraint['persen_pengmas'] - $data_ak['ak_pengmas']; ?></td>
                                    <?php } elseif ($data_ak['ak_pengmas'] >= 0.5) { ?>
                                        <td style=" font-size: 20px;">0 - <?= $data_pengajuan['ak_to'] * $constraint['persen_pengmas'] - $data_ak['ak_pengmas']; ?></td>
                                    <?php } ?>
                                    <td style=" font-size: 20px;">0 - <?= $data_pengajuan['ak_to'] * $constraint['persen_penunjang'] - $data_ak['ak_penunjang']; ?></td>
                                </tr>
                            </tfoot>
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

                        <!-- Batasan -->
                        <h5 class="pt-1 pb-2 body-content-a1">Batas Syarat Pengajuan</h5>
                        <!-- Tabel Batasan Menurut Jenis Pengajuan -->
                        <table class="greyGridTable" style="margin-top: 2rem; margin-bottom: 3rem;">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th style="width: 70%;">Jenis Batasan</th>
                                    <th style="width: 20%;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1. </td>
                                    <td style="text-align: left;">Pegajuan Unsur C Poin 2.E + 3 Maksimal 5% dari Total Unsur Penelitian</td>
                                    <td style="width: 20%;">ket</td>
                                </tr>
                                <?php if ($kode_batasan == 1) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } elseif ($kode_batasan == 2) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 atau 1.C.6 </td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } elseif ($kode_batasan == 3) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>4. </td>
                                        <td style="text-align: left;">Minimal Terdapat 2 Unsur Pengajuan C Poin 1.C.1 / 1.C.2</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } elseif ($kode_batasan == 4) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Magister</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } elseif ($kode_batasan == 5) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>4. </td>
                                        <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.1 / 1.C.2 / 1.C.3 (Untuk Magister)</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>5. </td>
                                        <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.4 (Untuk Doktor)</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } elseif ($kode_batasan == 6) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>4. </td>
                                        <td style="text-align: left;">Minimal Terdapat 4 Unsur Pengajuan C Poin 1.C.1 / 1.C.2</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>5. </td>
                                        <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Doktor</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } elseif ($kode_batasan == 7) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>4. </td>
                                        <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.5 / 1.C.6</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>5. </td>
                                        <td style="text-align: left;">Sudah Pernah atau Sedang Mengajukan Gelar Doktor / Magister</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } elseif ($kode_batasan == 8) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>4. </td>
                                        <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.1 / 1.C.2</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } elseif ($kode_batasan == 9) { ?>
                                    <tr>
                                        <td>2. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 1.C.6 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td style="text-align: left;">Pengajuan Unsur C Poin 2.A.4 + 2.B + 2.C.2 + 2.D.2 Maksimal 25% dari Total Unsur Penelitian</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                    <tr>
                                        <td>4. </td>
                                        <td style="text-align: left;">Wajib Ada Pengajuan Unsur C Minimal Poin 1.C.4</td>
                                        <td style="width: 20%;">ket</td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


            <!-- Berkas Pengajuan -->
            <div class="p-5">
                <div class="card shadow mb-1" style="width: 100%;">
                    <div class="card-header py-3">
                        <h6 class=" font-weight-bold text-left text-primary">Lampirkan Berkas Persyaratan Pengajuan</h6>
                    </div>

                    <!-- Tabel Cek Berkas -->
                    <div class="card-body">
                        <div class="pb-5 pt-3">
                            <table class="greyGridTable">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">No.</th>
                                        <th style="width: 60%;">File yang dilampirkan</th>
                                        <th style="width: 30%;">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody style="font-weight: bold;">
                                    <tr style="height: 3rem;">
                                        <td>1.</td>
                                        <td class="text-left">Scan Surat Pengantar dari Pimpinan Perguruan Tinggi</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_1'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_1'], 'http') !== false) {
                                                                                                echo $berkas['berkas_1'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_1']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>2.</td>
                                        <td class="text-left">Scan Resume dari pak.dikti.go.id (Cap + Ttd)</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_2'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_2'], 'http') !== false) {
                                                                                                echo $berkas['berkas_2'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_2']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>3.</td>
                                        <td class="text-left">Scan Ijazah Terakhir (Optional)</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_3'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_3'], 'http') !== false) {
                                                                                                echo $berkas['berkas_3'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_3']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a>
                                            <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>4.</td>
                                        <td class="text-left">PDF Abstrak Disertasi (Optional)</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_4'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_4'], 'http') !== false) {
                                                                                                echo $berkas['berkas_4'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_4']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>5.</td>
                                        <td class="text-left">Scan Surat Kepala Pemberian Tugas Belajar (Optional)</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_5'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_5'], 'http') !== false) {
                                                                                                echo $berkas['berkas_5'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_5']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>6.</td>
                                        <td class="text-left">Scan Surat Kepala Pengaktifan Kembali (Optional)</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_6'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_6'], 'http') !== false) {
                                                                                                echo $berkas['berkas_6'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_6']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>7.</td>
                                        <td class="text-left">Scan DUPAK</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_7'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_7'], 'http') !== false) {
                                                                                                echo $berkas['berkas_7'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_7']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>8.</td>
                                        <td class="text-left">Scan PAK terakhir</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_8'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_8'], 'http') !== false) {
                                                                                                echo $berkas['berkas_8'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_8']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>9.</td>
                                        <td class="text-left">Scan SK Jabatan Terakhir</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_9'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_9'], 'http') !== false) {
                                                                                                echo $berkas['berkas_9'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_9']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>10.</td>
                                        <td class="text-left">Scan SK Pangkat/Golongan PNS Terakhir</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_10'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_10'], 'http') !== false) {
                                                                                                echo $berkas['berkas_10'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_10']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>11.</td>
                                        <td class="text-left">Scan PPKP (DP3) 2 Tahun Terakhir</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_11'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_11'], 'http') !== false) {
                                                                                                echo $berkas['berkas_11'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_11']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>12.</td>
                                        <td class="text-left">Scan Surat Keterangan Melaksanakan Penelitian</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_12'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_12'], 'http') !== false) {
                                                                                                echo $berkas['berkas_12'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_12']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>13.</td>
                                        <td class="text-left">Scan Persetujuan/Pertimbangan Senat</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_13'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_13'], 'http') !== false) {
                                                                                                echo $berkas['berkas_13'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_13']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>14.</td>
                                        <td class="text-left">Scan Daftar Hadir Anggota Senat</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_14'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_14'], 'http') !== false) {
                                                                                                echo $berkas['berkas_14'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_14']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>15.</td>
                                        <td class="text-left">Scan Surat Pengesahan Hasil Validasi Karya Ilmiah (Optional)</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_15'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_15'], 'http') !== false) {
                                                                                                echo $berkas['berkas_15'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_15']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>16.</td>
                                        <td class="text-left">Scan Surat Pernyataan Keabsahan Karya Ilmiah</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_16'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_16'], 'http') !== false) {
                                                                                                echo $berkas['berkas_16'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_16']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>17.</td>
                                        <td class="text-left">Scan Sertifikat Pendidik</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_17'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_17'], 'http') !== false) {
                                                                                                echo $berkas['berkas_17'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_17']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                    <tr style="height: 3rem;">
                                        <td>18.</td>
                                        <td class="text-left">Surat Klarifikasi</td>
                                        <td class="nav-item text-center"> <?php if ($berkas['berkas_18'] != null) { ?>
                                                <a class="nav-link" target="_blank" href="<?php if (strpos($berkas['berkas_18'], 'http') !== false) {
                                                                                                echo $berkas['berkas_18'];
                                                                                            } else {
                                                                                                echo base_url('/assets/document/' . $berkas['berkas_18']);
                                                                                            } ?>">
                                                    <span>Cek Lampiran</span>
                                                </a> <?php } else {
                                                                                echo "Tidak Ada Lampiran";
                                                                            } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class="p-5"></div>

        </div>

        <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_penilaian_ak'); ?>">
            <input type="hidden" name="id_pengajuan" value="<?php echo $id_pengajuan; ?>">

            <!-- TAB PENDIDIKAN -->
            <div id="pendidikan" class="tabcontent pt-5">
                <!-- Judul Halaman -->
                <div class="container">
                    <!-- Row Pertama -->
                    <div class="justify-content-between pb-2 pt-5">
                        <h1 class="head-content">Unsur Pendidikan</h1>
                    </div>
                </div>

                <!-- Content Row A. Pendidikan B. Pelaksanaan Pendidikan-->
                <!-- Penilaian Pendidikan -->
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
                        <h5 class="head-bab">A. Pendidikan</h5>
                    </div>

                    <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                        <h5 class="head-subbab">
                            1. Mengikuti pendidikan formal dan memperoleh gelar/sebutan/ijazah (1/periode Penilaian)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable A1">
                            <thead style>
                                <tr>
                                    <th>Tingkatan Pendidikan</th>
                                    <th>Universitas/Institusi</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Keluar</th>
                                    <th>Lampiran</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($a1 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_a1[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['a11']; ?></td>
                                        <td><?= $value['a12']; ?></td>
                                        <td><?= $value['a13']; ?></td>
                                        <td><?= $value['a14']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['a15'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" step="0.1" max="<?= $value['ak_maks']; ?>" name="nilai_a1[]" style="width: 4rem;"></input></td>
                                    </tr>
                                <?php $urut++;
                                }
                                unset($urut); ?>
                            </tbody>
                        </table>

                    </div>



                    <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                        <h5 class="head-subbab">
                            2. Mengikuti diklat prajabatan golongan III (1/periode Penilaian)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable A2">
                            <thead>
                                <tr>
                                    <th>Nama Diklat</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($a2 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_a2[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['a21']; ?></td>
                                        <td><?= $value['a22']; ?></td>
                                        <td><?= $value['a23']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['a24'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks'];; ?></td>
                                        <td><input type="number" name="nilai_a2[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
                                    </tr>
                                <?php $urut++;
                                }
                                unset($urut); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3"></div>




                    <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="head-bab">B. Pelaksanaan Pendidikan</h5>
                    </div>




                    <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                        <h5 class="head-subbab">
                            1. Melaksanakan perkuliahan/tutorial/perkuliahan praktikum dan membimbing,menguji serta menyelenggarakan pendidikan di laboratorium, praktik keguruan, bengkel/studio/kebun percobaan/teknologi pengajaran dan praktik lapangan (Maks 12 SKS/semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B1">
                            <thead>
                                <tr>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Jumlah SKS</th>
                                    <th>Mata Kuliah</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b1 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b1[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b11']; ?></td>
                                        <td><?= $value['b12']; ?></td>
                                        <td><?= $value['b13']; ?></td>
                                        <td><?= $value['b14']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b15'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b1[]" step="0.01" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            2. Membimbing seminar mahasiswa (Setiap Semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B2">
                            <thead>
                                <tr>
                                    <th>Tahun Akademik</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b2 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b2[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b21']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b22'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b2[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            3. Membimbing Paktik Kerja Lapangan (Setiap Semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B3">
                            <thead>
                                <tr>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b3 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b3[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b31']; ?></td>
                                        <td><?= $value['b32']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b33'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b3[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            4. Membimbing dan ikut membimbing dalam menghasilkan disertasi, tesis, skripsi dan laporan akhir studi yang sesuai dengan bidang penugasannya (Setiap Semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B4">
                            <thead>
                                <tr>
                                    <th>Jenis(Option)</th>
                                    <th>Tugas/Peran (Option)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Jumlah Mahasiswa (Option)</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b4 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b4[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b41']; ?></td>
                                        <td><?= $value['b42']; ?></td>
                                        <td><?= $value['b43']; ?></td>
                                        <td><?= $value['b44']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b45'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks'];; ?></td>
                                        <td><input type="number" name="nilai_b4[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            5. Bertugas sebagai penguji pada ujian akhir/Profesi (Setiap Semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B5">
                            <thead>
                                <tr>
                                    <th>Jabatan Dalam Sidang (Option)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Jumlah Mahasiswa</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b5 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b5[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b51']; ?></td>
                                        <td><?= $value['b52']; ?></td>
                                        <td><?= $value['b53']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b54'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b5[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            6. Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintifik (2 Kegiatan/semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B6">
                            <thead>
                                <tr>
                                    <th>Jenis (Isian)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b6 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b6[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b61']; ?></td>
                                        <td><?= $value['b62']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b63'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b6[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            7. Mengambangkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi(Maks 1 Mata Kuliah/Semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B7">
                            <thead>
                                <tr>
                                    <th>Jenis (Isian)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Mata Kuliah</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b7 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b7[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b71']; ?></td>
                                        <td><?= $value['b72']; ?></td>
                                        <td><?= $value['b73']; ?></td>
                                        <td><?= $value['b74']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b75'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b7[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            8. Mengembangkan bahan pengajaran/bahan kuliah yang mempunyai nilai kebaharuan(Maks 1 Buku/Tahun dan 2 Produk/Semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B8">
                            <thead>
                                <tr>
                                    <th>Jenis (Option)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Mata Kuliah</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b8 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b8[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b81']; ?></td>
                                        <td><?= $value['b82']; ?></td>
                                        <td><?= $value['b83']; ?></td>
                                        <td><?= $value['b84']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b85'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b8[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            9. Menyampaikan orasi ilmiah di tingkat perguruan tinggi (Maks 2 Orasi/Semester</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B9">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b9 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b9[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b91']; ?></td>
                                        <td><?= $value['b92']; ?></td>
                                        <td><?= $value['b93']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b94'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b9[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            10. Menduduki jabatan pimpinan perguruan tinggi sesuai tugas pokok, fungsi, kewenangan dan/atau setara (Setiap Semester)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B10">
                            <thead>
                                <tr>
                                    <th>Jabatan yang diduduki (Option)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b10 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b10[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b101']; ?></td>
                                        <td><?= $value['b102']; ?></td>
                                        <td><?= $value['b103']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b104'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b10[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            11. Membimbing dosen yang mempunyai jabatan akademik lebih rendah setiap semester bagi Lektor Kepala atau Profesor (Maks 1 orang)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B11">
                            <thead>
                                <tr>
                                    <th>Jenis (Option)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b11 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b11[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b111']; ?></td>
                                        <td><?= $value['b112']; ?></td>
                                        <td><?= $value['b113']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b114'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b11[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            12. Melaksanakan kegiatan datasering dan pencangkokan diluar institusi tempat bekerja bagi Lektor Kepala atau Profesor (Maks 1 orang)</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B12">
                            <thead>
                                <tr>
                                    <th>Jenis (Option)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b12 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b12[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b121']; ?></td>
                                        <td><?= $value['b122']; ?></td>
                                        <td><?= $value['b123']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b124'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b12[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            13. Melaksanakan pengembangan diri untuk meningkatkan kompetensi</h5>
                    </div>
                    <div class="pb-5 pt-3">
                        <table class="greyGridTable B13">
                            <thead>
                                <tr>
                                    <th>Lama Program Pengembangan yang diikuti</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK Diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($b13 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_b13[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['b131']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['b132'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_b13[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
                                    </tr>
                                <?php $urut++;
                                }
                                unset($urut); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3"></div>
                </div>

            </div>

            <!-- TAB PENELITIAN -->
            <div id="penelitian" class="tabcontent pt-5">
                <!-- Judul Halaman -->
                <div class="container">
                    <!-- Row Pertama -->
                    <div class="justify-content-between pb-2 pt-5">
                        <h1 class="head-content">Unsur Penelitian</h1>
                    </div>
                </div>

                <!-- Content Row C. Penelitian -->
                <!-- Penilaian Penelitian -->
                <div class="container-fluid p-5">
                    <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="head-bab">C. Penelitian</h5>
                    </div>
                    <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                        <h5 class="head-subbab">
                            1. Menghasilkan karya ilmiah sesuai dengan bidang ilmunya</h5>
                        <h5 class="head-subbab">
                            Maksimal 1 Buku Per Tahun. Untuk Poin Jurnal, Penjelasan Ada di Halaman Informasi</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable C1">
                            <thead>
                                <tr>
                                    <th>Jenis Karya*</th>
                                    <th>Judul Karya</th>
                                    <th>Jenjang/Tingkat/Bentuk*</th>
                                    <th>Tahun</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($c1 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_c1[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['c11']; ?></td>
                                        <td><?= $value['c12']; ?></td>
                                        <td><?= $value['c13']; ?></td>
                                        <td><?= $value['c14']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c15'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_c1[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            2. Hasil penelitian atau hasil pemikiran yang didiseminasikan</h5>
                        <h5 class="head-subbab">
                            Penjelasan Dilampirkan di Halaman Informasi</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable C2">
                            <thead>
                                <tr>
                                    <th>Jenis Publikasi</th>
                                    <th>Judul Penelitian</th>
                                    <th>Tingkat/Jenjang</th>
                                    <th>Tahun Didiseminasikan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($c2 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_c2[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['c21']; ?></td>
                                        <td><?= $value['c22']; ?></td>
                                        <td><?= $value['c23']; ?></td>
                                        <td><?= $value['c24']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c25'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_c2[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            3. Hasil penelitian atau pemikiran atau kerjasama industri yang tidak dipublikasikan (tersimpan dalam perpustakaan) yang dilakukan secara melembaga</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable C3">
                            <thead>
                                <tr>
                                    <th>Judul Penelitian</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($c3 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_c3[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['c31']; ?></td>
                                        <td><?= $value['c32']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c33'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_c3[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            4. Menerjemahkan/menyadur buku ilmiah yang diterbitkan (ber ISBN)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable C4">
                            <thead>
                                <tr>
                                    <th>Judul Buku</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>No ISBN</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($c4 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_c4[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['c41']; ?></td>
                                        <td><?= $value['c42']; ?></td>
                                        <td><?= $value['c43']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c44'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_c4[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            5. Mengedit/menyunting karya ilmiah dalam bentuk buku yang diterbitkan (ber ISBN)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable C5">
                            <thead>
                                <tr>
                                    <th>Judul Buku</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>No ISBN</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($c5 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_c5[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['c51']; ?></td>
                                        <td><?= $value['c52']; ?></td>
                                        <td><?= $value['c53']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c54'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_c5[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            6. Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HaKI secara nasional atau internasional</h5>
                        <h5 class="head-subbab">
                            Tingkat/Jenjang pilihan F (Urutan 6) Maksimal 2 Karya Per Semester</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable C6">
                            <thead>
                                <tr>
                                    <th>Jenis (Option)</th>
                                    <th>Judul Karya</th>
                                    <th>Tingkat/Jenjang (Option)</th>
                                    <th>Tahun Pembuatan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>
                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($c6 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_c6[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['c61']; ?></td>
                                        <td><?= $value['c62']; ?></td>
                                        <td><?= $value['c63']; ?></td>
                                        <td><?= $value['c64']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c65'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_c6[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            7. Membuat rancangan dan karya teknologi yang tidak dipatenkan; rancangan dan karya seni monumental yang tidak terdaftar di HaKI tetapi telah dipresentasikan pada forum yang teragenda</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable C7">
                            <thead>
                                <tr>
                                    <th>Jenis (Option)</th>
                                    <th>Judul Karya</th>
                                    <th>Tingkat/Jenjang (Option)</th>
                                    <th>Tahun Pembuatan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($c7 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_c7[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['c71']; ?></td>
                                        <td><?= $value['c72']; ?></td>
                                        <td><?= $value['c73']; ?></td>
                                        <td><?= $value['c74']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c75'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_c7[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            8. Membuat rancangan dan kaya seni yang tidak terdaftar HaKI</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable C8">
                            <thead>
                                <tr>
                                    <th>Unsur</th>
                                    <th>Sub Unsur</th>
                                    <th>Tingkat</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($c8 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_c8[]" value="<?= $value['id']; ?>">
                                        <td><?= $value['c81']; ?></td>
                                        <td><?= $value['c82']; ?></td>
                                        <td><?= $value['c83']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['c84'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_c8[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
                                    </tr>
                                <?php $urut++;
                                }
                                unset($urut); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3"></div>




                </div>
            </div>

            <!-- TAB PENGABDIAN MASYARAKAT -->
            <div id="pengmas" class="tabcontent pt-5">
                <!-- Judul Halaman -->
                <div class="container">
                    <!-- Row Pertama -->
                    <div class="justify-content-between pb-2 pt-5">
                        <h1 class="head-content">Unsur Pengabdian Masyarakat</h1>
                    </div>
                </div>

                <!-- Content Row D. Pengabdian Masyarakat-->
                <!-- Penilaian Pengabdian Masyarakat -->
                <div class="container-fluid p-5">
                    <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="head-bab">D. Pengabdian Masyarakat</h5>
                    </div>
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
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_d1[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_d2[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_d3[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_d4[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_d5[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_d6[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_d7[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
                                    </tr>
                                <?php $urut++;
                                }
                                unset($urut); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3"></div>
                </div>
            </div>

            <!-- TAB PENUNJANG -->
            <div id="penunjang" class="tabcontent pt-5">
                <!-- Judul Halaman -->
                <div class="container">
                    <!-- Row Pertama -->
                    <div class="justify-content-between pb-2 pt-5">
                        <h1 class="head-content">Unsur Penunjang</h1>
                    </div>
                </div>

                <!-- Content Row E. Unsur Penunjang -->
                <!-- Penilaian Penunjang -->
                <div class="container-fluid p-5">
                    <div class="p-2 d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="head-bab">E. Unsur Penunjang</h5>
                    </div>
                    <div class="d-sm-flex align-items-center text-justify justify-content-between mb-0">
                        <h5 class="head-subbab">
                            1. Menjadi anggota dalam suatu panitia/Badan pada perguruan tinggi (Setiap Tahun)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E1">
                            <thead>
                                <tr>
                                    <th>Nama Badan/Kepanitiaan</th>
                                    <th>Jabatan (Option)</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e1 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e1" value="<?= $value['id']; ?>">
                                        <td><?= $value['e11']; ?></td>
                                        <td><?= $value['e12']; ?></td>
                                        <td><?= $value['e13']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e14'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e1[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            2. Menjadi anggota panitia/badan pada lembaga pemerintah (Setiap Kepanitiaan)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E2">
                            <thead>
                                <tr>
                                    <th>Nama Badan/ Kepanitiaan</th>
                                    <th>Nama Lembaga</th>
                                    <th>Tingkat Kepanitiaan (Option)</th>
                                    <th>Jabatan</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e2 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e2" value="<?= $value['id']; ?>">
                                        <td><?= $value['e21']; ?></td>
                                        <td><?= $value['e22']; ?></td>
                                        <td><?= $value['e23']; ?></td>
                                        <td><?= $value['e24']; ?></td>
                                        <td><?= $value['e25']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e26'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e2[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            3. Menjadi anggota organisasi profesi (Setiap Periode Jabatan)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E3">
                            <thead>
                                <tr>
                                    <th>Nama Organisasi</th>
                                    <th>Tingkatan Organisasi (Option)</th>
                                    <th>Jabatan (Option)</th>
                                    <th>Tahun</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e3 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e3" value="<?= $value['id']; ?>">
                                        <td><?= $value['e31']; ?></td>
                                        <td><?= $value['e32']; ?></td>
                                        <td><?= $value['e33']; ?></td>
                                        <td><?= $value['e34']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e35'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e3[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            4. Mewakili perguruan tinggi/lembaga pemerintah duduk dalam panitia antar lembaga, tiap kepanitiaan </h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E4">
                            <thead>
                                <tr>
                                    <th>Nama Kepanitiaan</th>
                                    <th>Lembaga yang Diwakili</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e4 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e4" value="<?= $value['id']; ?>">
                                        <td><?= $value['e41']; ?></td>
                                        <td><?= $value['e42']; ?></td>
                                        <td><?= $value['e43']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e44'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e4[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            5. Menjadi anggota delegasi nasional ke pertemuan internasional (Setiap Kegiatan)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E5">
                            <thead>
                                <tr>
                                    <th>Nama Pertemuan internasional</th>
                                    <th>Jabatan (Option)</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e5 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e5" value="<?= $value['id']; ?>">
                                        <td><?= $value['e51']; ?></td>
                                        <td><?= $value['e52']; ?></td>
                                        <td><?= $value['e53']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e54'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e5[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            6. Berperan serta aktif dalam pertemuan ilmiah (Setiap Kegiatan)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E6">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan/ Kepanitiaan</th>
                                    <th>Tingkatan (Option)</th>
                                    <th>Jabatan (Option)</th>
                                    <th>Tahun Pelaksanaan</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e6 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e6" value="<?= $value['id']; ?>">
                                        <td><?= $value['e61']; ?></td>
                                        <td><?= $value['e62']; ?></td>
                                        <td><?= $value['e63']; ?></td>
                                        <td><?= $value['e64']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e65'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e6[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            7. Mendapat tanda jasa/penghargaan</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E7">
                            <thead>
                                <tr>
                                    <th>Janis Tanda Jasa</th>
                                    <th>Tahun Diterima</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e7 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e7" value="<?= $value['id']; ?>">
                                        <td><?= $value['e71']; ?></td>
                                        <td><?= $value['e72']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e73'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e7[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            8. Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional (Setiap Buku)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E8">
                            <thead>
                                <tr>
                                    <th>Judul Buku</th>
                                    <th>Tingkat Buku (Option)</th>
                                    <th>Tahun Terbit</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e8 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e8" value="<?= $value['id']; ?>">
                                        <td><?= $value['e81']; ?></td>
                                        <td><?= $value['e82']; ?></td>
                                        <td><?= $value['e83']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e84'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e8[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            9. Memiliki prestasi di bidang olahraga/humaniora (Tiap Piagam/Medali)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E9">
                            <thead>
                                <tr>
                                    <th>Bidang Prestasi (Option)</th>
                                    <th>Prestasi yang diperoleh</th>
                                    <th>Tingkat (Option)</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e9 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e9" value="<?= $value['id']; ?>">
                                        <td><?= $value['e91']; ?></td>
                                        <td><?= $value['e92']; ?></td>
                                        <td><?= $value['e93']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e94'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e9[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
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
                            10. Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)</h5>
                    </div>

                    <div class="pb-5 pt-3">
                        <table class="greyGridTable E10">
                            <thead>
                                <tr>
                                    <th>Jabatan (Option)</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Lampirkan Bukti</th>
                                    <th>AK Maksimal</th>

                                    <th>AK yang diberikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $urut = 0;
                                foreach ($e10 as $key => $value) { ?>
                                    <tr>
                                        <input type="hidden" name="id_bab_e10" value="<?= $value['id']; ?>">
                                        <td><?= $value['e101']; ?></td>
                                        <td><?= $value['e102']; ?></td>
                                        <td><?= $value['e103']; ?></td>
                                        <td class="nav-item text-center">
                                            <a class="nav-link" target="_blank" href="<?php echo base_url('/assets/document/' . $value['e104'] . '.pdf'); ?>">
                                                <span>Cek Berkas</span>
                                            </a>
                                        </td>
                                        <td><?= $value['ak_maks']; ?></td>
                                        <td><input type="number" name="nilai_e10[]" step="0.1" max="<?= $value['ak_maks']; ?>" style="width: 4rem;"></input></td>
                                    </tr>
                                <?php $urut++;
                                }
                                unset($urut); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3"></div>
                </div>
            </div>


            <!-- DILUAR TAB -->

            <!-- Kolom Komentar -->
            <div class="container p-1">
                <div class="card-body">
                    <div>
                        <h6 class="head-subbab font-weight-bold">Berikan Catatan</h6>
                        <textarea class="col_comment" name="komentar" style="width: 100%; font-family: 'Times New Roman';font-size: 10pt;"></textarea>
                    </div>
                </div>
            </div>


            <!-- Button -->
            <div class="container-fluid row pb-4 pt-2">
                <div class="container" style="width: 30%; text-align: center;">
                    <button type="submit" name="aksi" value="lihathasil" style="font-weight: bold; height: 50px; width: 250px;" class="btn btn-primary text-center btn-user btn=block">
                        Lihat Perolehan Sementara
                    </button>
                </div>
                <div class="container" style="width: 30%; text-align: center;">
                    <button data-toggle="modal" type="button" data-target="#simpanSementara" style="font-weight: bold; height: 50px; width: 250px;" class="btn btn-primary text-center btn-user btn=block">
                        Simpan Sementara
                    </button>
                </div>
                <div class="container" style="width: 30%; text-align: center;">
                    <button data-toggle="modal" type="button" data-target="#lanjutkanResume" style="font-weight: bold; height: 50px; width: 250px;" class="btn btn-primary text-center btn-user btn=block">
                        Kirim Penilaian
                    </button>
                </div>
            </div>


            <!-- Modal Simpan Sementara -->
            <div class="modal fade" id="simpanSementara" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Simpan Pengajuan ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Klik Simpan Untuk Menyimpan Penilaian Pengajuan Angka Kredit</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" name="aksi" value="simpan" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Lanjut Ke Resume -->
            <div class="modal fade" id="lanjutkanResume" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lanjutkan Ke Resume ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Klik Lanjutkan Untuk Mengirim Penilaian Pengajuan Angka Kredit</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" name="aksi" value="lanjutkan" type="submit">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <div class="p-5"></div>

</div>


<script>
    function openinfoTab(evt, menu) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(menu).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>