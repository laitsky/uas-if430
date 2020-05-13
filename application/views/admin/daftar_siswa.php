<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Email</th>
                <th scope="col">Tempat, Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $keys => $s) :  ?>
                <tr class="text-center">
                    <th scope="row"><?= ($keys + 1); ?></th>
                    <td><?= $s['nama'] . " " . "(" . $s['jenis_kelamin'] . ")"; ?></td>
                    <td><?= $s['email']; ?></td>
                    <td><?= $s['tempat_lahir'] . ", " . $s['tanggal_lahir']; ?></td>
                    <td><?= $s['alamat']; ?></td>
                    <td><?= $s['telp']; ?></td>
                    <td><?= $s['tahun_masuk']; ?></td>
                    <td>
                        <a href="<?= base_url('admin/sunting_siswa/') . $s['id_siswa']; ?>"><span class="badge badge-warning">Sunting</span></a>
                        <a href="<?= base_url('admin/hapus_siswa/') . $s['id_siswa']; ?>"><span class="badge badge-danger">Hapus</span></a>
                        <a href="<?= base_url('admin/mapel/') . $s['id_siswa']; ?>"><span class="badge badge-success">Mata Pelajaran</span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>