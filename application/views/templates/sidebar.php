<div class="container-fluid fixed-top" id="nav">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
      <i class="logo bx bx-sm bx-restaurant me-2"></i>
      <a class="navbar-brand me-auto fw-bold" href="#">UMKM | MAKANAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#drop" aria-controls="drop" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="drop">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-white me-3" href="<?php echo base_url ("dashboard") ?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle text-white me-3" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">Menu</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo base_url ("makanan/lihat_makanan") ?>">Makanan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?php echo base_url ("minuman/lihat_minuman") ?>">Minuman</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white me-3" href="<?php echo base_url ("warung/lihat_warung") ?>">Warung</a>
          </li>
          <li class="nav-item my-auto">
            <a class="mitra btn btn-sm btn-primary me-3" href="<?php echo base_url ("mitra/tampil_mitra") ?>">Mitra</a>
          </li>      
        </ul>
      </div>
    </nav>
  </div>
</div>
        
