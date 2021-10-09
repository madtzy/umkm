	<div class="margin">
		<h5 class="text-dark fw-bold"><i class="fas fa-edit me-2"></i>EDIT DATA WARUNG</h5>
		<hr>
		<?php foreach ($warung as $wrg) : ?>
			<form method="post" action="<?php echo base_url() . 'admin/data_warung/update' ?>" enctype="multipart/form-data">
				<div class="for-group">
					<label>Nama Warung</label>
					<input type="hidden" name="f_id_warung" class="form-control" value="<?php echo $wrg->f_id_warung ?>">
					<input type="text" name="f_nama_warung" class="form-control" value="<?php echo $wrg->f_nama_warung ?>" required>
				</div>
				<div class="for-group">
					<label>Alamat</label>
					<input type="text" name="f_alamat" class="form-control" value="<?php echo $wrg->f_alamat ?>" required>
				</div>
				<div class="for-group">
					<label>No Telp</label>
					<input type="number" name="f_no_telp" class="form-control" value="<?php echo $wrg->f_no_telp ?>" required>
				</div>
				<div class="for-group">
					<label>Gambar</label>
					<?php if($wrg->f_gambar != null){ ?>
						<div style="margin-bottom:5px">
							<img src="<?php echo base_url() . '/uploads/warung/' . $wrg->f_gambar ?>" style="width:150px">
						</div>
					<?php
					}
					?>
					<input type="file" name="f_gambar" class="form-control" value="<?php echo $wrg->f_gambar ?>" required>
					<small class="text-danger">*Ukuran gambar maksimal 1 MB</small>
				</div>
				<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
				<?php echo anchor('admin/data_warung/index/', '<div class="btn btn-sm btn-danger mt-3">Batal</div>') ?>
			</form>
		<?php endforeach; ?>
	</div>
	<footer class="footer-edit bg-white">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; 2021 All Rights Reserved by UMKM Makanan</span>
		</div>
	</footer>