	<div class="margin">
		<h4 class="text-dark fw-bold mt-2"><i class="bx bxs-user-rectangle me-2"></i>DATA MITRA</h4>
		<hr>
		<table id="table" class="table table-dark table-striped" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Mitra</th>
					<th>Nama Warung</th>
					<th>Alamat Warung</th>
					<th>Tanggal</th>
					<th>No Telp Warung</th>
					<th>Gambar</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no = 1;
				foreach ($mitra as $gabung) : ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $gabung->f_nama_mitra ?></td>
						<td><?php echo $gabung->f_nama_warung ?></td>
						<td><?php echo $gabung->f_alamat_warung ?></td>
						<td><?php echo $gabung->f_tanggal ?></td>
						<td><?php echo $gabung->f_no_telp_warung ?></td>
						<td><img src="<?php echo base_url() . '/uploads/mitra/' . $gabung->f_gambar ?>" style="width:150px"></td>
						<td class="text-center">
							<span data-bs-toggle="modal" data-bs-target="#hapus_mitra">
								<button type="button" class="btn btn-sm btn-danger me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"><i class="fa fa-trash text-white"></i></button>
							</span>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<footer class="bg-white mt-5 pt-3">
		<div class="copyright text-center">
			<span>Copyright &copy; 2021 All Rights Reserved by UMKM Makanan</span>
		</div>
	</footer>

	<!-- Modal Hapus Mitra-->
	<div class="modal fade" id="hapus_mitra" tabindex="-1" aria-labelledby="hapus_mitra" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="hapus_mitra">HAPUS MITRA</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Anda yakin ingin menghapus data mitra tersebut ?</p>
				</div>
				<div class="modal-footer">
					<?php echo anchor('admin/data_mitra/hapus/' . $gabung->f_id_mitra, '<div class="btn btn-sm btn-primary">Hapus</div>') ?>
					<button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>