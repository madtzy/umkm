<div class="margin">
	<div class="container-fluid">
		<h4>Detail History <div class="btn btn-sm btn-success">No. Pembeli : <?php echo $history->f_id_pembeli ?></div>
		</h4>
		<table class="table table-bordered table-hover table-striped">
			<tr class="text-center">
				<th>ID MAKANAN</th>
				<th>NAMA MAKANAN</th>
				<th>HARGA</th>
				<th>NAMA WARUNG</th>
			</tr>
			<?php foreach ($pesan as $psn) : ?>
				<tr>
					<td><?php echo $psn->f_id_makanan ?></td>
					<td><?php echo $psn->f_nama_makanan ?></td>
					<td>Rp. <?php echo number_format($psn->f_harga, 0, ',', '.') ?></td>
					<td><?php echo $psn->f_nama_warung ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<a href="<?php echo base_url('admin/data_history/index') ?>">
			<div class="btn btn-sm btn-primary">Kembali</div>
		</a>
	</div>
</div>
<footer class="bg-white mt-3">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; 2021 All Rights Reserved by-UMKM</span>
		</div>
	</div>
</footer>