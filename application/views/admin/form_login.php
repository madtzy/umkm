<div class="container-fluid">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6">
            <div class=" card o-hidden my-5">
                <div class="card-body">
                    <div class="p-5">
                        <div class="text-center">
                            <i class="fas fa-user-circle fa-5x mb-4 text-dark"></i>
                            <h1 class="h4 text-dark mb-4 font-weight-bold">FORM LOGIN</h1>
                        </div>
                        <?php echo $this->session->flashdata('pesan') ?>
                        <?php echo $this->session->flashdata('berhasil') ?>
                        <form method="post" action="<?php echo base_url('admin/auth/login') ?>">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    <input type="text" class="form-control form-control-username" name="f_username" placeholder="Masukkan Username Anda" required>
                                </div>
                                <?php echo form_error('f_username', '<div class="text-danger small">','</div>'); ?>
                            </div>
                            <div class="form-group mt-3">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                    <input type="password" class="form-control form-control-password" name="f_password" placeholder="Masukkan Password Anda" required>
                                </div>
                                <?php echo form_error('f_password', '<div class="text-danger small">','</div>'); ?>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Login</button>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url ('admin/registrasi/daftar') ?>">Belum Punya Akun ? Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>