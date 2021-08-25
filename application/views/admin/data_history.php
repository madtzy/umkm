<div class="margin">
	<h4 class="text-dark fw-bold mt-2 mb-4"><i class="bx bx-history me-2"></i>DATA HISTORY</h4>
	<table id="table" class="table table-dark table-striped" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pembeli</th>
				<th>Tanggal</th>
				<th>Alamat</th>
				<th>No. Telp</th>
				<th>Jumlah Order</th>
				<th>Total Bayar</th>
				<th class="text-center">Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$no = 1;
			foreach ($history as $his) : ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $his->f_nama_pembeli ?></td>
					<td><?php echo $his->f_tanggal ?></td>
					<td><?php echo $his->f_alamat ?></td>
					<td><?php echo $his->f_no_telp ?></td>
					<td><?php echo $his->f_jumlah_order ?></td>
					<td>Rp. <?php echo number_format($his->f_total_bayar, 0, ',', '.'); ?></td>
					<td class="text-center">
						<button class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail History"><?php echo anchor('admin/data_history/detail/' . $his->f_id_pembeli, '<i class="fas fa-search-plus text-white"></i>') ?></button>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<footer class="bg-white mt-5 pt-3">
	<div class="copyright text-center">
		<span>Copyright &copy; 2021 All Rights Reserved by-UMKM</span>
	</div>
</footer>