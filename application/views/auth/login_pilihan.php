<div class="container-fluid">

    <!-- Outer Row -->
    <div class="pt-5"></div>
    <div class="pt-5"></div>

    <!-- Login Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 55%;">
                <div class="card-body">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg p-5">

                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pilih Masuk Sebagai :</h1>
                            </div>

                            <form class="user" method="post" action="<?= base_url('login/aksi_login_2'); ?>">

                                <?php if ($role == 3) { ?>
                                    <button type="submit" name="login_as" value="verificator" class="btn btn-danger btn-user btn-block">
                                        Verifikator
                                    </button>
                                    <button type="submit" name="login_as" value="dosen" class="btn btn-primary btn-user btn-block">
                                        Dosen
                                    </button>
                                <?php } elseif ($role == 4) { ?>
                                    <button type="submit" name="login_as" value="verificator" class="btn btn-danger btn-user btn-block">
                                        Verifikator
                                    </button>
                                    <button type="submit" name="login_as" value="dosen" class="btn btn-primary btn-user btn-block">
                                        Dosen
                                    </button>
                                    <button type="submit" name="login_as" value="penilai" class="btn btn-dark btn-user btn-block">
                                        Penilai
                                    </button>
                                <?php } ?>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Form -->

    <div class="pt-5"></div>


</div>