<div class="container" style="height: 90%;">
    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content">Edit User</h1>
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

                .button-tabel {
                    margin-right: 10rem;
                    float: right;
                }
            </style>
        </div>
    </div>



    <!-- Judul Halaman -->
    <div class="container pb-5" style="height: 40%;">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">
            <h1 class="head-sub-content">A. Tambahkan User</h1>
        </div>
        <h1 class="body-content">Menambahkan User Baru Dengan NIP Unik Dari Dosen Lainnya</h1>

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
        <div class="container pt-5">
            <button class="button-tabel btn btn-primary btn-sm" type="button" data-toggle="modal" id="btn_tambah_user" data-target="#modal_tambah_user">Tambah User</button>
            <div class="modal fade" id="modal_tambah_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Tambah User</div>

                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">NIP</div>
                            <input style="width: 40%;" id="nip_baru" name="nip_baru">
                            </input>
                        </div>
                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Nama Lengkap</div>
                            <input style="width: 40%;" id="nama_baru" name="nama_baru">
                            </input>
                        </div>
                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Email</div>
                            <input style="width: 40%;" id="email_baru" name="email_baru">
                            </input>
                        </div>
                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Angka Kredit</div>
                            <input style="width: 40%" id="ak_baru" name="ak_baru">
                            </input>
                        </div>

                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;"> Jabatan Fungsional</div>
                            <select style="width: 40%; float: left;" id="jab_fungsi_baru" name="jab_fungsi_baru">
                                <option value="" selected disabled hidden> ... </option>
                                <option value="Asisten Ahli"> Asisten Ahli </option>
                                <option value="Lektor"> Lektor </option>
                                <option value="Lektor Kepala"> Lektor Kepala </option>
                                <option value="Profesor"> Profesor </option>
                            </select>
                        </div>

                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Pangkat</div>
                            <select style="width: 40%;" id="pangkat_baru" name="pangkat_baru">
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
                        </div>

                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Golongan Ruang</div>
                            <select style="width: 40%;" id="gol_baru" name="gol_baru">
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
                        </div>

                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Program Studi</div>
                            <select style="width: 40%;" id="prodi_baru" name="prodi_baru">
                                <option value="" selected disabled hidden> ... </option>
                                <option value="DIV S">DIV Statistika</option>
                                <option value="DIV KS">DIV Komp. Statistik</option>
                                <option value="DIII S">DIII Statistika</option>
                            </select>
                        </div>
                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Password Awal</div>
                            <input style="width: 40%" id="pass_baru" name="pass_baru">
                            </input>
                        </div>
                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Role</div>
                            <select style="width: 40%;" id="role_baru" name="role_baru">
                                <option value="" selected disabled hidden> ... </option>
                                <option value="1">Administrator</option>
                                <option value="2">Dosen</option>
                                <option value="3">Dosen dan Verifikator</option>
                                <option value="4">Dosen, Verifikator dan Penilai</option>
                                <option value="5">Penilai</option>
                            </select>
                        </div>

                        <div class="p-2"></div>


                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tambah User</button></div>
                    </div>
                </div>
            </div>
        </div>

    </div>






    <!-- Judul Halaman -->
    <div class="container" style="height: 50%;">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">
            <h1 class="head-sub-content">B. Edit Role User</h1>
        </div>
        <h1 class="body-content pb-3">Menambahkan/mengubah Role/Tugas Dosen yang sudah terdaftar di Database</h1>

        <h1 class="body-content">Keterangan Role User</h1>

        <!-- Pop Up Tambah Role User -->
        <div class="container" style="margin-top: 3rem;">
            <button class="button-tabel btn btn-primary btn-sm" type="button" data-toggle="modal" id="btn_edit_role" data-target="#modal_edit_role">Tambah Role User</button>
            <div class="modal fade" id="modal_edit_role" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="pt-2 pb-4 head-popup" style="text-align: center; width: 100%;">Tambah User</div>

                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Nama Lengkap</div>
                            <input style="width: 40%;" id="nama_lengkap" name="nama_lengkap">
                            </input>
                        </div>

                        <div class="modal-body row">
                            <div style="width: 15%;"></div>
                            <div class="isian-popup" style=" width : 35%; float: left;">Ubah Role</div>
                            <select style="width: 40%;" id="role_baru" name="role_baru">
                                <option value="" selected disabled hidden> ... </option>
                                <option value="1">Administrator</option>
                                <option value="2">Dosen</option>
                                <option value="3">Dosen dan Verifikator</option>
                                <option value="4">Dosen, Verifikator dan Penilai</option>
                                <option value="5">Penilai</option>
                            </select>
                        </div>

                        <div class="p-2"></div>


                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Ubah Role User</button></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>