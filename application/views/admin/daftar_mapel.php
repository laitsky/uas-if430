<div class="container">
    <?= $this->session->flashdata('messsage'); ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Mata Pelajaran</th>
                <th scope="col">Guru Pengampu</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mapel as $keys => $m) : ?>
                <tr>
                    <th scope="row"><?= ($keys + 1); ?></th>
                    <th><?= $m['nama_mapel']; ?></th>
                    <th><?= $m['pengampu']; ?></th>
                    <th>
                        <a href="<?= base_url('admin/detail_mapel/') . $m['id_guru_mapel']; ?>"><span class="badge badge-primary">Detail</span></a>
                        <a href="<?= base_url('admin/sunting_mapel/') . $m['id_guru_mapel']; ?>"><span class="badge badge-warning">Sunting</span></a>
                        <a href="<?= base_url('admin/hapus_mapel/') . $m['id_guru_mapel']; ?>"><span class="badge badge-danger">Hapus</span></a>
                    </th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>