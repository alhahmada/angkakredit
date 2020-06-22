<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-3 pt-4">

            <h1 class="head-content text-center">Pengajuan Angka Kredit Dosen</h1>
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


    <style>
        .senter {

            margin-top: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>


    <div class="container-fluid p-5 text-center">
        <!-- Content Column -->
        <div class="col-lg mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <div class="card-body">

                    <div class="chart-piee p-5 pt-3">
                        <h3 class="m-0 font-weight-bold text-primary">Selamat</h3>
                        <h5>Pengajuan Angka Kredit telah Sukses !</h5>
                    </div>

                    <div class="p-5">
                        <form class="user" method="post" action="<?= base_url('auth/beranda'); ?>">
                            <button type="submit" class="float-center btn btn-primary btn-user btn=block">
                                Kembali ke Halaman Beranda
                            </button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>