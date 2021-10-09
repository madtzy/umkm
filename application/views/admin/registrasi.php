 <div class="container-fluid">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6">
            <div class=" card o-hidden my-5">
                <div class="card-body">
                    <div class="p-5">
                        <div class="text-center">
                            <i class="fas fa-user-plus fa-5x mb-4 text-dark"></i>
                            <h1 class="h4 text-dark mb-4 font-weight-bold">FORM REGISTER</h1>
                        </div>
                        <form method="post" action="<?php echo base_url('admin/registrasi/daftar') ?>">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    <input type="text" class="form-control" name="f_nama" placeholder="Masukkan Nama Anda" value="<?php echo set_value('f_nama') ?>" required>
                                </div>
                                <?php echo form_error('f_nama', '<div class="text-danger small">','</div>') ?>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                        <input type="text" class="form-control" name="f_username" placeholder="Masukkan Username Anda" value="<?php echo set_value('f_username') ?>" required>
                                    </div>
                                    <?php echo form_error('f_username', '<div class="text-danger small">','</div>') ?>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                                            <input type="password" class="form-control" name="f_password_1" placeholder="Password" required>
                                        </div>  
                                        <?php echo form_error('f_password_1', '<div class="text-danger small">','</div>') ?>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                                            <input type="password" class="form-control" name="f_password_2" placeholder="Ulangi Password" required>
                                    </div>  
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Register</button>
                            </div> 
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url('admin/auth/login') ?>">Sudah Punya Akun? Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
