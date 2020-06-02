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
                <a class="nav-link" href="<?= base_url('auth/beranda'); ?>">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Daftarkan Pengajuan</span></a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('dosen/pengajuan_dosen'); ?>">Pengajuan Baru</a>
                        <a class="collapse-item" href="<?= base_url('dosen/history_pengajuan'); ?>">Pengajuan Lama</a>
                    </div>
                </div>
            </li>
            <!-- Menu Utama Kedua User -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/informasi'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Informasi Umum</span>
                </a>
            </li>
            <!-- Menu Utama Ketiga User -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dosen/history_pengajuan'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>History Pegajuan</span>
                </a>
            </li>


            <!-- Menu Tambahan User -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Lainnya
            </div>
            <!-- Menu Tambahan User Pertama-->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/setting'); ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Setting</span>
                </a>
            </li>
            <!-- Menu Tambahan User Kedua-->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/informasi'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pusat Informasi</span></a>
            </li>
            <!-- Menu Tambahan User Ketiga-->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth'); ?>">
                    <i class="fas fa-sign-out-alt fa-fw"></i>
                    <span>Log Out</span></a>
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
            <nav class="navbar navbar-expand navbar-light topbar static-top shadow" style="background-color: #282b3b;">

                <!--menampilkan jam aktif (Sebelah Kiri)-->
                <script type="text/javascript">
                    function showTime() {
                        var a_p = "";
                        var today = new Date();
                        var curr_hour = today.getHours();
                        var curr_minute = today.getMinutes();
                        var curr_second = today.getSeconds();
                        if (curr_hour < 12) {
                            a_p = "AM";
                        } else {
                            a_p = "PM";
                        }
                        if (curr_hour == 0) {
                            curr_hour = 12;
                        }
                        if (curr_hour > 12) {
                            curr_hour = curr_hour - 12;
                        }
                        curr_hour = checkTime(curr_hour);
                        curr_minute = checkTime(curr_minute);
                        curr_second = checkTime(curr_second);
                        document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                    }

                    function checkTime(i) {
                        if (i < 10) {
                            i = "0" + i;
                        }
                        return i;
                    }

                    setInterval(showTime, 500);
                </script>
                <style>
                    .jam-tampil {
                        font-size: 20px;
                        color: white;
                        font-family: Cambria;
                        font-weight: bold;
                    }
                </style>
                <h2 class="jam-tampil">
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
                        </a>

                        <!-- Menampilkan Popup Ketia Foto atau nama di klik -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <!-- Pilihan 1 (Lihat Profil) -->
                            <a class="dropdown-item" href="<?= base_url('auth/profil'); ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profil
                            </a>
                            <!-- Pilihan 2 (Pengaturan) -->
                            <a class="dropdown-item" href="<?= base_url('auth/setting'); ?>">
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
                    font-size: 14px;
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

                <button class="tab" onclick="openinfoTab(event, 'umum')">Informasi Umum</button>
                <button class="tab" onclick="openinfoTab(event, 'pendidikan')">Unsur Pendidikan</button>
                <button class="tab" onclick="openinfoTab(event, 'penelitian')">Unsur Penelitian</button>
                <button class="tab" onclick="openinfoTab(event, 'pengmas')">Unsur Peng. Msyarakat</button>
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
                </style>

                <!-- Tab Informasi Umum -->
                <div id="umum" class="tabcontent pt-5">

                    <!-- Judul Halaman -->
                    <div class="container">
                        <!-- Row Pertama -->
                        <div class="justify-content-between pb-5 pt-5">
                            <h1 class="head-content">Infoemasi Umum</h1>
                        </div>

                    </div>
                </div>

                <!-- Tab Pendidikan -->
                <div id="pendidikan" class="tabcontent pt-5">
                    <!-- Judul Halaman -->
                    <div class="container">
                        <!-- Row Pertama -->
                        <div class="justify-content-between pb-5 pt-5">
                            <h1 class="head-content">Pendidikan dan Pelaksanaan Pendidikan</h1>
                        </div>

                    </div>
                </div>

                <!-- Tab Penelitian -->
                <div id="penelitian" class="tabcontent pt-5">
                    <!-- Judul Halaman -->
                    <div class="container">
                        <!-- Row Pertama -->
                        <div class="justify-content-between pb-5 pt-5">
                            <h1 class="head-content">Penelitian</h1>
                        </div>

                    </div>
                </div>

                <!-- Tab Pengabdian Masyarakat -->
                <div id="pengmas" class="tabcontent pt-5">
                    <!-- Judul Halaman -->
                    <div class="container">
                        <!-- Row Pertama -->
                        <div class="justify-content-between pb-5 pt-5">
                            <h1 class="head-content">Pengabdian Masyarakat</h1>
                        </div>

                    </div>
                </div>

                <!-- Tab Unsur Penunjang -->
                <div id="penunjang" class="tabcontent pt-5">
                    <!-- Judul Halaman -->
                    <div class="container">
                        <!-- Row Pertama -->
                        <div class="justify-content-between pb-5 pt-5">
                            <h1 class="head-content">Penunjang</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

<!-- Footer -->
<footer style="background-color: #282b3b; height: 5px;">

</footer>


<footer class="sticky-footer" style="background-color: #494e57;">
    <style>
        .text-ftr {
            font-family: Roboto;
            color: white;
            width: 33.2%;
            margin-top: 0;
        }

        .small {
            font-size: 11px;
            margin-bottom: 1rem;
        }

        .med {
            font-size: 14px;
            /* font-weight: bold; */
        }

        .ftr-divider {
            width: 0;
            border-right: 2px solid #5a5c69;
            height: 5rem;
        }
    </style>

    <div class="" style="background-color: #494e57; height: 5rem;">
        <div class="row" style="width: 100%; align-items: center;">
            <div class="text-ftr text-center">
                <h5 class="small">Contact</h5>
                <h5 class="med">Email 16.8993@stis.ac.id</h5>
            </div>
            <div class="ftr-divider"></div>
            <div class="text-ftr text-center">
                <h5 class="small">About Developer</h5>
                <h5 class="med">Alha Ahmada Belasae | 16.8993 | Polstat STIS</h5>
            </div>
            <div class="ftr-divider"></div>
            <div class="text-ftr text-center">
                <h5 class="small">Version</h5>
                <h5 class="med">Versi 1.0, Last Modified June 2020</h5>
            </div>
        </div>
    </div>

</footer>

<footer class="sticky-footer" style="height: 4rem; background-color: #282b3b;">

    <div class="" style="background-color: #282b3b;">
        <div class="container my-auto">
            <div class="copyright text-center" style="color: white;">
                <span>Copyright &copy; Angka Kredit Politeknik Statistika STIS 2020</span>
            </div>
        </div>
    </div>

</footer>
<!-- End of Footer -->

</html>