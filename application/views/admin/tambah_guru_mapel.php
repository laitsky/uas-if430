<div class="bg-purple-600 h-full py-8">
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 720px;">
        <div class="container">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <p class="text-center text-gray-700 text-4xl font-semibold">Tambah Guru Mapel</p>
        <form action="" method="POST">
            <div class="form-group">
                <select name="nama_mapel" id="nama_mapel" class="custom-select">
                    <option selected disabled>Pilih mata pelajaran</option>
                    <?php foreach ($mapel as $m) : ?>
                        <option value="<?= $m['id_mapel']; ?>"><?= $m['nama_mapel']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('nama_mapel', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <div class="flex justify-end">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mb-4">Kaitkan guru dengan mata pelajaran ini!</button>
            </div>
        </form>
        <hr>
        <p class="text-center text-xl font-gray-700 py-6">Mata pelajaran yang sedang diajar oleh guru ini:</p>
        <ul class="list-group">
            <?php foreach ($guru_mapel as $gm) : ?>
                <li class="list-group-item"><?= $gm['nama_mapel']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>