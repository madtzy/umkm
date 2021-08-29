<div class="margin">
	<div class="container-fluid">
		<h4>Detail History<div class="btn btn-sm btn-success ms-2">No. Pembeli : <?php echo $history->f_id_pembeli ?></div></h4>
		<table id="table" class="table table-dark table-striped" style="width:100%">
		<thead>
			<tr>
				<th>Id Makanan</th>
				<th>Nama Makanan</th>
				<th>Harga</th>
				<th>Nama Warung</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pesanan as $pesan) : ?>
				<tr>
					<td><?php echo $pesan->f_id_makanan ?></td>
					<td><?php echo $pesan->f_nama_makanan ?></td>
					<td>Rp. <?php echo number_format($pesan->f_harga,0,',','.') ?></td>
					<td><?php echo $pesan->f_nama_warung ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
		<a href="<?php echo base_url('admin/data_history/index') ?>">
			<div class="btn btn-sm btn-primary">Kembali</div>
		</a>
	</div>
</div>
<footer class="footer-detail-history bg-white">
	<div class="copyright text-center">
		<span>Copyright &copy; 2021 All Rights Reserved by-UMKM</span>
	</div>
</footer>