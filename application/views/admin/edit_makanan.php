	<div class="margin">
		<h5><i class="fas fa-edit me-3"></i>EDIT DATA MAKANAN</h5>
		<?php foreach ($makanan as $makan) : ?>
			<form method="post" action="<?php echo base_url() . 'admin/data_makanan/update' ?>">
				<div class="for-group">
					<label>Nama Makanan</label>
					<input type="hidden" name="f_id_makanan" class="form-control" value="<?php echo $makan->f_id_makanan ?>">
					<input type="text" name="f_nama_makanan" class="form-control" value="<?php echo $makan->f_nama_makanan ?>">
				</div>
				<div class="for-group">
					<label>Harga</label>
					<input type="number" name="f_harga" class="form-control" value="<?php echo $makan->f_harga ?>">
				</div>
				<div class="for-group">
					<label>Nama Warung</label>
					<input type="text" name="f_nama_warung" class="form-control" value="<?php echo $makan->f_nama_warung ?>">
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