<div class="bg-blue-400 h-screen py-3">
    <p class="text-center text-6xl pt-5 font-semibold">Peninjauan Nilai</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 840px;">
        <form action="" method="POST">
            <input type="hidden" name="id_sgm" id="id_sgm" value="<?= $data['id_sgm']; ?>">
            <input type="hidden" name="id_siswa" id="id_siswa" value="<?= $data['id_siswa']; ?>">
            <input type="hidden" name="id_guru_mapel" id="id_guru_mapel" value="<?= $data['id_guru_mapel']; ?>">
            <div class="form-group">
                <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-center mb-1 md:mb-0 pr-4 pb-3" for="pesan">Tinggalkan pesan atau komentar untuk guru kamu:</label>
                <textarea id="pesan" name="pesan" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-500" style="resize: none;" rows="7" placeholder="Tulis disini..."></textarea>
            </div>
            <div class="flex justify-end">
                <button class="shadow bg-pink-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Ajukan peninjauan nilai</button>
            </div>
        </form>
    </div>
</div>