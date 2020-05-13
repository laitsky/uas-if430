<div class="container mt-3">
    <form action="" method="POST" class="col-lg-6 offset-lg-3">
        <?= $this->session->flashdata('message'); ?>
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
        <button class="btn btn-block btn-primary">Masuk!</button>
    </form>
</div>