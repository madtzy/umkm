<div class="margin">
	<div class="container-fluid">
		<h5 class="text-dark fw-bold"><i class="fas fa-search-plus me-2"></i>DETAIL RIWAYAT<div class="btn btn-sm btn-success ms-2">No. Pembeli : <?php echo $riwayat->f_id_pembeli ?></div></h5>
		<hr>
		<table id="table" class="table table-dark table-striped" style="width:100%">
		<thead>
			<tr>
				<th>Nama Minuman</th>
				<th>Harga</th>
				<th>Nama Warung</th>
				<th>Gambar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($detail_minuman as $mnm) : ?>
				<tr>
					<td><?php echo $mnm->f_nama_minuman ?></td>
					<td>Rp. <?php echo number_format($mnm->f_harga,0,',','.') ?></td>
					<td><?php echo $mnm->f_nama_warung ?></td>
					<td><img src="<?php echo base_url() . '/uploads/minuman/' . $mnm->f_gambar ?>" style="width:150px"></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
		<a href="<?php echo base_url('admin/data_riwayat/index') ?>">
			<div class="btn btn-sm btn-primary">Kembali</div>
		</a>
	</div>
</div>
<footer class="footer-detail-riwayat bg-white">
	<div class="copyright text-center">
		<span>Copyright &copy; 2021 All Rights Reserved by UMKM Makanan</span>
	</div>
</footer>