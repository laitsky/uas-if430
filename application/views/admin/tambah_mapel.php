<div class="container my-3">
    <form action="" method="POST" class="col-lg-6 offset-lg-3">
        <div class="form-group">
            <label for="nama_mapel">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" placeholder="Masukkan nama mata pelajaran...">
            <?= form_error('nama_mapel', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <button class="btn btn-block btn-primary">Tambah mata pelajaran</button>
    </form>
</div>