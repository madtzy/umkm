<header class="header" id="header">
    <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    <div class="text-black" style="font-size: 14px;">Selamat Datang <?php echo $this->session->userdata('f_username') ?></div>

</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <li class="backgorund_logo">
                <a href="#" class="nav__logo">
                    <span class="nav__logo-name fw-bold fs-5"><i class="bx bx-store-alt bx-tada nav__logo-icon me-2"></i>Admin | UMKM</span>
                </a>
            </li>
            <div class="nav__list">
                <a href="<?php echo base_url('admin/dashboard_admin') ?>" class="nav__link active">
                    <span class="nav__name fs-6"><i class="bx bxs-dashboard bx-flashing nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dashboard"></i>Dashboard</span>
                </a>
                <a href=" <?php echo base_url('admin/data_makanan') ?>" class="nav__link">
                    <span class="nav__name fs-6"><i class="bx bxs-pizza nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data Makanan"></i>Data Makanan</span>
                </a>
                <a href="<?php echo base_url('admin/data_warung/index') ?>" class="nav__link">
                    <span class="nav__name fs-6"><i class="bx bxs-institution nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data Warung"></i>Data Warung</span>
                </a>
                <a href="<?php echo base_url('admin/data_history/index') ?>" class="nav__link">
                    <span class="nav__name fs-6"><i class="bx bx-history nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data History"></i>Data History</span>
                </a>
                <a href="<?php echo base_url('admin/data_join/index') ?>" class="nav__link">
                    <span class="nav__name fs-6"><i class="bx bxs-user-rectangle nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data Join"></i>Data Join</span>
                </a>
                <ul class="nav__link aksi">
                    <?php if ($this->session->userdata('f_username')) { ?>
                        <?php echo anchor('admin/auth/logout', '<span class="nav__name fs-6"><i class="bx bx-log-out nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Logout"></i>Logout</span>'); ?>
                    <?php } else { ?>
                        <?php echo anchor('admin/auth/login', '<span class="nav__name fs-6"><i class="bx bx-log-in nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login"></i>Login</span>'); ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>