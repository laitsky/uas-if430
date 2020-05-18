<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal Pengajuan</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peninjauan_nilai as $k => $pn) : ?>
                    <tr>
                        <th class="align-middle" scope="row"><?= $k + 1; ?></th>
                        <td class="align-middle"><?= $pn['tanggal_pengajuan']; ?></td>
                        <td class="align-middle">
                            <?= $pn['nama']; ?>
                            <?php
                            if ($pn['is_read'] == 0) {
                                echo '<span class="ml-2 badge badge-warning">Menunggu Konfirmasi</span>';
                            } elseif ($pn['is_read'] == 1 && $pn['is_accepted'] == 1) {
                                echo '<span class="ml-2 badge badge-success">Diterima</span>';
                            } elseif ($pn['is_read'] == 1 && $pn['is_accepted'] == 0) {
                                echo '<span class="ml-2 badge badge-danger">Ditolak</span>';
                            }
                            ?>
                        </td>
                        <td class="align-middle"><?= $pn['nama_kelas']; ?></td>
                        <td class="align-middle">
                            <a href="<?= base_url('guru/detail_pn/') . $pn['id']; ?>" class="btn btn-outline-primary">Lihat Detail</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>