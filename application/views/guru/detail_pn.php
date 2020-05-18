<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <?php if ($detail['is_read'] == 1) : ?>
        <div class="alert alert-info mt-3" role="alert">Kamu sudah melakukan peninjauan nilai terhadap siswa ini!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php endif; ?>
    <div class="text-center">
        <h1>Peninjauan Nilai</h1>
        <h3><?= $detail['nama'] . " - " . $detail['nama_kelas']; ?></h3>
    </div>
    <hr>
    <label for="pesan">Pesan siswa:</label>
    <textarea class="form-control" rows="7" style="resize: none;" id="pesan" name="pesan" disabled><?= $detail['pesan'] ?></textarea>
    <div class="py-3"></div>
    <?php if ($detail['is_read'] == 0) : ?>
        <a href="<?= base_url('guru/nilai_siswa/') . $detail['id_sgm'] ?>" class="btn btn-block btn-warning">Kunjungi laman nilai siswa ini</a>
        <a href="<?= base_url('guru/terima_pn/') . $detail['id']; ?>" class="btn btn-block btn-primary">Terima peninjauan nilai </a>
        <a href="<?= base_url('guru/tolak_pn/') . $detail['id']; ?>" class="btn btn-block btn-danger">Tolak peninjauan nilai </a>
    <?php else : ?>
        <button class="btn btn-block btn-warning" disabled>Kunjungi laman nilai siswa ini</button>
        <button class="btn btn-block btn-primary" disabled>Terima peninjauan nilai </button>
        <button class="btn btn-block btn-danger" disabled>Tolak peninjauan nilai </button>
    <?php endif; ?>
</div>