<div class="container my-3">
    <?= $this->session->flashdata('message'); ?>
    <form method="POST" class="col-lg-6 offset-lg-3">
    <input type="hidden" class="form-control" name="id" value="<?= $guru['id_guru']; ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama..." value="<?= $guru['nama']; ?>">
            <?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email..." value="<?= $guru['email']; ?>">
            <?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">tanggal lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir..." value="<?= $guru['tanggal_lahir']; ?>">
            <?= form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">tempat lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir..." value="<?= $guru['tempat_lahir']; ?>">
            <?= form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat..." value="<?= $guru['alamat']; ?>">
            <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">jenis kelamin</label>
            <select class="custom-select" name="jenis_kelamin">
                <option value="L" <?php if ($guru['jenis_kelamin'] == "L") echo "selected"; ?>>Laki-laki</option>
                <option value="P" <?php if ($guru['jenis_kelamin'] == "P") echo "selected"; ?>>Perempuan</option>
            </select>
            <?= form_error('jenis_kelamin', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="telepon">telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan telepon..." value="<?= $guru['telp']; ?>">
            <?= form_error('telepon', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Daftarkan guru ini!</button>
    </form>
</div>