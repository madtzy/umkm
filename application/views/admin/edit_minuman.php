	<div class="margin">
		<h5 class="text-dark fw-bold"><i class="fas fa-edit me-2"></i>EDIT DATA MINUMAN</h5>
		<?php foreach ($minuman as $mnm) : ?>
			<form method="post" action="<?php echo base_url() . 'admin/data_minuman/update' ?>">
				<div class="for-group">
					<label>Nama minuman</label>
					<input type="hidden" name="f_id_minuman" class="form-control" value="<?php echo $mnm->f_id_minuman ?>">
					<input type="text" name="f_nama_minuman" class="form-control" value="<?php echo $mnm->f_nama_minuman ?>">
				</div>
				<div class="for-group">
					<label>Harga</label>
					<input type="number" name="f_harga" class="form-control" value="<?php echo $mnm->f_harga ?>">
				</div>
				<div class="for-group">
					<label>Nama Warung</label>
					<input type="text" name="f_nama_warung" class="form-control" value="<?php echo $mnm->f_nama_warung ?>">
				</div>
				<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
				<?php echo anchor('admin/data_minuman/index/', '<div class="btn btn-sm btn-danger mt-3">Kembali</div>') ?>
			</form>
		<?php endforeach; ?>
	</div>
	<footer class="footer-edit bg-white">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; 2021 All Rights Reserved by UMKM Makanan</span>
		</div>
	</footer>