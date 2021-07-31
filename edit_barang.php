<div class="mt-3">
    <form action="<?= base_url('barang/editbarang') ?>" method="POST">
        <input type="hidden" name="barang_id" value="<?= $barang['barang_id'] ?>" <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" placeholder="nama barang" value="<?= $barang['nama_barang'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Harga</label>
    <input type="number" name="harga_barang" class="form-control" id="exampleFormControlInput1" placeholder="harga" value="<?= $barang['harga_barang'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Stok</label>
    <input type="number" name="stok" class="form-control" id="exampleFormControlInput1" placeholder="stock barang" value="<?= $barang['stok'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $barang['keterangan'] ?></textarea>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>