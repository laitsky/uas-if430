<div class="container pt-3">
    <?= $this->session->flashdata('message'); ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Waktu Pengajuan</th>
                    <th scope="col">Role</th>
                    <th scope="col">Nama Pengaju</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pdp_data as $keys => $pdp) : ?>
                    <tr>
                        <th scope="row"><?= ($keys + 1); ?></th>
                        <td class="align-middle"><?= $pdp['tanggal_pengajuan']; ?></td>
                        <td class="align-middle"><?= $pdp['role']; ?></td>
                        <td class="align-middle">
                            <?= $pdp['nama']; ?>
                            <?php
                            if ($pdp['is_read'] == 0) {
                                echo '<span class="ml-2 badge badge-warning">Menunggu Konfirmasi</span>';
                            } elseif ($pdp['is_read'] == 1 && $pdp['is_accepted'] == 1) {
                                echo '<span class="ml-2 badge badge-success">Diterima</span>';
                            } elseif ($pdp['is_read'] == 1 && $pdp['is_accepted'] == 0) {
                                echo '<span class="ml-2 badge badge-danger">Ditolak</span>';
                            }

                            ?>
                        </td>
                        <td>
                            <?php if ($pdp['role'] == "Guru") : ?>
                                <a href="<?= base_url('admin/detail_pdpg/') . $pdp['id']; ?>" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                            <?php elseif ($pdp['role'] == "Siswa") : ?>
                                <a href="<?= base_url('admin/detail_pdps/') . $pdp['id']; ?>" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>