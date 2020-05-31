<div class="bg-indigo-300 h-screen py-8">
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 720px;">
        <p class="text-center text-gray-700 text-4xl font-semibold">Tambah mata pelajaran ke siswa</p>
        <p class="text-center text-gray-700 text-sm mb-6">Nama Siswa: <?= $nama_siswa; ?></p>
        <form action="" method="POST">
            <div class="form-group">
                <select name="nama_mapel" id="nama_mapel" class="custom-select">
                    <option selected disabled>Pilih mata pelajaran</option>
                    <?php foreach ($mapel as $m) : ?>
                        <option value="<?= $m['id_guru_mapel']; ?>"><?= $m['nama_mapel'] . " (Pengampu: " . $m['nama'] . ")"; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('nama_mapel', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <div class="flex justify-end">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4">Tambahkan siswa ke mapel ini!</button>
            </div>
            <hr>
        </form>
        <p class="text-center text-xl font-gray-700 py-6">Mata pelajaran yang sudah diikuti oleh siswa ini:</p>
        <ul class="list-group">
            <?php foreach ($siswa_mapel as $sm) : ?>
                <li class="list-group-item"><?= $sm['nama_mapel'] . " (Pengampu: " . $sm['pengampu'] . ")"; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>