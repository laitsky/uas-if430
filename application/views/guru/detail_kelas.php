<div class="bg-teal-600 h-full py-3">
    <p class="text-center text-gray-100 text-6xl font-semibold">Daftar Siswa</p>
    <p class="text-center text-gray-300 text-xl pb-3 block uppercase"><?= $nama_kelas; ?></p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 960px;">
        <div class="table-responsive table-hover">
            <table class="table table-dt">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="align-middle">#</th>
                        <th scope="col" class="align-middle">Nama Siswa</th>
                        <th scope="col" class="align-middle">Tugas <span class="text-xs text-gray-600"><br>40%</span></th>
                        <th scope="col" class="align-middle">UTS <span class="text-xs text-gray-600"><br>30%</span></th>
                        <th scope="col" class="align-middle">UAS <span class="text-xs text-gray-600"><br>30%</span></th>
                        <th scope="col" class="align-middle">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($detail as $k => $d) :
                        $nilai_tugas = ($d['nilai_tugas'] == NULL) ? '-' : $d['nilai_tugas'];
                        $nilai_uts = ($d['nilai_uts'] == NULL) ? '-' : $d['nilai_uts'];
                        $nilai_uas = ($d['nilai_uas'] == NULL) ? '-' : $d['nilai_uas'];
                    ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $k + 1; ?></th>
                            <td class="text-center align-middle"><?= $d['nama_siswa']; ?></td>
                            <td class="text-center align-middle"><?= $nilai_tugas; ?></td>
                            <td class="text-center align-middle"><?= $nilai_uts; ?></td>
                            <td class="text-center align-middle"><?= $nilai_uas; ?></td>
                            <td class="text-center align-middle">
                                <a href="<?= base_url('guru/nilai_siswa/') . $d['id_nilai_siswa']; ?>" class="btn btn-outline-warning">Ubah Nilai</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>