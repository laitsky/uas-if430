<div class="container">
    <h1>Halo, <?= $this->session->userdata('nama'); ?></h1>
    <a href="<?= base_url('guru/profil'); ?>" class="btn btn-primary">Profil Saya</a>
    <a href="<?= base_url('guru/daftar_pn') ?>" class="btn btn-primary">
        Lihat Peninjauan Nilai <span class="badge badge-light"><?= $unread_count; ?></span>
    </a>
    <div class="container table-responsive pt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mata Pelajaran</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kelas as $keys => $k) : ?>
                    <tr>
                        <th scope="row"><?= $keys + 1; ?></th>
                        <td><?= $k['nama_mapel'] . " Kelas " . $k['kode_kelas']; ?></td>
                        <td>
                            <a href="<?= base_url('guru/detail_kelas/') . $k['id_guru_mapel']; ?>" class="btn btn-primary">Lihat Detail Kelas</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>