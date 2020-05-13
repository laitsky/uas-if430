<div class="container my-3">
    <?= $this->session->flashdata('message'); ?>
    <h5>Nama: <?= $siswa['nama']; ?></h5>
    <h5>Email: <?= $siswa['email'] ?></h5>
    <h5>Tempat, Tanggal Lahir: <?= $siswa['tempat_lahir'] . ", " . $siswa['tanggal_lahir']; ?></h5>
    <h5>Alamat: <?= $siswa['alamat'] ?></h5>
    <h5>Jenis Kelamin:
        <?php
        if ($siswa['jenis_kelamin'] == 'L') {
            echo "Laki-laki";
        } else {
            echo "Perempuan";
        }
        ?>
    </h5>
    <h5>Telepon: <?= $siswa['telp'] ?></h5>
    <h5>Tahun Masuk: <?= $siswa['tahun_masuk'] ?></h5>

    <a href="<?= base_url('siswa/sunting_profil'); ?>" class="btn btn-primary">Ajukan Penggantian Data Profil</a>
</div>