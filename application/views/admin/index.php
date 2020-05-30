<div class="container pt-3">
    <?= $this->session->flashdata('message'); ?>
    <a href="<?= base_url('admin/daftar_pdp') ?>" class="btn btn-primary">
        Pengajuan data profil <span class="badge badge-light"><?= $unread_count; ?></span>
    </a>
</div>