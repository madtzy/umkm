	<div class="margin">
		<h4 class="text-dark fw-bold mt-2 mb-4"><i class="bx bxs-institution me-2"></i>DATA WARUNG</h4>
		<?php echo $this->session->flashdata('berhasil') ?>
		<?php echo $this->session->flashdata('gagal') ?>
		<?php echo $this->session->flashdata('berhasil_update') ?>
		<?php echo $this->session->flashdata('gagal_update') ?>
		<button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_warung"><i class="fas fa-plus me-2"></i>TAMBAH WARUNG</button>
		<table id="table" class="table table-dark table-striped" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Warung</th>
					<th>Alamat</th>
					<th>No Telp</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$no = 1;
				foreach ($warung as $wrg) : ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $wrg->f_nama_warung; ?></td>
						<td><?php echo $wrg->f_alamat; ?></td>
						<td><?php echo $wrg->f_no_telp; ?></td>
						<td class="text-center">
							<button class="btn btn-sm btn-success me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail Warung"><?php echo anchor('admin/data_warung/detail_warung_admin/' . $wrg->f_id_warung, '<i class="fas fa-search-plus text-white"></i>'); ?></button>
							<button class="btn btn-sm btn-primary me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Warung"><?php echo anchor('admin/data_warung/edit/' . $wrg->f_id_warung, '<i class="fa fa-edit text-white"></i>'); ?></button>
							<span data-bs-toggle="modal" data-bs-target="#hapus_warung">
								<button type="button" class="btn btn-sm btn-danger me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Warung"><i class="fa fa-trash text-white"></i></button>
							</span>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<footer class="bg-white mt-3">
		<div class="copyright text-center">
			<span>Copyright &copy; 2021 All Rights Reserved by-UMKM</span>
		</div>
	</footer>


	<!-- Modal Tambah Warung-->
	<div class="modal fade" id="tambah_warung" tabindex="-1" aria-labelledby="tambah_warung" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tambah_warung">FORM INPUT WARUNG</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url() . 'admin/data_warung/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="warung">Nama Warung</label>
							<input type="text" id="warung" name="f_nama_warung" class="form-control" value="<?php echo set_value('f_nama_warung') ?>">
						</div>
						<?php echo form_error('f_nama_warung', '<div class="text-danger small">', '</div>') ?>
						<div class="form-group mt-2">
							<label for="alamat">Alamat</label>
							<input type="text" id="alamat" name="f_alamat" class="form-control" value="<?php echo set_value('f_alamat') ?>">
						</div>
						<?php echo form_error('f_alamat', '<div class="text-danger small">', '</div>') ?>
						<div class="form-group mt-2">
							<label for="telp">No Telp</label>
							<input type="number" id="telp" name="f_no_telp" class="form-control" value="<?php echo set_value('f_no_telp') ?>">
						</div>
						<?php echo form_error('f_no_telp', '<div class="text-danger small">', '</div>') ?>
						<div class="form-group mt-2">
							<label>Gambar</label>
							<input type="file" name="f_gambar" class="form-control">
						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Hapus Warung -->
	<div class="modal fade" id="hapus_warung" tabindex="-1" aria-labelledby="hapus_warung" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="hapus_warung">HAPUS WARUNG</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Anda yakin ingin menghapus data warung tersebut ?</p>
				</div>
				<div class="modal-footer">
					<?php echo anchor('admin/data_warung/hapus/' . $wrg->f_id_warung, '<div class="btn btn-sm btn-primary">Hapus</div>') ?>
					<button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</div>