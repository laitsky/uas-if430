<div class="container my-3">
    <?= $this->session->flashdata('message'); ?>
    <form method="POST" class="col-lg-6 offset-lg-3">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama...">
            <?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email...">
            <?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi...">
            <?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">tanggal lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir...">
            <?= form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">tempat lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir...">
            <?= form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat...">
            <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">jenis kelamin</label>
            <select class="custom-select" name="jenis_kelamin">
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <?= form_error('jenis_kelamin', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label for="telepon">telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan telepon...">
            <?= form_error('telepon', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Daftarkan guru ini!</button>
    </form>
</div>