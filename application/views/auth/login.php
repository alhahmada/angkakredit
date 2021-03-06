<div class="container-fluid">

    <!-- Outer Row -->
    <div class="pt-5"></div>

    <!-- Login Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 55%;">
                <div class="card-body">
                    <!-- Nested Row within Card Body -->
                    <div class="row">


                        <?php if ($error == 'error') { ?>
                            <div style="width: 100%;background-color: red;color: black;text-align: center;">Username dan password salah !</div>
                        <?php } ?>
                        <div class="col-lg p-5">

                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Halaman Log In</h1>
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
                                        <label class="custom-control-label" for="customCheck" style="color: black;">Remember Me</label>
                                    </div>
                                </div>

                                <button type="submit" value="dosen" class="btn btn-primary btn-user btn-block">
                                    Masuk
                                </button>
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