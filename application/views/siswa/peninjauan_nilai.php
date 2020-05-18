<div class="container">
    <form action="" method="POST">
        <input type="hidden" name="id_sgm" id="id_sgm" value="<?= $data['id_sgm']; ?>">
        <input type="hidden" name="id_siswa" id="id_siswa" value="<?= $data['id_siswa']; ?>">
        <input type="hidden" name="id_guru_mapel" id="id_guru_mapel" value="<?= $data['id_guru_mapel']; ?>">
        <div class="form-group">
            <label for="pesan">Tinggalkan pesan atau komentar untuk guru kamu:</label>
            <textarea id="pesan" name="pesan" class="form-control" style="resize: none;" rows="7" placeholder="Tulis disini..."></textarea>
        </div>
        <button class="btn btn-block btn-primary">Ajukan peninjauan nilai</button>
    </form>
</div>