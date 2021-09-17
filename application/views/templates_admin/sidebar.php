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
                    <span class="nav__logo-name fw-bold fs-5"><i class="bx bx-restaurant bx-tada nav__logo-icon me-2"></i>Admin | UMKM</span>
                </a>
            </li>
            <div class="nav__list">
                <a href="<?php echo base_url('admin/dashboard_admin') ?>" class="nav__link active">
                    <span class="nav__name fs-6"><i class="bx bxs-dashboard bx-flashing nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dashboard"></i>Dashboard</span>
                </a>
                <a class="nav-link dropdown-bs-toggle text-white me-3" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
                    <i class="bx bx-food-menu nav__icon ms-2 mb-3 me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data Menu"></i>Menu
                </a>
                <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2">
                        <a class="dropdown-item text-white" href="<?php echo base_url('admin/data_makanan') ?>"><i class='bx bx-sm bxs-pizza ms-2 me-3'></i>Data Makanan</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item text-white" href="<?php echo base_url('admin/data_minuman') ?>"><i class='bx bx-sm bxs-drink ms-2 me-3'></i>Data Minuman</a>
                    </div>
                </div>
                <a href="<?php echo base_url('admin/data_warung/index') ?>" class="nav__link">
                    <span class="nav__name fs-6"><i class="bx bxs-institution nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data Warung"></i>Data Warung</span>
                </a>
                <a href="<?php echo base_url('admin/data_riwayat/index') ?>" class="nav__link">
                    <span class="nav__name fs-6"><i class="bx bx-history nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data Riwayat"></i>Data Riwayat</span>
                </a>
                <a href="<?php echo base_url('admin/data_mitra/index') ?>" class="nav__link">
                    <span class="nav__name fs-6"><i class="bx bxs-user-rectangle nav__icon me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Data mitra"></i>Data Mitra</span>
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