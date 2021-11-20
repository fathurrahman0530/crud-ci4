<?= $this->extend('layouts/master'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">

                <h3 class="mt-2">Data Penduduk</h3>

                <a href="" class="btn btn-primary mt-3">Add Penduduk</a>

                <table class="table table-hover mt-3">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($penduduk as $p) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama_penduduk']; ?></td>
                            <td><?= $p['jenis_kelamin'] ?></td>
                            <td><?= $p['agama']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td>
                                <a href="/penduduk/<?= $p['slug']; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>