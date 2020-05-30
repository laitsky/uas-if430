<div class="bg-indigo-800 h-full py-8">
    <?= $this->session->flashdata('message'); ?>
    <p class="text-center text-gray-100 text-4xl font-semibold">Daftar Siswa</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 1080px;">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
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
                            <th class="align-middle" scope="row"><?= ($keys + 1); ?></th>
                            <td class="align-middle"><?= $s['nama'] . " " . "(" . $s['jenis_kelamin'] . ")"; ?></td>
                            <td class="align-middle"><?= $s['email']; ?></td>
                            <td class="align-middle"><?= $s['tempat_lahir'] . ", " . $s['tanggal_lahir']; ?></td>
                            <td class="align-middle"><?= $s['alamat']; ?></td>
                            <td class="align-middle"><?= $s['telp']; ?></td>
                            <td class="align-middle"><?= $s['tahun_masuk']; ?></td>
                            <td class="align-middle">
                                <a href="<?= base_url('admin/sunting_siswa/') . $s['id_siswa']; ?>"><span class="badge badge-warning">Sunting</span></a>
                                <a href="<?= base_url('admin/hapus_siswa/') . $s['id_siswa']; ?>"><span class="badge badge-danger">Hapus</span></a>
                                <a href="<?= base_url('admin/mapel/') . $s['id_siswa']; ?>"><span class="badge badge-success">Mata Pelajaran</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>