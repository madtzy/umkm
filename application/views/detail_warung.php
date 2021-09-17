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
<script src="<?php echo base_url() ?>assets/js/umkm.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>