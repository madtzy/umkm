	<div class="margin">
		<h4 class="text-dark fw-bold mt-2 mb-4"><i class="bx bxs-pizza me-2"></i>DATA MAKANAN</h4>
		<?php echo $this->session->flashdata('berhasil_tambah') ?>
		<?php echo $this->session->flashdata('gagal_tambah') ?>
		<?php echo $this->session->flashdata('berhasil_update') ?>
		<?php echo $this->session->flashdata('gagal_update') ?>
		<button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_makanan"><i class="fas fa-plus me-2"></i>TAMBAH MAKANAN</button>
		<table id="table" class="table table-dark table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Makanan</th>
					<th>Harga</th>
					<th>Nama Warung</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no = 1;
				foreach ($makanan as $makan) : ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $makan->f_nama_makanan; ?></td>
						<td>Rp. <?php echo number_format($makan->f_harga, 0, ',', '.'); ?></td>
						<td><?php echo $makan->f_nama_warung ?></td>
						<td class="text-center">
							<button class="btn btn-sm btn-success me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail Makanan"><?php echo anchor('admin/data_makanan/detail_makanan_admin/' . $makan->f_id_makanan, '<i class="fas fa-search-plus text-white"></i>'); ?></button>
							<button class="btn btn-sm btn-primary me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Makanan"><?php echo anchor('admin/data_makanan/edit/' . $makan->f_id_makanan, '<i class="fa fa-edit text-white"></i>'); ?></button>
							<span data-bs-toggle="modal" data-bs-target="#hapus_makanan">
								<button type="button" class="btn btn-sm btn-danger me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Makanan"><i class="fa fa-trash text-white"></i></button>
							</span>


						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<footer class="bg-white mt-3">
		<div class="copyright text-center">
			<span>Copyright &copy; 2021 All Rights Reserved by UMKM Makanan</span>
		</div>
	</footer>


	<!-- Modal Tambah Makanan-->
	<div class="modal fade" id="tambah_makanan" tabindex="-1" aria-labelledby="tambah_makanan" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tambah_makanan">FORM INPUT MAKANAN</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url() . 'admin/data_makanan/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="makanan">Nama Makanan</label>
							<input type="text" id="makanan" name="f_nama_makanan" class="form-control">
						</div>
						<?php echo form_error('f_nama_makanan', '<div class="text-danger small">', '</div>') ?>
						<div class="form-group mt-2">
							<label for="harga">Harga</label>
							<input type="number" id="harga" name="f_harga" class="form-control">
						</div>
						<?php echo form_error('f_harga', '<div class="text-danger small">', '</div>') ?>
						<div class="form-group mt-2">
							<label for="warung">Nama Warung</label>
							<input type="text" id="warung" name="f_nama_warung" class="form-control">
						</div>
						<?php echo form_error('f_nama_warung', '<div class="text-danger small">', '</div>') ?>
						<div class="form-group mt-2">
							<label>Gambar</label>
							<input type="file" name="f_gambar" class="form-control">
						</div>
						<?php echo form_error('f_gambar', '<div class="text-danger small">', '</div>') ?>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Hapus Makanan-->
	<div class="modal fade" id="hapus_makanan" tabindex="-1" aria-labelledby="hapus_makanan" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="hapus_makanan">HAPUS MAKANAN</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Anda yakin ingin menghapus data makanan tersebut ?</p>
				</div>
				<div class="modal-footer">
					<?php echo anchor('admin/data_makanan/hapus/' . $makan->f_id_makanan, '<div class="btn btn-sm btn-primary">Hapus</div>') ?>
					<button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</div>