<div class="bg-yellow-600 h-full py-8">
    <?= $this->session->flashdata('message'); ?>
    <p class="text-center text-gray-100 text-6xl font-semibold">Daftar Guru & Mata Pelajaran</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 960px;">
        <div class="table-responsive table-hover">
            <table class="table table-dt">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nama Mata Pelajaran</th>
                        <th scope="col" class="text-center">Guru Pengampu</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mapel as $keys => $m) : ?>
                        <tr>
                            <th class="text-center align-middle" scope="row"><?= ($keys + 1); ?></th>
                            <th class="text-center align-middle"><?= $m['nama_kelas']; ?></th>
                            <th class="text-center align-middle"><?= $m['pengampu']; ?></th>
                            <th class="text-center align-middle">
                                <a href="<?= base_url('admin/detail_mapel/') . $m['id_guru_mapel']; ?>"><span class="badge badge-primary">Detail</span></a>
                                <a href="<?= base_url('admin/hapus_guru_mapel/') . $m['id_guru_mapel']; ?>"><span class="badge badge-danger">Hapus</span></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>