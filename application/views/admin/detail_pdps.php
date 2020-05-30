<div class="bg-orange-400 h-full py-3">
    <?php if ($pdp_data['is_read'] == 1) : ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 container" role="alert">
            <p class="font-bold">Perhatian</p>
            <p>Kamu sudah menerima/menolak permintaan ini.</p>
        </div>
    <?php endif; ?>
    <p class="text-center text-4xl font-semibold py-4 text-gray-700">Pengajuan Data Profil Siswa</p>
    <div class="container bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 840px;">
        <form method="POST">
            <input type="hidden" class="form-control" name="id_siswa" value="<?= $pdp_data['id_siswa']; ?>">
            <input type="hidden" class="form-control" name="id_pdps" value="<?= $pdp_data['id']; ?>">
            <input type="hidden" class="form-control" name="id_user" value="<?= $pdp_data['id_user']; ?>">
            <select class="custom-select" name="jenis_kelamin" hidden>
                <option value="L" <?php if ($pdp_data['jenis_kelamin'] == "L") echo "selected"; ?>>Laki-laki</option>
                <option value="P" <?php if ($pdp_data['jenis_kelamin'] == "P") echo "selected"; ?>>Perempuan</option>
            </select>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="nama" name="nama" placeholder="Masukkan nama..." value="<?= $pdp_data['nama']; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="email" name="email" placeholder="Masukkan email..." value="<?= $pdp_data['email']; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">tanggal lahir</label>
                <input type="date" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir..." value="<?= $pdp_data['tanggal_lahir']; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tempat_lahir">tempat lahir</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir..." value="<?= $pdp_data['tempat_lahir']; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">alamat</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="alamat" name="alamat" placeholder="Masukkan alamat..." value="<?= $pdp_data['alamat']; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="jk">jenis kelamin</label>
                <select class="custom-select" name="jk" disabled>
                    <option value="L" <?php if ($pdp_data['jenis_kelamin'] == "L") echo "selected"; ?>>Laki-laki</option>
                    <option value="P" <?php if ($pdp_data['jenis_kelamin'] == "P") echo "selected"; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telepon">telepon</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="telepon" name="telepon" placeholder="Masukkan telepon..." value="<?= $pdp_data['telp']; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tahun_masuk">tahun_masuk</label>
                <input type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="tahun_masuk" name="tahun_masuk" placeholder="Masukkan tahun_masuk..." value="<?= $pdp_data['tahun_masuk']; ?>" readonly>
            </div>
            <?php if ($pdp_data['is_read'] == 0) : ?>
                <button type="submit" class="btn btn-block btn-primary">Terima Permintaan Penggantian Data Profil</button>
                <a href="<?= base_url('admin/tolak_pdps/') . $pdp_data['id']; ?>" class="btn btn-block btn-danger">Tolak Permintaan Penggantian Data Profil</a>
            <?php else : ?>
                <button type="submit" class="btn btn-block btn-primary" disabled>Terima Permintaan Penggantian Data Profil</button>
                <button type="button" class="btn btn-block btn-danger" disabled>Tolak permintaan Penggantian Data Profil</button>
            <?php endif; ?>
        </form>
    </div>
</div>