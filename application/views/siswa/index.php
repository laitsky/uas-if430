<div class="bg-gray-100 h-screen py-3">
    <div class="container">
        <div class="py-6">
            <?= $this->session->flashdata('message'); ?>
            <p class="text-5xl text-center">Mata Pelajaran</p>
            <div class="row justify-center">
                <?php foreach ($mapel as $m) : ?>
                    <div class="col-md-4">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2"><span class="block uppercase tracking-wider"><?= $m['nama_mapel']; ?></span></div>
                                <p class="text-gray-700 text-base text-sm">
                                    Guru Pengampu: <?= $m['nama']; ?>
                                </p>
                            </div>
                            <div class="px-6 py-1 pb-4">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Kelas <?= $m['kode_kelas']; ?></span>
                                <div class="flex justify-end">
                                    <a href="<?= base_url('siswa/detail_kelas/') . $m['id_sgm']; ?>" class="a-btn bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Detail Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>