<?php $this->extend('layouts/master'); ?>

<?php $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <h2>Form Tambah Data Penduduk</h2>
      <form action="/penduduk/save" method="POST">
        <?= csrf_field(); ?>
        <div class="row mb-3">
          <label for="nik" class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-10">
            <input type="text" name="nik" class="form-control" id="nik" autofocus>
          </div>
        </div>
        <div class="row mb-3">
          <label for="namaPenduduk" class="col-sm-2 col-form-label">Nama Penduduk</label>
          <div class="col-sm-10">
            <input type="text" name="namaPenduduk" class="form-control" id="namaPenduduk">
          </div>
        </div>
        <div class="row mb-3">
          <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <input type="text" name="jenisKelamin" class="form-control" id="jenisKelamin">
          </div>
        </div>
        <div class="row mb-3">
          <label for="agama" class="col-sm-2 col-form-label">Agama</label>
          <div class="col-sm-10">
            <input type="text" name="agama" class="form-control" id="agama">
          </div>
        </div>
        <div class="row mb-3">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" id="alamat">
          </div>
        </div>
        <div class="row mb-3">
          <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
          <div class="col-sm-10">
            <input type="text" name="gambar" class="form-control" id="gambar">
          </div>
        </div>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
<?php $this->endSection();
