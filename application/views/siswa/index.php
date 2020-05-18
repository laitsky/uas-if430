<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <h1>Ini adalah halaman siswa</h1>
    <a href="<?= base_url('siswa/profil'); ?>" class="btn btn-primary">Profil Saya</a>
    <hr>
    <h1>Mata Pelajaran:</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapel as $k => $m) : ?>
                <tr>
                    <th scope="row"><?= $k + 1; ?></th>
                    <td><?= $m['nama_mapel'] . " Kelas " . $m['kode_kelas']; ?></td>
                    <td>
                        <a href="<?= base_url('siswa/detail_kelas/') . $m['id_sgm']; ?>" class="btn btn-primary">Detail Kelas</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>