<div class="mt-3">
    <form action="<?= base_url('pelanggan/editpelanggan') ?>" method="POST">
        <input type="hidden" name="pelanggan_id" value="<?= $pelanggan['pelanggan_id'] ?>" <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama pelanggan</label>
        <input type="text" name="nama_pelanggan" class="form-control" id="exampleFormControlInput1" placeholder="nama pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telp</label>
    <input type="number" name="no_tlp" class="form-control" id="exampleFormControlInput1" placeholder="harga" value="<?= $pelanggan['no_tlp'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $pelanggan['alamat'] ?></textarea>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>