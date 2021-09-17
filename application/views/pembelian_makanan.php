<div class="row mt-4">
    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-xs-1"></div>
    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-xs-10">
        <h5 class="fw-bold text-center">FORM PEMBELIAN MAKANAN</h5>
        <form method="post" action="<?php echo base_url('makanan/tambah_pembeli'); ?>" class="pembelian">
            <?php foreach ($makanan as $mkn) : ?>
                <div class="form-group">
                    <input type="hidden" name="f_id_makanan" class="form-control" value="<?php echo $mkn->f_id_makanan ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="f_nama_makanan" class="form-control" value="<?php echo $mkn->f_nama_makanan ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="f_harga" class="form-control" id="harga" value="<?php echo $mkn->f_harga ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="f_nama_warung" class="form-control" value="<?php echo $mkn->f_nama_warung ?>">
                </div>
            <?php endforeach; ?>
            <div class="form-group mt-2">
                <label for="nama">Nama Pembeli</label>
                <input type="text" id="nama" name="f_nama_pembeli" class="form-control">
                <?php echo form_error('f_nama_pembeli', '<div class="text-danger small">', '</div>') ?>
            </div>
            <div class="form-group mt-2">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="f_alamat" class="form-control">
                <?php echo form_error('f_alamat', '<div class="text-danger small">', '</div>') ?>
            </div>
            <div class="form-group mt-2">
                <label for="telp">No. Telp</label>
                <input type="text" id="telp" name="f_no_telp" class="form-control">
                <?php echo form_error('f_no_telp', '<div class="text-danger small">', '</div>') ?>
            </div>
            <div class="form-group mt-2">
                <label for="jumlah">Jumlah Order</label>
                <input type="number" id="jumlah" name="f_jumlah_order" class="form-control">
                <?php echo form_error('f_jumlah_order', '<div class="text-danger small">', '</div>') ?>
            </div>
            <div class="form-group mt-2">
                <label for="total">Total Bayar</label>
                <input type="number" id="total" name="f_total_bayar" class="form-control">
            </div>
            <button type="submit" class="checkout btn btn-sm btn-primary mt-3">Checkout</button>
        </form>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-2 col-xs-1"></div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(".pembelian").keyup(function() {
        var harga = parseInt($("#harga").val())
        var jumlah = parseInt($("#jumlah").val())

        var total = harga * jumlah;
        $("#total").attr("value", total)
    })
</script>

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