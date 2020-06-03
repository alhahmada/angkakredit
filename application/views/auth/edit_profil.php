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
    <div class="container pb-5" style="height: 40%;">
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

            .modal-width-750 {
                width: 750px !important;
                margin: auto;
            }
        </style>

        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">
            <h1 class="head-sub-content">A. Edit Data Diri</h1>
        </div>
        <table style="width: 80%; margin-left: 4rem;">
            <thead style="border: none; border-bottom: 1px solid black; text-align: center;">
                <tr>
                    <th style="width: 30%;"></th>
                    <th style="width: 50%;">Data</th>
                    <th style="width: 20%;">Action</th>
                </tr>
            </thead>
            <tbody class="pt-3">
                <tr>
                    <td>NIP</td>
                    <td style="width: 50%;">$get.from.tabel</td>
                    <td style="width: 20%;">
                        <button class="button-tabel btn btn-primary btn-sm" type="button" data-toggle="modal" id="btn_ubah_nip" data-target="#modal_ubah_nip">Ubah NIP</button>
                        <div class="modal fade" id="modal_ubah_nip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Ubah ___ User</div>

                                    <div class="modal-body row">
                                        <div style="width: 15%;"></div>
                                        <div class="isian-popup" style=" width : 35%; float: left;">NIP Sebelumnya</div>
                                        <div class="isian-popup" style=" width : 40%; float: left;">123456789012345678</div>
                                    </div>

                                    <div class="modal-body row">
                                        <div style="width: 15%;"></div>
                                        <div class="isian-popup" style=" width : 35%; float: left;">NIP Baru</div>
                                        <input style="width: 40%;" id="nip_baru" name="nip_baru">
                                        </input>
                                    </div>


                                    <div class="p-2"></div>


                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Ubah NIP</button></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nama Lengkap</td>
                    <td style="width: 50%;">$get.from.tabel</td>
                    <td style="width: 20%;">
                        <button class="button-tabel btn btn-primary btn-sm" type="button" data-toggle="modal" id="btn_ubah_nama" data-target="#modal_ubah_nama">Ubah Nama</button>
                        <div class="modal fade" id="modal_ubah_nama" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Ubah ___ User</div>

                                    <div class="modal-body row">
                                        <div style="width: 15%;"></div>
                                        <div class="isian-popup" style=" width : 35%; float: left;">Nama Lengkap</div>
                                        <div class="isian-popup" style=" width : 40%; float: left;">Alha Ahmada Belasae</div>
                                    </div>

                                    <div class="modal-body row">
                                        <div style="width: 15%;"></div>
                                        <div class="isian-popup" style=" width : 35%; float: left;">Nama Lengkap Baru</div>
                                        <input style="width: 40%;" id="nama_baru" name="nama_baru">
                                        </input>
                                    </div>


                                    <div class="p-2"></div>


                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Ubah Nama</button></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>



    </div>




    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">
            <h1 class="head-sub-content">B. Ubah Password</h1>
        </div>
        <h1 class="body-content">A. Edit Data Diri</h1>
    </div>


    <div class="container"></div>

</div>