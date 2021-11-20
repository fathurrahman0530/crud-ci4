<?php $this->extend('layouts/master'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Penduduk</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/<?= $penduduk['image']; ?>" class="img-fluid rounded-start" alt="<?= $penduduk['nama_penduduk']; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">NIK : <?= $penduduk['nik']; ?></h5>
                            <p class="card-text">Nama Lenkap : <?= $penduduk['nama_penduduk']; ?></p>
                            <p class="card-text">Jenis Kelamin : <?= $penduduk['jenis_kelamin']; ?></p>
                            <p class="card-text">Agama : <?= $penduduk['agama']; ?></p>
                            <p class="card-text">Alamat : <?= $penduduk['alamat']; ?></p>
                            <a href="/penduduk">Kembali Ke Daftar Penduduk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?> 