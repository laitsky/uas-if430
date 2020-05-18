<?php
if ($detail['nilai_tugas'] == NULL) {
    $nilai_tugas = 0;
} else {
    $nilai_tugas = $detail['nilai_tugas'];
}

if ($detail['nilai_uts'] == NULL) {
    $nilai_uts = 0;
} else {
    $nilai_uts = $detail['nilai_uts'];
}

if ($detail['nilai_uas'] == NULL) {
    $nilai_uas = 0;
} else {
    $nilai_uas = $detail['nilai_uas'];
}
?>
<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <h1 class="text-center"><?= $detail['nama_kelas']; ?></h1> <hr>
    <form action="" method="POST" class="col-lg-6 offset-lg-3">
        <div class="form-group">
            <label for="nilai_tugas">Nilai Tugas</label>
            <input type="text" id="nilai_tugas" name="nilai_tugas" class="form-control" value="<?= $nilai_tugas; ?>">
            <?= form_error('nilai_tugas', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="nilai_uts">Nilai UTS</label>
            <input type="text" id="nilai_uts" name="nilai_uts" class="form-control" value="<?= $nilai_uts; ?>">
            <?= form_error('nilai_uts', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="nilai_uas">Nilai UAS</label>
            <input type="text" id="nilai_uas" name="nilai_uas" class="form-control" value="<?= $nilai_uas; ?>">
            <?= form_error('nilai_uas', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <button class="btn btn-block btn-primary">Submit Nilai</button>
    </form>
</div>