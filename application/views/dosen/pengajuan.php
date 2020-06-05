<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="justify-content-between pb-3 pt-4">
        <h1 class="head-content">Pengajuan Angka Kredit Dosen</h1>
    </div>
    <style>
        .head-content {
            font-size: 25px;
            color: #4e73df;
            font-weight: bold;
            font-family: Cambria;
        }

        .jam {
            font-size: 20px;
            color: black;
            font-family: fantasy;
        }

        .body-content {
            font-size: 18px;
            color: black;
            font-family: 'Times New Roman';
        }

        .bio {
            width: 100%;
            text-align: left;
            font-size: 16px !important;
            color: black;
        }
    </style>

    <!--Biodata Dosen-->
    <div class="container mb-5">
        <div class="card shadow mt-3 mb-1" style="width: 100%;">
            <div class="card-header py-2">
                <h4 class=" font-weight-bold text-center text-primary">Biodata Diri</h4>
            </div>
            <div class="card-body">

                <div class="col-lg body-content">

                    <div class="bio-form row">
                        <div class="col-sm-3">
                            <h5 class="bio">Nama </h5>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="bio"><?= $array['nama_lengkap']; ?></h5>
                        </div>
                    </div>

                    <div class="bio-form row">
                        <div class="col-sm-3">
                            <h5 class="bio">NIP</h5>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="bio"><?= $array['nip']; ?></h5>
                        </div>
                    </div>

                    <div class="bio-form row">
                        <div class="col-sm-3">
                            <h5 class="bio">Pangkat/Gol Ruang</h5>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="bio"><?= $array['pangkat'] . "/" . $array['golongan_ruang']; ?></h5>
                        </div>
                    </div>


                    <div class="bio-form row">
                        <div class="col-sm-3">
                            <h5 class="bio">Jabatan Fungsional</h5>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="bio"><?= $array['jabatan_fungsi']; ?></h5>
                        </div>
                    </div>

                    <div class="bio-form row">
                        <div class="col-sm-3">
                            <h5 class="bio">Unit Kerja</h5>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="bio"><?= $array['unit_kerja']; ?></h5>
                        </div>
                    </div>

                    <div class="bio-form row">
                        <div class="col-sm-3">
                            <h5 class="bio">Angka Kredit</h5>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="bio"><?= $array['angka_kredit']; ?></h5>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <!-- Tabel Pengajuan Yang Harus Dilampirkan -->
    <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_pengajuan'); ?>">

        <div class="container pb-5">
            <!-- Pengisian Berkas Persyaratan -->
            <div class="card shadow mb-1" style="width: 100%;">
                <div class="card-header py-3">
                    <h6 class=" font-weight-bold text-left text-primary">I. Lampirkan Berkas Persyaratan Pengajuan</h6>
                </div>

                <div class="card-body">
                    <div class="pt-2 pb-3">
                        <table class="greyGridTable A1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>File yang dilampirkan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td class="text-left">Scan Surat Pengantar dari Pimpinan Perguruan Tinggi</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_sp3t').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_sp3t').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_sp3t').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_sp3t').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_sp3t').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_sp3t').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_sp3t" data-target="#modal_link_sp3t">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_sp3t" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_sp3t" name="bk1"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_sp3t" data-target="#modal_file_sp3t">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_sp3t" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_sp3t" name="bk1"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td class="text-left">Scan Resume dari pak.dikti.go.id (Cap + Ttd)</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_resume').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_resume').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_resume').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_resume').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_resume').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_resume').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_resume" data-target="#modal_link_resume">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_resume" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_resume" name="bk2"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_resume" data-target="#modal_file_resume">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_resume" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_resume" name="bk2"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td class="text-left">Scan Ijazah Terakhir (Optional)</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_ijazah').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_ijazah').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_ijazah').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_ijazah').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_ijazah').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_ijazah').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_ijazah" data-target="#modal_link_ijazah">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_ijazah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_ijazah" name="bk3"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_ijazah" data-target="#modal_file_ijazah">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_ijazah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_ijazah" name="bk3"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td class="text-left">PDF Abstrak Disertasi (Optional)</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_abstrak').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_abstrak').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_abstrak').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_abstrak').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_abstrak').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_abstrak').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn btn-sm" type="button" data-toggle="modal" id="btn_link_abstrak" data-target="#modal_link_abstrak">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_abstrak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_abstrak" name="bk4"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_abstrak" data-target="#modal_file_abstrak">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_abstrak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_abstrak" name="bk4"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td class="text-left">Scan Surat Kepala Pemberian Tugas Belajar (Optional)</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_skptb').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_skptb').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_skptb').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_skptb').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_skptb').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_skptb').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_skptb" data-target="#modal_link_skptb">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_skptb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_skptb" name="bk5"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_skptb" data-target="#modal_file_skptb">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_skptb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_skptb" name="bk5"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td class="text-left">Scan Surat Kepala Pengaktifan Kembali (Optional)</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_skpk').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_skpk').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_skpk').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_skpk').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_skpk').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_skpk').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_skpk" data-target="#modal_link_skpk">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_skpk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_skpk" name="bk6"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_skpk" data-target="#modal_file_skpk">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_skpk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_skpk" name="bk6"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td class="text-left">Scan DUPAK</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_dupak').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_dupak').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_dupak').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_dupak').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_dupak').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_dupak').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_dupak" data-target="#modal_link_dupak">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_dupak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_dupak" name="bk7"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_dupak" data-target="#modal_file_dupak">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_dupak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_dupak" name="bk7"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td class="text-left">Scan PAK terakhir</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_spak').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_spak').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_spak').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_spak').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_spak').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_spak').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_spak" data-target="#modal_link_spak">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_spak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_spak" name="bk8"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_spak" data-target="#modal_file_spak">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_spak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_spak" name="bk8"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td class="text-left">Scan SK Jabatan Terakhir</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_skjabatan').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_skjabatan').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_skjabatan').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_skjabatan').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_skjabatan').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_skjabatan').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_skjabatan" data-target="#modal_link_skjabatan">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_skjabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_skjabatan" name="bk9"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_skjabatan" data-target="#modal_file_skjabatan">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_skjabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_skjabatan" name="bk9"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td class="text-left">Scan SK Pangkat/Golongan PNS Terakhir</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_skpangkat').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_skpangkat').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_skpangkat').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_skpangkat').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_skpangkat').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_skpangkat').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_skpangkat" data-target="#modal_link_skpangkat">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_skpangkat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_skpangkat" name="bk10"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_skpangkat" data-target="#modal_file_skpangkat">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_skpangkat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_skpangkat" name="bk10"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td class="text-left">Scan PPKP (DP3) 2 Tahun Terakhir</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_ppkp').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_ppkp').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_ppkp').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_ppkp').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_ppkp').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_ppkp').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_ppkp" data-target="#modal_link_ppkp">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_ppkp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_ppkp" name="bk11"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_ppkp" data-target="#modal_file_ppkp">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_ppkp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_ppkp" name="bk11"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td class="text-left">Scan Surat Keterangan Melaksanakan Penelitian</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_skmp').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_skmp').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_skmp').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_skmp').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_skmp').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_skmp').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_skmp" data-target="#modal_link_skmp">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_skmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_skmp" name="bk12"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_skmp" data-target="#modal_file_skmp">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_skmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_skmp" name="bk12"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td class="text-left">Scan Persetujuan/Pertimbangan Senat</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_spps').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_spps').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_spps').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_spps').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_spps').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_spps').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_spps" data-target="#modal_link_spps">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_spps" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_spps" name="bk13"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_spps" data-target="#modal_file_spps">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_spps" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_spps" name="bk13"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td class="text-left">Scan Daftar Hadir Anggota Senat</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_daftarhadir').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_daftarhadir').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_daftarhadir').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_daftarhadir').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_daftarhadir').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_daftarhadir').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_daftarhadir" data-target="#modal_link_daftarhadir">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_daftarhadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_daftarhadir" name="bk14"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_daftarhadir" data-target="#modal_file_daftarhadir">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_daftarhadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_daftarhadir" name="bk14"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td class="text-left">Scan Surat Pengesahan Hasil Validasi Karya Ilmiah (Optional)</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_sphvki').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_sphvki').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_sphvki').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_sphvki').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_sphvki').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_sphvki').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_sphvki" data-target="#modal_link_sphvki">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_sphvki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_sphvki" name="bk15"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_sphvki" data-target="#modal_file_sphvki">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_sphvki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_sphvki" name="bk15"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td class="text-left">Scan Surat Pernyataan Keabsahan Karya Ilmiah</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_spkki').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_spkki').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_spkki').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_spkki').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_spkki').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_spkki').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_spkki" data-target="#modal_link_spkki">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_spkki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_spkki" name="bk16"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_spkki" data-target="#modal_file_spkki">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_spkki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_spkki" name="bk16"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td class="text-left">Scan Sertifikat Pendidik</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_pendidikan').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_pendidikan').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_pendidikan').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_pendidikan').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_pendidikan').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_pendidikan').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_pendidikan" data-target="#modal_link_pendidikan">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_pendidikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_pendidikan" name="bk17"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_pendidikan" data-target="#modal_file_pendidikan">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_pendidikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_pendidikan" name="bk17"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td class="text-left">Surat Klarifikasi</td>
                                    <td class="nav-item text-center">
                                        <script>
                                            $(document).ready(function() {
                                                $('#link_klarifikasi').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_file_klarifikasi').prop("disabled", true);
                                                    } else {
                                                        $('#btn_file_klarifikasi').prop("disabled", false);
                                                    }
                                                });
                                                $('#file_klarifikasi').blur(function() {
                                                    if ($(this).val()) {
                                                        $('#btn_link_klarifikasi').prop("disabled", true);
                                                    } else {
                                                        $('#btn_link_klarifikasi').prop("disabled", false);
                                                    }
                                                });
                                            });
                                        </script>
                                        <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_link_klarifikasi" data-target="#modal_link_klarifikasi">Lampirkan Link</button>
                                        <div class="modal fade" id="modal_link_klarifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">Masukan Link: <input type="text" id="link_klarifikasi" name="bk18"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        atau <button class="btn   btn-sm" type="button" data-toggle="modal" id="btn_file_klarifikasi" data-target="#modal_file_klarifikasi">Lampirkan File</button>
                                        <div class="modal fade" id="modal_file_klarifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body"><input type="file" accept="application/pdf" id="file_klarifikasi" name="bk18"></div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Lanjutkan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Pengisian Tipe Pengajuan -->
            <div class="card shadow mt-5 mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-left text-primary">II. Kenaikan Jabatan/Pangkat/Golongan yang diajukan</h6>
                </div>
                <div class="card-body">
                    <div class="chart-piee pt-1 pb-2">
                        <table class="greyGridTable">
                            <thead>
                                <tr>
                                    <th style="width: 20%;"></th>
                                    <th style="width: 40%;">Saat Ini</th>
                                    <th style="width: 40%;">Diajukan Ke- </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font_col_1">Jabatan Fungsional</td>
                                    <td class="text-center"><?= $array['jabatan_fungsi']; ?></td>
                                    <td><label for="F1">
                                            <select class="f" id="F1" name="F1">
                                                <option value="" selected disabled hidden> ... </option>
                                                <option value="Asisten Ahli">Asisten Ahli</option>
                                                <option value="Lektor">Lektor</option>
                                                <option value="Lektor Kepala">Lektor Kepala</option>
                                                <option value="Profesor">Profesor</option>
                                            </select>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="font_col_1">Pangkat</td>
                                    <td class="text-center"><?= $array['pangkat']; ?></td>
                                    <td><label for="F2">
                                            <select class="f" id="F2" name="F2">
                                                <option value="" selected disabled hidden> ... </option>
                                                <option value="IIIa">IIIa</option>
                                                <option value="IIIb">IIIb</option>
                                                <option value="IIIc">IIIc</option>
                                                <option value="IIId">IIId</option>
                                                <option value="IVa">IVa</option>
                                                <option value="IVb">IVb</option>
                                                <option value="IVc">IVc</option>
                                                <option value="IVd">IVd</option>
                                                <option value="IVe">IVe</option>
                                            </select>
                                        </label>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="font_col_1">Golongan Ruang</td>
                                    <td class="text-center"><?= $array['golongan_ruang']; ?></td>
                                    <td><label for="F3">
                                            <select class="f" id="F3" name="F3">
                                                <option value="" selected disabled hidden> ... </option>
                                                <option value="1">Penata Muda Tk.1</option>
                                                <option value="2">Penata</option>
                                                <option value="3">Penata Tk.1</option>
                                                <option value="4">Pembina</option>
                                                <option value="5">Pembina Tk.1</option>
                                                <option value="6">Pembina Utama Muda</option>
                                                <option value="7">Pembina Utama Madya</option>
                                                <option value="8">Pembina Utama</option>
                                            </select>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <!-- Submit Form -->
            <div class="pt-3">
                <button type="submit" class="col-sm-2 float-right btn btn-primary btn-user btn=block">
                    Ajukan Pengajuan
                </button>
            </div>
        </div>
    </form>

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
</div>

<div style="margin-bottom: 7rem;"></div>