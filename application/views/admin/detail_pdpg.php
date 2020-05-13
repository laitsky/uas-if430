<div class="container my-3">
    <?php if ($pdp_data['is_read'] == 1) : ?>
        <div class="alert alert-success col-lg-6 offset-lg-3" role="alert">
            Kamu sudah menerima/menolak permintaan ini.
        </div>
    <?php endif; ?>
    <form method="POST" class="col-lg-6 offset-lg-3">
        <input type="hidden" class="form-control" name="id_guru" value="<?= $pdp_data['id_guru']; ?>">
        <input type="hidden" class="form-control" name="id_pdpg" value="<?= $pdp_data['id']; ?>">
        <input type="hidden" class="form-control" name="id_user" value="<?= $pdp_data['id_user']; ?>">
        <select class="custom-select" name="jenis_kelamin" hidden>
            <option value="L" <?php if ($pdp_data['jenis_kelamin'] == "L") echo "selected"; ?>>Laki-laki</option>
            <option value="P" <?php if ($pdp_data['jenis_kelamin'] == "P") echo "selected"; ?>>Perempuan</option>
        </select>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama..." value="<?= $pdp_data['nama']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email..." value="<?= $pdp_data['email']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">tanggal lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir..." value="<?= $pdp_data['tanggal_lahir']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">tempat lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir..." value="<?= $pdp_data['tempat_lahir']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat..." value="<?= $pdp_data['alamat']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="jk">jenis kelamin</label>
            <select class="custom-select" name="jk" disabled>
                <option value="L" <?php if ($pdp_data['jenis_kelamin'] == "L") echo "selected"; ?>>Laki-laki</option>
                <option value="P" <?php if ($pdp_data['jenis_kelamin'] == "P") echo "selected"; ?>>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="telepon">telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan telepon..." value="<?= $pdp_data['telp']; ?>" readonly>
        </div>
        <?php if ($pdp_data['is_read'] == 0) : ?>
            <button type="submit" class="btn btn-block btn-primary">Terima Permintaan Penggantian Data Profil</button>
            <a href="<?= base_url('admin/tolak_pdpg/') . $pdp_data['id']; ?>" class="btn btn-block btn-danger">Tolak Permintaan Penggantian Data Profil</a>
        <?php else : ?>
            <button type="submit" class="btn btn-block btn-primary" disabled>Terima Permintaan Penggantian Data Profil</button>
            <button type="button" class="btn btn-block btn-danger" disabled>Tolak permintaan Penggantian Data Profil</button>
        <?php endif; ?>
    </form>
</div>