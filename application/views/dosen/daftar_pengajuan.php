<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Pengajuan Usulan Penilaian Angka Kredit</h1>
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

    <!--Biodata Dosen-->
    <div class="container p-5">
        <style>
            .jam {
                font-size: 20px;
                color: black;
                font-family: fantasy;
            }

            .bio {
                width: 100%;
                text-align: left;
                font-size: 16px !important;
                color: black;
            }
        </style>

        <div class="card shadow mt-3 mb-1" style="width: 100%;">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Biodata Diri Dosen</h6>
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

    <!-- Pengajuan Ditolak -->
    <div class="container-fluid p-5">
        <div class="card shadow" style="width: 100%;">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan Ditolak</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <table class="greyGridTable" style="text-align: center; margin-top: 1rem; margin-bottom: 2rem;">
                    <thead>
                        <tr>
                            <th style="width: 5%;">ID</th>
                            <th style="width: 20%;">Terakhir Diubah</th>
                            <th style="width: 20%;">Diajukan Ke</th>
                            <th style="width: 20%;">Kekurangan Angka</th>
                            <th style="width: 20%;">Edit Pengajuan</th>
                            <th style="width: 15%;">Lihat Log</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight: bold;">
                        <?php
                        if ($pengajuan7 != null) {
                            $no = 1;
                            foreach ($pengajuan7 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['id_pengajuan']; ?></td>
                                    <td><?= date('d F Y', strtotime($value['tgl_pengajuan'])); ?></td>
                                    <td><?= $value['jabatan_fungsi_to']; ?> / <?= $value['ak_to']; ?></td>
                                    <td><?= $value['kurang_ak']; ?></td>
                                    <td>
                                        <a href="<?= base_url('dosen/pengajuan_unsur/' . $value['id_pengajuan']); ?>" class="btn btn-primary text-center btn-user btn=block">
                                            Edit Pengajuan
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('dosen/log_pengajuan/' . $value['id_pengajuan']); ?>" class="btn btn-primary text-center">
                                            Lihat Log
                                        </a>
                                    </td>
                                </tr>
                            <?php $no++;
                            }
                        } else { ?>
                            <tr style="height: 5 rem;">
                                <td colspan="6" style="text-align: center; font-weight: bold;"> Tidak Ada Data Pengajuan Tertolak </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pengajuan Disimpan -->
    <div class="container-fluid p-5">
        <div class="card shadow" style="width: 100%;">
            <!-- Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan Tersimpan</h6>
            </div>
            <!--Body -->
            <div class="card-body">
                <table class="greyGridTable" style="text-align: center; margin-top: 1rem; margin-bottom: 2rem;">
                    <thead>
                        <tr>
                            <th style="width: 10%;">ID</th>
                            <th style="width: 20%;">Terakhir Diubah</th>
                            <th style="width: 30%;">Diajukan Ke</th>
                            <th style="width: 20%;">Kekurangan Angka</th>
                            <th style="width: 20%;">Edit Pengajuan</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight: bold;">
                        <?php
                        if ($pengajuan8 != null) {
                            $no = 1;
                            foreach ($pengajuan8 as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['id_pengajuan']; ?></td>
                                    <td><?= date('d F Y', strtotime($value['tgl_pengajuan'])); ?></td>
                                    <td><?= $value['jabatan_fungsi_to']; ?> / <?= $value['ak_to']; ?></td>
                                    <td><?= $value['kurang_ak']; ?></td>
                                    <td>
                                        <a href="<?= base_url('dosen/pengajuan_unsur/' . $value['id_pengajuan']); ?>" class="btn btn-primary text-center btn-user btn=block">
                                            Edit Pengajuan
                                        </a>
                                    </td>
                                </tr>
                            <?php $no++;
                            }
                        } else { ?>
                            <tr style="height: 5 rem;">
                                <td colspan="5" style="text-align: center; font-weight: bold;"> Tidak Ada Data Pengajuan Tersimpan </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Judul Halaman -->
    <div class="container-fluid p-5">
        <div class="card shadow" style="width: 100%;">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>

            <div class="card-body text-center">
                <div class="justify-content-between pb-3 pt-1">
                    <h1 class="head-content" style="font-size: 25px !important;">Daftarkan Pengajuan Baru</h1>
                </div>
                <form class="user" enctype='multipart/form-data' method="post" action="<?= base_url('dosen/action_daftar_pengajuan'); ?>">
                    <div class="justify-content-between pb-3 pt-4">
                        <button data-toggle="modal" type="button" data-target="#jenisPengajuanModal" class="float-center btn btn-primary btn-user btn=block">
                            Daftar Pengajuan Baru
                        </button>
                    </div>

                    <!-- Modal Pilih Jenis Pengajuan-->
                    <div class="modal fade" id="jenisPengajuanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Kenaikan Yang Diajukan</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
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
                                                        <select class="f" id="F1" name="F1" onchange="optionF(this)" required>
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
                                                <td class="font_col_1">Pangkat/Golongan</td>
                                                <td class="text-center"><?= $array['pangkat'] ?> / <?= $array['golongan_ruang']; ?></td>
                                                <td colspan="2"><label for="F2">
                                                        <select class="f" id="F2" name="F2" style="width: 12rem; margin-bottom: 0px; position: relative;" required>

                                                        </select>
                                                    </label>
                                                </td>
                                            </tr>

                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                            <script>
                                                $(document).ready(function() {
                                                    $("#F1").change(function() {
                                                        var val = $(this).val();
                                                        if (val == "Asisten Ahli") {
                                                            $("#F2").html(`
                                                    <option value="" selected disabled hidden> ... </option>
                                                    <option value="1">IIIa/</option>
                                                    <option value="2">IIIb/Penata Muda Tk 1</option>`);
                                                        } else if (val == "Lektor") {
                                                            $("#F2").html(`
                                                    <option value="" selected disabled hidden> ... </option>
                                                    <option value="3">IIIc/Penata</option>
                                                    <option value="4">IIId/Penata Tk 1</option>`);
                                                        } else if (val == "Lektor Kepala") {
                                                            $("#F2").html(`
                                                    <option value="" selected disabled hidden> ... </option>
                                                    <option value="5">IVa/Pembina</option>
                                                    <option value="6">IVb/Pembina Tk 1</option>
                                                    <option value="7">IVc/Pembina Utama Muda</option>`);
                                                        } else if (val == "Profesor") {
                                                            $("#F2").html(`
                                                    <option value="" selected disabled hidden> ... </option>
                                                    <option value="8">IVd/Pembina Utama Madya</option>
                                                    <option value="9">IVe/Pembina Utama</option>`);
                                                        }
                                                    });
                                                })
                                            </script>
                                        </tbody>

                                    </table>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <button class="btn btn-primary" name="aksi" value="tolak" type="submit">Lanjutkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="p-5"></div>

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