<div class="row mt-3">
    <div class="col-3">
        <a href="<?= base_url('pelanggan/create') ?>" class="btn btn-success">Tambah</a>
    </div>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">No Telp</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($allpelanggan as $no => $pelanggan) {
        ?>
            <tr>
                <th scope="row"><?= $no + 1 ?></th>
                <td><?= $pelanggan['nama_pelanggan']; ?></td>
                <td><?= $pelanggan['no_tlp']; ?></td>
                <td><?= $pelanggan['alamat']; ?></td>

                <td>
                    <a href="<?= base_url('pelanggan/edit/' . $pelanggan['pelanggan_id']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('pelanggan/hapus/' . $pelanggan['pelanggan_id']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>