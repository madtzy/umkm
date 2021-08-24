<div class="container">	
	<div class="detail_warung card">
		<div class="card-header fw-bold bg-primary">Detail Warung</div>
		<div class="card-body">
			<?php foreach($warung as $wrg) : ?>
			<div class="row">
				<div class="col-3">
					<img src="<?php echo base_url().'/uploads/warung/'.$wrg->f_gambar ?>" class="card-img-top gambar">
				</div>
				<div class="col-7">
					<table class="table">
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
					<?php echo anchor('warung/lihat_Warung/','<div class="kembali btn btn-sm btn-danger me-2">Kembali</div>') ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>