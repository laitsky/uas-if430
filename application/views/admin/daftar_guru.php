<div class="bg-red-800 h-full py-8">
    <?= $this->session->flashdata('message'); ?>
    <p class="text-center text-gray-100 text-6xl font-semibold">Daftar Guru</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 1080px;">
        <div class="table-responsive table-hover">
            <table class="table table-dt">
                <thead>
                    <tr class="text-center">
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
                            <th class="text-center align-middle" scope="row"><?= ($keys + 1); ?></th>
                            <td class="text-center align-middle"><?= $g['nama'] . " " . "(" . $g['jenis_kelamin'] . ")"; ?></td>
                            <td class="text-center align-middle"><?= $g['email']; ?></td>
                            <td class="text-center align-middle"><?= $g['tempat_lahir'] . ", " . $g['tanggal_lahir']; ?></td>
                            <td class="text-center align-middle"><?= $g['alamat']; ?></td>
                            <td class="text-center align-middle"><?= $g['telp']; ?></td>
                            <td class="text-center align-middle">
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
</div>