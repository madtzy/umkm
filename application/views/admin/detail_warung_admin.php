	<div class="margin">
		<div class="card">
			<div class="card-header fw-bold bg-primary"><i class="fas fa-search-plus me-2"></i>DETAIL WARUNG</div>
			<div class="card-body">
				<?php foreach ($warung as $wrg) : ?>
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url() . '/uploads/warung/' . $wrg->f_gambar ?>" class="card-img-top dgambar">
						</div>
						<div class="col-md-9">
							<table class="table">
								<tr>
									<td>Id Warung</td>
									<td><strong><?php echo $wrg->f_id_warung ?></strong></td>
								</tr>
								<tr>
									<td>Nama Warung</td>
									<td><strong><?php echo $wrg->f_nama_warung ?></strong></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td><strong><?php echo $wrg->f_alamat ?></strong></td>
								</tr>
								<tr>
									<td>No Telp</td>
									<td><strong><?php echo $wrg->f_no_telp ?></strong></td>
								</tr>
							</table>
							<?php echo anchor('admin/data_warung/index/', '<div class="btn btn-sm btn-danger mr-2">Kembali</div>') ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<footer class="footer-detail bg-white">
		<div class="copyright text-center">
			<span>Copyright &copy; 2021 All Rights Reserved by-UMKM</span>
		</div>
	</footer>