	<div class="margin">
		<h5><i class="fas fa-edit me-3"></i>EDIT DATA WARUNG</h5>
		<?php foreach ($warung as $wrg) : ?>
			<form method="post" action="<?php echo base_url() . 'admin/data_warung/update' ?>">
				<div class="for-group">
					<label>Nama Warung</label>
					<input type="hidden" name="f_id_warung" class="form-control" value="<?php echo $wrg->f_id_warung ?>">
					<input type="text" name="f_nama_warung" class="form-control" value="<?php echo $wrg->f_nama_warung ?>">
				</div>
				<div class="for-group">
					<label>Alamat</label>
					<input type="hidden" name="f_id_warung" class="form-control" value="<?php echo $wrg->f_id_warung ?>">
					<input type="text" name="f_alamat" class="form-control" value="<?php echo $wrg->f_alamat ?>">
				</div>
				<div class="for-group">
					<label>No Telp</label>
					<input type="hidden" name="f_id_warung" class="form-control" value="<?php echo $wrg->f_id_warung ?>">
					<input type="number" name="f_no_telp" class="form-control" value="<?php echo $wrg->f_no_telp ?>">
				</div>
				<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
				<?php echo anchor('admin/data_warung/index/', '<div class="btn btn-sm btn-danger mt-3">Kembali</div>') ?>
			</form>
		<?php endforeach; ?>
	</div>
	<footer class="footer-edit bg-white">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; 2021 All Rights Reserved by-UMKM</span>
		</div>
	</footer>