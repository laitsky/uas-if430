<div class="bg-gray-300 h-full py-8">
    <p class="text-center text-gray-700 text-6xl font-semibold">Ganti Nama Mata Pelajaran</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 720px;">
        <form method="POST">
            <input type="hidden" name="id_mapel" value="<?= $mapel['id_mapel']; ?>">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" id="nama_mapel" for="nama_mapel">Nama Mata Pelajaran</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="nama_mapel" name="nama_mapel" placeholder="Masukkan nama_mapel..." value="<?= $mapel['nama_mapel']; ?>">
                <?= form_error('nama_mapel', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="flex justify-end">
                <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Ubah nama mapel</button>
            </div>
        </form>
    </div>