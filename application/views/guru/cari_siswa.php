<div class="bg-purple-600 h-full py-8">
    <p class="text-center text-semibold text-4xl text-white">Pencarian Siswa Ajar</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 1080px;">
        <?php if (empty($siswa)) : ?>
            <div class="flex justify-center">
                <img src="<?= base_url('assets/img/search_illus.svg') ?>" alt="Ilustrasi pencarian" class="img-fluid h-64 w-auto">
            </div>
            <p class="text-center text-2xl text-gray-700 font-semibold">Maaf, hasil pencarian tidak ditemukan!</p>
        <?php else : ?>
            <div class="table-responsive table-hover">
                <table class="table table-dt">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nilai Tugas</th>
                            <th scope="col">Nilai UTS</th>
                            <th scope="col">Nilai UAS</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $k => $s) :
                            $nilai_tugas = ($s['nilai_tugas'] == NULL) ? '-' : $s['nilai_tugas'];
                            $nilai_uts = ($s['nilai_uts'] == NULL) ? '-' : $s['nilai_uts'];
                            $nilai_uas = ($s['nilai_uas'] == NULL) ? '-' : $s['nilai_uas'];
                        ?>
                            <tr class="text-center">
                                <th scope="row" class="align-middle"><?= $k + 1; ?></th>
                                <td class="align-middle"><?= $s['nama']; ?></td>
                                <td class="align-middle"><?= $s['nama_kelas']; ?></td>
                                <td class="align-middle"><?= $nilai_tugas; ?></td>
                                <td class="align-middle"><?= $nilai_uts; ?></td>
                                <td class="align-middle"><?= $nilai_uas; ?></td>
                                <td class="align-middle">
                                    <a href="<?= base_url('guru/nilai_siswa/') . $s['id_sgm']; ?>" class="btn btn-outline-warning">Ubah Nilai Siswa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
            </div>
    </div>
</div>