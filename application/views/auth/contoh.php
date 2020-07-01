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