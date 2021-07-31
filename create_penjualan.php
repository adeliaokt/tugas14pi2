<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('barang/simpanbarang') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" placeholder="nama barang">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="number" name="harga_barang" class="form-control" id="exampleFormControlInput1" placeholder="harga">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" id="exampleFormControlInput1" placeholder="stock barang">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="keterangan"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>