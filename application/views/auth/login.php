<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <?php if ($error == 'error') { ?>
                            <div style="width: 100%;background-color: red;color: black;text-align: center;">Username dan password salah !</div>
                        <?php } ?>
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('login/aksi_login'); ?>">
                                    <div class="form-group">
                                        <input type="email" required="required" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required="required" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Masuk Sebagai Dosen
                                    </button>

                                    <a href="index.html" style="background-color: #1cc88a;" class="btn-penilai btn-user btn-block">
                                        Masuk Sebagai Tim Penilai
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        Masuk Sebagai Verifikator
                                    </a>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        Masuk Sebagai Administrator
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>