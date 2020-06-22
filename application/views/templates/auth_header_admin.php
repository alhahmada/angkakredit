<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= $title; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/tabel.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>dataTables/dataTable/css/dataTables.bootstrap4.min.css">


</head>

<body class="bg-gradient-dark">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Bagian Menu Kiri -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- LOGO ANGKA KREDIT -->
            <div class="sidebar-brand">
                <img src="<?PHP echo base_url('assets/img/polstat.png'); ?>" style="width:75px;height:auto;"></img>
            </div>


            <!-- NAMA WEB SISTEM -->
            <div class="pt-3">
                <div class="sidebar-brand mb-2 mx-2">Angka Kredit Dosen</div>
            </div>


            <!-- MENU UTAMA BERANDA -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/beranda_admin'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Beranda</span></a>
            </li>
            <hr class="sidebar-divider">





            <!-- MENU UTAMA -->
            <div class="sidebar-heading">
                Menu Utama
            </div>
            <!-- Menu Utama Pertama User -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/daftar_pengajuanAK'); ?>">
                    <i class="fas fa-fw"></i>
                    <span>Daftar Pengajuan</span></a>
            </li>
            <!-- Menu Utama Kedua User -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/edit_user'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Edit User</span>
                </a>
            </li>
            <!-- Menu Utama Ketiga User -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw "></i>
                    <span>History</span></a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('admin/pengajuan_progress'); ?>">Pengajuan Progress</a>
                        <a class="collapse-item" href="<?= base_url('admin/pengajuan_tolak'); ?>">Pengajuan Ditolak</a>
                        <a class="collapse-item" href="<?= base_url('admin/pengajuan_selesai'); ?>">Pengajuan Selesai</a>
                    </div>
                </div>
            </li>
            <!-- Menu Utama Keempat User -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/informasi_admin'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Informasi Umum</span>
                </a>
            </li>
            <!-- Menu Utama Kelima User -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/data_dosen'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Database Dosen</span>
                </a>
            </li>


            <!-- Menu Tambahan User -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Lainnya
            </div>
            <!-- Menu Tambahan User Pertama-->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/edit_profil'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Edit Profil</span></a>
            </li>
            <!-- Menu Tambahan User Kedua-->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/setelan_admin'); ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
            <!-- Menu Tambahan User Ketiga-->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth'); ?>">
                    <i class="fas fa-sign-out-alt fa-fw"></i>
                    <span>Keluar</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Button Side Bar Biar Mengecil -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- Akhir Bagian Menu Kiri (Side-bar) -->







        <!-- Bagian Menu Atas -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Bagian Menu Atas Tengah -->
            <div id="content" style="max-height: 70px;">

                <nav class="navbar navbar-expand navbar-light topbar static-top shadow" style="background-color: #282b3b;">

                    <!--menampilkan jam aktif (Sebelah Kiri)-->

                    <style>
                        .jam {
                            font-size: 20px;
                            color: white;
                            font-family: Cambria;
                            font-weight: bold;
                        }
                    </style>
                    <h2 class="jam">
                        <script type='text/javascript'>
                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay(),
                                thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                            //-->
                        </script>
                    </h2>

                    <!-- Bagian Atas Sebelah Kanan -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Notifikasi-->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- Logo Notif-->
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Jumlah Notif yang Belum Dibaca -->
                                <span class="badge badge-danger badge-counter">-</span>
                            </a>

                            <!-- Notif Ketika Dibuka -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <!-- Judul -->
                                <h6 class="dropdown-header">
                                    Notifikasi
                                </h6>
                                <!-- Notifikasi / Pesan Yang Dikirim -->
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <!-- Buka Semua Notif -->
                                <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan Semua Notifikasi</a>
                            </div>
                        </li>

                        <div class="topbar-divider-dark-mode"></div>

                        <!-- Menampilkan Informasi User (Nama, Foto) -->
                        <li class="nav-item dropdown no-arrow">

                            <!-- Menampilkan Nama dan Foto User -->
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <style>
                                    .img-topbar {
                                        border-radius: 50% !important;
                                        width: 3rem;
                                        height: auto;
                                        border: black;
                                    }

                                    .nama-dosen-topbar {
                                        color: white !important;
                                        font-size: 80%;
                                        font-weight: 400;
                                        display: inline !important;
                                    }
                                </style>

                                <span class="mr-3 nama-dosen-topbar"><?= $nama; ?></span>
                                <img class="img-topbar" src="<?= base_url('assets/img/avatar/' . $foto); ?>">
                                <!-- <span class="mr-3 nama-dosen-topbar">Nama Dosen</span>
                                <img class="img-topbar" src="<?= base_url('assets/img/logo58.png'); ?>"> -->
                            </a>

                            <!-- Menampilkan Popup Ketia Foto atau nama di klik -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- Pilihan 1 (Lihat Profil) -->
                                <a class="dropdown-item" href="<?= base_url('admin/edit_profil'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profil
                                </a>
                                <!-- Pilihan 2 (Pengaturan) -->
                                <a class="dropdown-item" href="<?= base_url('admin/setelan_admin'); ?>">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan
                                </a>

                                <div class="dropdown-divider"></div>
                                <!-- Pilihan 3 (Keluar) -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>


                        </li>
                        <!-- Selesai Info User-->

                    </ul>
                </nav>



                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Topbar -->

            </div>

            <!-- DIV Wrapper dan Content-Wrapper Ditutup di Akhir (FOOTER)-->