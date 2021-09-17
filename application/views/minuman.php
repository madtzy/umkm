<!-- start carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/3.jpg') ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end carousel -->
<!-- start content minuman -->
<div class="container py-2">
    <div class="row">
        <div class="col-12 text-center">
            <h5 class="judul text-center fw-bold mt-3">MINUMAN</h5>
            <?php echo form_open('minuman/search'); ?>
            <div class="form-group d-flex">
                <input class="search form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-search btn-outline-dark" type="submit">Search</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <?php foreach ($minuman as $mnm) : ?>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 text-center">
                <div class="card mt-3">
                    <img src="<?php echo base_url() . '/uploads/minuman/' . $mnm->f_gambar ?>" class="card-img-top gambar" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2"><?php echo $mnm->f_nama_minuman ?></h5>
                        <span class="badge bg-success mb-2">Rp. <?php echo number_format($mnm->f_harga, 0, ',', '.') ?></span>
                        <h5 class="card-title"><?php echo $mnm->f_nama_warung ?></h5>
                        <?php echo anchor('minuman/pembelian_minuman/' . $mnm->f_id_minuman, '<div class="beli btn btn-sm btn-primary">Beli</div>'); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- end content minuman -->