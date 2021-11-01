<?= $this->extend('layouts/master'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">

                <h3 class="mt-2">Data Penduduk</h3>

                <table class="table table-hover mt-2">
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
                        <tr>
                            <td>1</td>
                            <td>Fathur Rahman</td>
                            <td>Laki - Laki</td>
                            <td>Islam</td>
                            <td>BTN Andi Tonro Permai</td>
                            <td>
                                <a href="" class="btn btn-default">Show</a>
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>