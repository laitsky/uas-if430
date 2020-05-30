<div class="container">
    <div class="py-6">
        <a href="<?= base_url('guru/daftar_pn') ?>" class="btn btn-primary">
            Lihat Peninjauan Nilai <span class="badge badge-light"><?= $unread_count; ?></span>
        </a>
        <p class="text-4xl tracking-wide font-semibold text-center pb-4">Kelas yang kamu ajar:</p>
        <div class="row justify-center">
            <?php foreach ($kelas as $k) : ?>
                <div class="col-md-4">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2"><span class="block uppercase tracking-wider"><?= $k['nama_mapel']; ?></span></div>
                        </div>
                        <div class="px-6 py-1 pb-4">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Kelas <?= $k['kode_kelas']; ?></span>
                            <div class="flex justify-end">
                                <a href="<?= base_url('guru/detail_kelas/') . $k['id_guru_mapel']; ?>" class="a-btn bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Detail Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>