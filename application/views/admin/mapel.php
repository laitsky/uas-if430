<div class="container">
    <h4>Mata pelajaran yang diikuti oleh siswa ini:</h4>
    <?php foreach ($siswa_mapel as $sm) : ?>
        <h6><?= $sm['nama_mapel'] . " (Pengampu: " . $sm['pengampu'] . ")"; ?></h6>
    <?php endforeach; ?>
    <hr>
    <h4>Tambah mata pelajaran ke siswa ini</h4>
    <form action="" method="POST">
        <div class="form-group">
            <select name="nama_mapel" id="nama_mapel" class="custom-select">
                <option selected disabled>Pilih mata pelajaran</option>
                <?php foreach ($mapel as $m) : ?>
                    <option value="<?= $m['id_guru_mapel']; ?>"><?= $m['nama_mapel'] . " (Pengampu: " . $m['nama'] . ")"; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('nama_mapel', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <button class="btn btn-primary btn-block">Kaitkan guru dengan mata pelajaran ini!</button>
</div>
</form>
</div>