<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('penjualandetail/simpandetailpenjualan'); ?>" method="POST">
        <input type="hidden" name="penjualan_id" value="<?= $penjualan['penjualan_id'] ?>" <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
        <select class="form-select" name="barang_id" aria-label="Default select example">
            <option selected>-- pilih barang --</option>

            <?php foreach ($allbarang as $key => $barang) { ?>

                <option value="<?= $barang['barang_id'] ?>"><?= $barang['nama_barang'] ?> = <?= $barang['harga_barang'] ?> </option>
            <?php } ?>

        </select>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
    <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="jumlah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Diskon</label>
    <input type="number" name="diskon" class="form-control" id="exampleFormControlInput1" placeholder="diskon" value="0">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
</div>
</div>