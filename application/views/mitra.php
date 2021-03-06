<div class="row mt-4">
    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-xs-1"></div>
    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-xs-10">
        <h5 class="fw-bold text-center">FORM MITRA WARUNG</h5>
        <form method="post" action="<?php echo base_url('mitra/tambah_mitra'); ?>" enctype="multipart/form-data">
            <div class="form-group mt-2">
                <label for="nama_mitra">Nama Mitra</label>
                <input type="text" id="nama_mitra" name="f_nama_mitra" class="form-control" value="<?php echo set_value('f_nama_mitra') ?>" required>
            </div>
            <div class="form-group mt-2">
                <label for="warung">Nama Warung</label>
                <input type="text" id="warung" name="f_nama_warung" class="form-control" value="<?php echo set_value('f_nama_warung') ?>" required>
            </div>
            <div class="form-group mt-2">
                <label for="alamat">Alamat Warung</label>
                <input type="text" id="alamat" name="f_alamat_warung" class="form-control" value="<?php echo set_value('f_alamat_warung') ?>" required>
            </div>
            <div class="form-group mt-2">
                <label for="telp">No. Telp Warung</label>
                <input type="text" id="telp" name="f_no_telp_warung" class="form-control" value="<?php echo set_value('f_no_telp_warung') ?>" required>
            </div>
            <div class="form-group mt-2">
				<label>Gambar</label>
				<input type="file" name="f_gambar" class="form-control" required>
				<small class="text-danger">*Ukuran gambar maksimal 1 MB</small>
		    </div>
            <button type="submit" class="next_mitra btn btn-sm btn-primary mt-3">Gabung</button>
        </form>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-xs-1"></div>
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