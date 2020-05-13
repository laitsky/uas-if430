<div class="container pt-3">
    <?= $this->session->flashdata('message'); ?>
    <a href="<?= base_url('admin/daftar_guru'); ?>" class="btn btn-primary">Lihat Daftar Guru</a>
    <a href="<?= base_url('admin/daftar_siswa'); ?>" class="btn btn-primary">Lihat Daftar Siswa</a>
    <a href="<?= base_url('admin/daftar_mapel'); ?>" class="btn btn-primary">Lihat Daftar Mata Pelajaran</a>

    <a href="<?= base_url('admin/daftar_pdp') ?>" class="btn btn-primary">
        Pengajuan data profil <span class="badge badge-light"><?= $unread_count; ?></span>
    </a>

    <a href="<?= base_url('admin/tambah_mapel'); ?>" class="btn btn-primary">Tambah Mata Pelajaran</a>
</div>