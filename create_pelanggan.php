<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('pelanggan/simpanpelanggan') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" id="exampleFormControlInput1" placeholder="nama pelanggan">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No Telp</label>
            <input type="number" name="no_tlp" class="form-control" id="exampleFormControlInput1" placeholder="no_tlp">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="alamat"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>