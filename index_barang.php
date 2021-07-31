<div class="row mt-3">
    <div class="col-3">
        <a href="<?= base_url('barang/create') ?>" class="btn btn-success">Tambah</></a>
    </div>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Stok</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($allbarang as $no => $barang) {
        ?>
            <tr>
                <th scope="row"><?= $no + 1 ?></th>
                <td><?= $barang['nama_barang']; ?></td>
                <td><?= $barang['harga_barang']; ?></td>
                <td><?= $barang['stok']; ?></td>
                <td><?= $barang['keterangan']; ?></td>

                <td>
                    <a href="<?= base_url('barang/edit/' . $barang['barang_id']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('barang/hapus/' . $barang['barang_id']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>