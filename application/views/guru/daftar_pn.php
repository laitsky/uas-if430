<div class="bg-orange-300 h-full py-3">
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <p class="text-center text-gray-100 text-6xl font-semibold py-3">Daftar Peninjauan Nilai</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 960px;">
        <div class="table-responsive table-hover">
            <table class="table table-dt">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Tanggal Pengajuan</th>
                        <th scope="col" class="text-center">Nama Siswa</th>
                        <th scope="col" class="text-center">Nama Kelas</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peninjauan_nilai as $k => $pn) : ?>
                        <tr>
                            <th class="text-center align-middle" scope="row"><?= $k + 1; ?></th>
                            <td class="text-center align-middle"><?= $pn['tanggal_pengajuan']; ?></td>
                            <td class="text-center align-middle">
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
                            <td class="text-center align-middle"><?= $pn['nama_kelas']; ?></td>
                            <td class="text-center align-middle">
                                <a href="<?= base_url('guru/detail_pn/') . $pn['id']; ?>" class="btn btn-outline-primary">Lihat Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>