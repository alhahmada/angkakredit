<div class="container" style="height: 90%;">
    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Edit Profil</h1>
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



    <!-- Judul Halaman -->
    <div class="container pb-5">
        <!-- Pop Up Tambah User -->
        <style>
            .head-popup {
                font-size: 25px;
                font-family: Cambria;
                font-weight: bold;
                color: #4e73df;
            }

            .isian-popup {
                font-size: 15px;
                font-family: Cambria;
                color: black;
                font-weight: bold;
            }

            .subhead {
                font-size: 16px;
                font-family: Cambria;
                color: black;
                font-weight: bold;
            }

            .subhead-1 {
                margin-left: 4rem;
                font-size: 15px;
                font-family: Cambria;
                color: black;
                font-weight: bold;
            }

            .modal-width-750 {
                width: 750px !important;
                margin: auto;
            }

            .tabel-bio {
                border: none;
                font-family: Cambria;
                font-size: 16px;
                color: black;
                font-weight: bold;
            }

            .tabel-bio tbody td:first-child {
                width: 30%;
            }

            .tabel-bio tbody td:nth-child(2) {
                width: 30%;
                border-right: 1px solid black;
            }

            .tabel-bio tbody td:last-child {
                width: 30%;
                text-align: center;
            }

            .foto {
                float: center;
                width: 120px;
                height: 160px;
                border: 1px black;
            }

            .foto-inside {
                border: 1px solid black;
                padding: 5px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 2rem;
                width: 150px;
                height: auto;
            }

            .btn-edit {
                color: teal;
                text-decoration: underline;
            }

            .btn-edit:hover {
                color: tomato;
                text-decoration: underline;
            }
        </style>

        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">
            <h1 class="head-sub-content">A. Edit Data Diri</h1>
        </div>
        <div class="container row pt-2 pb-5">
            <div style="width: 80%;">
                <table class="tabel-bio" style="width: 80%; margin-left: 4rem;">
                    <tbody class="tabel-bio">
                        <tr>
                            <td>NIP</td>
                            <td><?= $array['nip']; ?></td>
                            <td>
                                <button class="btn-edit btn btn-sm" type="button" data-toggle="modal" id="btn_ubah_nip" data-target="#modal_ubah_nip">Ubah NIP</button>
                                <div class="modal fade" id="modal_ubah_nip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Ubah ___ User</div>

                                            <div class="modal-body row">
                                                <div style="width: 15%;"></div>
                                                <div class="isian-popup" style=" width : 35%; float: left;">NIP Sebelumnya</div>
                                                <div class="isian-popup" style=" width : 40%; float: left;"><?= $array['nip']; ?></div>
                                            </div>

                                            <div class="modal-body row">
                                                <div style="width: 15%;"></div>
                                                <div class="isian-popup" style=" width : 35%; float: left;">NIP Baru</div>
                                                <input style="width: 40%;" id="nip_baru" name="nip_baru">
                                                </input>
                                            </div>


                                            <div class="p-2"></div>


                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="submit" data-dismiss="modal">Ubah NIP</button></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><?= $array['nama_lengkap']; ?></td>
                            <td>
                                <!-- <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe> -->


                                <form class="user" name="ubah_nama" id="ubah_nama" enctype="multipart/form-data" method="post" action="<?= base_url('auth/action_ubah_nama'); ?>">
                                    <button class="btn-edit btn btn-sm" type="button" data-toggle="modal" id="btn_ubah_nama" data-target="#modal_ubah_nama">Ubah Nama</button>
                                    <div class="modal fade" id="modal_ubah_nama" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Ubah ___ User</div>

                                                <div class="modal-body row">
                                                    <div style="width: 15%;"></div>
                                                    <div class="isian-popup" style=" width : 35%; float: left;">Nama Lengkap</div>
                                                    <div class="isian-popup" style=" width : 40%; float: left;"><?= $array['nama_lengkap']; ?></div>
                                                </div>

                                                <div class="modal-body row">
                                                    <div style="width: 15%;"></div>
                                                    <div class="isian-popup" style=" width : 35%; float: left;">Nama Lengkap Baru</div>
                                                    <input style="width: 40%;" id="nama_baru" name="nama_baru">
                                                    </input>
                                                </div>


                                                <div class="p-2"></div>


                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="submit">Ubah Nama</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>



                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $array['email']; ?></td>
                            <td>
                                <button class="btn-edit btn btn-sm" type="button" data-toggle="modal" id="btn_ubah_email" data-target="#modal_ubah_email">Ubah Email</button>
                                <div class="modal fade" id="modal_ubah_email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Ubah ___ User</div>

                                            <div class="modal-body row">
                                                <div style="width: 15%;"></div>
                                                <div class="isian-popup" style=" width : 35%; float: left;">Email</div>
                                                <div class="isian-popup" style=" width : 40%; float: left;"><?= $array['email']; ?></div>
                                            </div>

                                            <div class="modal-body row">
                                                <div style="width: 15%;"></div>
                                                <div class="isian-popup" style=" width : 35%; float: left;">Email Baru</div>
                                                <input style="width: 40%;" id="email_baru" name="email_baru">
                                                </input>
                                            </div>


                                            <div class="p-2"></div>


                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="submit" data-dismiss="modal">Ubah Email</button></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td><?= $array['prodi']; ?></td>
                            <td>
                                <button class="btn-edit btn btn-sm" type="button" data-toggle="modal" id="btn_ubah_prodi" data-target="#modal_ubah_prodi">Ubah Prodi</button>
                                <div class="modal fade" id="modal_ubah_prodi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Ubah ___ User</div>

                                            <div class="modal-body row">
                                                <div style="width: 15%;"></div>
                                                <div class="isian-popup" style=" width : 35%; float: left;">Prodi</div>
                                                <div class="isian-popup" style=" width : 40%; float: left;"><?= $array['prodi']; ?></div>
                                            </div>

                                            <div class="modal-body row">
                                                <div style="width: 15%;"></div>
                                                <div class="isian-popup" style=" width : 35%; float: left;">Email Baru</div>
                                                <select style="width: 40%;" id="prodi_baru" name="prodi_baru">
                                                    <option value="" selected disabled hidden> ... </option>
                                                    <option value="DIV S">DIV Statistika</option>
                                                    <option value="DIV KS">DIV Komp. Statistik</option>
                                                    <option value="DIII S">DIII Statistika</option>
                                                </select>
                                            </div>


                                            <div class="p-2"></div>


                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="submit" data-dismiss="modal">Ubah Prodi</button></div>
                                        </div>
                                    </div>
                                </div>
                                </td;>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td><?= $array['no_hp']; ?></td>
                            <td>
                                <button class="btn-edit btn btn-sm" type="button" data-toggle="modal" id="btn_ubah_nohp" data-target="#modal_ubah_nohp">Ubah Nomor</button>
                                <div class="modal fade" id="modal_ubah_nohp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Ubah ___ User</div>

                                            <div class="modal-body row">
                                                <div style="width: 15%;"></div>
                                                <div class="isian-popup" style=" width : 35%; float: left;">No Hp Sebelumnya</div>
                                                <div class="isian-popup" style=" width : 40%; float: left;"><?= $array['no_hp']; ?></div>
                                            </div>

                                            <div class="modal-body row">
                                                <div style="width: 15%;"></div>
                                                <div class="isian-popup" style=" width : 35%; float: left;">No Hp Baru</div>
                                                <input style="width: 40%;" id="nohp_baru" name="nohp_baru">
                                                </input>
                                            </div>


                                            <div class="p-2"></div>


                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="submit" data-dismiss="modal">Ubah Nomor HP</button></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container" style="text-align: center; justify-content: center; width: 20%;">

                <img class="foto-inside" src="<?= base_url('assets/img/avatar/' . $foto); ?>"></img>



                <button class="btn-edit btn btn-sm" type="button" data-toggle="modal" id="btn_ubah_foto" data-target="#modal_ubah_foto">Ubah Foto</button>
                <div class="modal fade" id="modal_ubah_foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Ubah ___ User</div>

                            <div class="modal-body row">
                                <div style="width: 15%;"></div>
                                <div class="isian-popup" style=" width : 35%; float: left;">Upload Foto</div>
                                <input style="width: 40%;" type="file" accept="jpg, png, jpeg" id="foto_baru" name="foto_baru">
                            </div>

                            <div class="p-2"></div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="submit" data-dismiss="modal">Ubah Foto</button></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <style>
            .ubah-pass {
                width: 80%;
                margin-top: 1rem;
                margin-left: 10%;
                font-size: 15px;
                color: black;
                font-family: Cambria;
                font-style: italic;
            }

            .button-left {
                margin-right: 10rem;
                float: right;
            }
        </style>

        <div class="justify-content-between pb-3 pt-4">
            <h1 class="head-sub-content" style="font-size: 20px !important;">B. Ubah Password</h1>
            <form>
                <div class="ubah-pass">
                    <div class="row">
                        <div style="width: 200px; float: left;">Password Baru
                        </div>
                        <div style="width: 75px;"></div>
                        <div style="width: 200px; float: left;">Confirm Password
                        </div>
                    </div>
                    <div class="row">
                        <input style="width: 200px;" id="pass1" name="pass1">
                        </input>
                        <div style="width: 75px;"></div>
                        <input style="width: 200px;" id="pass2" name="pass2">
                        </input>
                    </div>
                    <div class="row">
                        <div style="width: 200px;">
                        </div>
                        <div style="width: 75px;"></div>
                        <div style="width: 200px;" class="pt-4">
                            <button class="btn btn-primary btn-sm" style="float: right;">Ubah Password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>



</div>


<?php
if ($_POST['submit_button']) {
    $a = $_POST['update'];
    echo $a;
} else {
?>


<?php
} ?>