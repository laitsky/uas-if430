<div class="bg-gray-300 h-full py-8">
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <p class="text-center text-gray-700 text-6xl font-semibold">Tambah Siswa</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 720px;">
        <form method="POST">
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="nama" name="nama" placeholder="Masukkan nama...">
                <?= form_error('nama', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="email" name="email" placeholder="Masukkan email...">
                <?= form_error('email', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Kata Sandi</label>
                <input type="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="password" name="password" placeholder="Masukkan kata sandi...">
                <?= form_error('password', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir...">
                <?= form_error('tanggal_lahir', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir...">
                <?= form_error('tempat_lahir', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">Alamat</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="alamat" name="alamat" placeholder="Masukkan alamat...">
                <?= form_error('alamat', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="jenis_kelamin">Jenis Kelamin</label>
                <select class="custom-select" name="jenis_kelamin">
                    <option selected disabled>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <?= form_error('jenis_kelamin', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telepon">Telepon</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="telepon" name="telepon" placeholder="Masukkan telepon...">
                <?= form_error('telepon', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tahun_masuk">Tahun Masuk</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="tahun_masuk" name="tahun_masuk" placeholder="Masukkan tahun_masuk...">
                <?= form_error('tahun_masuk', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="shadow bg-orange-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Daftarkan siswa ini!</button>
            </div>
        </form>
    </div>
</div>