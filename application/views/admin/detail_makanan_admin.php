	<div class="margin">
		<div class="card">
			<div class="card-header fw-bold bg-primary"><i class="fas fa-search-plus me-2"></i>DETAIL MAKANAN</div>
			<div class="card-body">
				<?php foreach ($makanan as $mkn) : ?>
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url() . '/uploads/makanan/' . $mkn->f_gambar ?>" class="card-img-top dgambar">
						</div>
						<div class="col-md-9">
							<table class="table">
								<tr>
									<td>Nama Makanan</td>
									<td>
										<strong><?php echo $mkn->f_nama_makanan ?></strong>
									</td>
								</tr>
								<tr>
									<td>Harga</td>
									<td>
										<strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($mkn->f_harga, 0, ',', '.') ?></div></strong>
									</td>
								</tr>
								<tr>
									<td>Nama Warung</td>
									<td>
										<strong><?php echo $mkn->f_nama_warung ?></strong>
									</td>
								</tr>
							</table>
							<?php echo anchor('admin/data_makanan/index/', '<div class="btn btn-sm btn-danger mr-2">Kembali</div>') ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<footer class="footer-detail bg-white">
		<div class="copyright text-center">
			<span>Copyright &copy; 2021 All Rights Reserved by-UMKM Makanan</span>
		</div>
	</footer>