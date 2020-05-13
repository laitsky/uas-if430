<div class="container my-3">
    <?= $this->session->flashdata('message'); ?>
    <h5>Nama: <?= $guru['nama']; ?></h5>
    <h5>Email: <?= $guru['email'] ?></h5>
    <h5>Tempat, Tanggal Lahir: <?= $guru['tempat_lahir'] . ", " . $guru['tanggal_lahir']; ?></h5>
    <h5>Alamat: <?= $guru['alamat'] ?></h5>
    <h5>Jenis Kelamin:
        <?php
        if ($guru['jenis_kelamin'] == 'L') {
            echo "Laki-laki";
        } else {
            echo "Perempuan";
        }
        ?>
    </h5>
    <h5>Telepon: <?= $guru['telp'] ?></h5>

    <a href="<?= base_url('guru/sunting_profil'); ?>" class="btn btn-primary">Ajukan Penggantian Data Profil</a>
</div>