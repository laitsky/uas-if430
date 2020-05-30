<div class="bg-blue-400 h-full py-3">
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <?php if ($detail['is_read'] == 1) : ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 container" role="alert">
            <p class="font-bold">Perhatian</p>
            <p>Kamu sudah melakukan peninjauan nilai terhadap siswa ini!</p>
        </div>
    <?php endif; ?>
    <div class="text-center">
        <p class="text-4xl font-semibold text-white">Peninjauan Nilai</p>
        <p class="text-xl pb-3 text-gray-300"><?= $detail['nama'] . " - " . $detail['nama_kelas']; ?></p>
    </div>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 840px;">
        <div class="form-group">
            <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-center mb-1 md:mb-0 pr-4 pb-3" for="pesan">Pesan siswa:</label>
            <textarea id="pesan" name="pesan" class="bg-gray-300 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-800" style="resize: none;" rows="7" disabled><?= $detail['pesan']; ?></textarea>
        </div>
        <?php if ($detail['is_read'] == 0) : ?>
            <div class="row text-center pt-3">
                <div class="col-md-4">
                    <a href="<?= base_url('guru/tolak_pn/') . $detail['id']; ?>" class="a-btn shadow font-light bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white py-2 px-4 rounded">Tolak peninjauan nilai</a>
                </div>
                <div class="col-md-4">
                    <a target="_blank" href="<?= base_url('guru/nilai_siswa/') . $detail['id_sgm'] ?>" class="a-btn shadow font-light bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none text-white py-2 px-4 rounded">Ubah nilai siswa ini</a>
                </div>
                <div class="col-md-4">
                    <a href="<?= base_url('guru/terima_pn/') . $detail['id']; ?>" class="a-btn shadow font-light bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white py-2 px-4 rounded">Terima peninjauan nilai</a>
                </div>
            </div>
        <?php else : ?>
            <div class="row text-center pt-3">
                <div class="col-md-4">
                    <button class="font-light bg-red-400 hover:bg-red-400 text-white py-2 px-4 rounded" disabled>Tolak peninjauan nilai</button>
                </div>
                <div class="col-md-4">
                    <button class="font-light bg-yellow-400 hover:bg-yellow-400 text-white py-2 px-4 rounded" disabled>Ubah nilai siswa ini</button>
                </div>
                <div class="col-md-4">
                    <button class="font-light bg-green-400 hover:bg-green-400 text-white py-2 px-4 rounded" disabled>Terima peninjauan nilai</button>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>