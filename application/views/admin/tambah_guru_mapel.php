<div class="container my-3">
    <?= $this->session->flashdata('message'); ?>
    <form action="" method="POST" class="col-lg-6 offset-lg-3">
        <div class="form-group">
            <select name="nama_mapel" id="nama_mapel" class="custom-select">
                <option selected disabled>Pilih mata pelajaran</option>
                <?php foreach ($mapel as $m) : ?>
                    <option value="<?= $m['id_mapel']; ?>"><?= $m['nama_mapel']; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('nama_mapel', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <button class="btn btn-primary btn-block">Kaitkan guru dengan mata pelajaran ini!</button>
    </form>
</div>