<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tempat, Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($guru as $keys => $g) :  ?>
                    <tr>
                        <th scope="row"><?= ($keys + 1); ?></th>
                        <td><?= $g['nama'] . " " . "(" . $g['jenis_kelamin'] . ")"; ?></td>
                        <td><?= $g['email']; ?></td>
                        <td><?= $g['tempat_lahir'] . ", " . $g['tanggal_lahir']; ?></td>
                        <td><?= $g['alamat']; ?></td>
                        <td><?= $g['telp']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/sunting_guru/') . $g['id_guru']; ?>"><span class="badge badge-warning">Sunting</span></a>
                            <a href="<?= base_url('admin/hapus_guru/') . $g['id_guru']; ?>"><span class="badge badge-danger">Hapus</span></a>
                            <a href="<?= base_url('admin/tambah_guru_mapel/') . $g['id_guru']; ?>"><span class="badge badge-success">Kaitkan dengan mapel</span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>