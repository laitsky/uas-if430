<div class="bg-orange-600 h-full py-8">
    <p class="text-center text-semibold text-4xl text-white">Pencarian Siswa</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 720px;">
        <?php if (empty($siswa)) : ?>
            <p class="text-center text-2xl font-gray-700 font-semibold">Hasil pencarian tidak ditemukan</p>
        <?php else : ?>
            <div class="table-responsive table-hover">
                <table class="table table-dt">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $k => $s) :  ?>
                            <tr class="text-center">
                                <th scope="row" class="align-middle"><?= $k + 1; ?></th>
                                <td class="align-middle"><?= $s['nama']; ?></td>
                                <td class="align-middle">
                                    <a href="<?= base_url('admin/sunting_siswa/') . $s['id_siswa']; ?>" class="btn btn-outline-warning">Sunting Siswa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
            </div>
    </div>
</div>