<div class="container">
    <h2>Siswa yang ada di kelas ini:</h2>
    <ul>
        <?php foreach ($detail as $k => $d) : ?>
            <li><a href="<?= base_url('guru/nilai_siswa/') . $d['id_nilai_siswa'] ?>"><?= $d['nama_siswa']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>