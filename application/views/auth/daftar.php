<div class="container mt-3">
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
        <button type="submit" class="btn btn-block btn-primary">Daftar!</button>
        <a href="<?= base_url('auth'); ?>">Masuk disini</a>
    </form>
</div>