<div class="bg-orange-300 h-100 py-3">
    <p class="text-center text-6xl pt-5 font-semibold text-gray-700">Pengajuan Penggantian Data Profil</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 840px;">
        <form method="POST">
            <input type="hidden" class="form-control" name="id" value="<?= $siswa['id_siswa']; ?>">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="nama">Nama</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="nama" name="nama" placeholder="Masukkan nama..." value="<?= $siswa['nama']; ?>">
                    <?= form_error('nama', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">Email</label>
                </div>
                <div class="md:w-2/3">
                    <input readonly type="text" class="bg-gray-300 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight" id="email" name="email" placeholder="Masukkan email..." value="<?= $siswa['email']; ?>">
                    <?= form_error('email', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="tanggal_lahir">tanggal lahir</label>
                </div>
                <div class="md:w-2/3">
                    <input type="date" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir..." value="<?= $siswa['tanggal_lahir']; ?>">
                    <?= form_error('tanggal_lahir', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="tempat_lahir">tempat lahir</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir..." value="<?= $siswa['tempat_lahir']; ?>">
                    <?= form_error('tempat_lahir', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="alamat">alamat</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="alamat" name="alamat" placeholder="Masukkan alamat..." value="<?= $siswa['alamat']; ?>">
                    <?= form_error('alamat', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="jenis_kelamin">jenis kelamin</label>
                </div>
                <div class="md:w-2/3">
                    <select class="custom-select" name="jenis_kelamin">
                        <option value="L" <?php if ($siswa['jenis_kelamin'] == "L") echo "selected"; ?>>Laki-laki</option>
                        <option value="P" <?php if ($siswa['jenis_kelamin'] == "P") echo "selected"; ?>>Perempuan</option>
                    </select>
                    <?= form_error('jenis_kelamin', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="telepon">telepon</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="telepon" name="telepon" placeholder="Masukkan telepon..." value="<?= $siswa['telp']; ?>">
                    <?= form_error('telepon', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="tahun_masuk">tahun masuk</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="tahun_masuk" name="tahun_masuk" placeholder="Masukkan tahun masuk..." value="<?= $siswa['tahun_masuk']; ?>">
                    <?= form_error('tahun_masuk', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Ajukan Penggantian Data</button>
            </div>
        </form>
    </div>
</div>