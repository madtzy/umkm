	<div class="margin">
		<h5 class="text-dark fw-bold"><i class="fas fa-edit me-2"></i>EDIT DATA MAKANAN</h5>
		<hr>
		<?php foreach ($makanan as $mkn) : ?>
			<form method="post" action="<?php echo base_url() . 'admin/data_makanan/update' ?>" enctype="multipart/form-data">
				<div class="for-group">
					<label>Nama makanan</label>
					<input type="hidden" name="f_id_makanan" class="form-control" value="<?php echo $mkn->f_id_makanan ?>">
					<input type="text" name="f_nama_makanan" class="form-control" value="<?php echo $mkn->f_nama_makanan ?>">
				</div>
				<div class="for-group">
					<label>Harga</label>
					<input type="number" name="f_harga" class="form-control" value="<?php echo $mkn->f_harga ?>">
				</div>
				<div class="for-group">
					<label>Nama Warung</label>
					<input type="text" name="f_nama_warung" class="form-control" value="<?php echo $mkn->f_nama_warung ?>">
				</div>
				<div class="for-group">
					<label>Gambar</label>
					<?php if($mkn->f_gambar != null){ ?>
						<div style="margin-bottom:5px">
							<img src="<?php echo base_url() . '/uploads/makanan/' . $mkn->f_gambar ?>" style="width:150px">
						</div>
					<?php
					}
					?>
					<input type="file" name="f_gambar" class="form-control" value="<?php echo $mkn->f_gambar ?>">
					<small class="text-danger">*biarkan kosong jika tidak di ganti</small>
				</div>
				<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
				<?php echo anchor('admin/data_makanan/index/', '<div class="btn btn-sm btn-danger mt-3">Kembali</div>') ?>
			</form>
		<?php endforeach; ?>
	</div>
	<footer class="footer-edit bg-white">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; 2021 All Rights Reserved by UMKM Makanan</span>
		</div>
	</footer>