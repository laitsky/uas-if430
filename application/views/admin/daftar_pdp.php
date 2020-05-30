<div class="bg-green-600 h-full py-8">
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <p class="text-center text-gray-100 text-4xl font-semibold">Daftar Pengajuan Penggantian Data Profil</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 960px;">
        <div class="table-responsive table-hover">
            <table class="table table-dt">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Waktu Pengajuan</th>
                        <th scope="col" class="text-center">Role</th>
                        <th scope="col" class="text-center">Nama Pengaju</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pdp_data as $keys => $pdp) : ?>
                        <tr>
                            <th scope="row" class="text-center align-middle"><?= ($keys + 1); ?></th>
                            <td class="text-center align-middle"><?= $pdp['tanggal_pengajuan']; ?></td>
                            <td class="text-center align-middle"><?= $pdp['role']; ?></td>
                            <td class="text-center align-middle">
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
                            <td class="text-center align-middle">
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
</div>