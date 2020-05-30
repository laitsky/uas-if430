<div class="bg-gray-100 h-screen py-3">
    <div class="container">
        <div class="py-6">
            <?php if ($unread_count > 0) : ?>
                <a href="<?= base_url('guru/daftar_pn'); ?>" style="text-decoration: none;">
                    <div class="p-2 bg-orange-400 items-center text-orange-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                        <span class="flex rounded-full bg-orange-500 uppercase px-2 py-1 text-xs font-bold mr-3"><?= $unread_count; ?></span>
                        <span class="font-semibold mr-2 text-left flex-auto">Pengajuan nilai dari siswa</span>
                        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" /></svg>
                    </div>
                </a>
            <?php endif; ?>
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
</div>