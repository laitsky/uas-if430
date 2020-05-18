<div class="container">
    <h2 class="text-center">Detail Mata Pelajaran</h2>
    <?php if (!($detail_mapel)) : ?>
<h3>Mata Pelajaran</h3>
<h3>Guru pengampu</h3>
    <?php else : ?>
    <h3>Mata Pelajaran: <?= $detail_mapel[0]['nama_mapel']; ?></h3>
    <h3>Guru Pengampu: <?= $detail_mapel[0]['nama_guru']; ?></h3>
    <?php endif; ?>
    <hr>
    <ul>Daftar siswa yang mengikuti mata pelajaran ini:</ul>
    <?php foreach ($detail_mapel as $dm) : ?>
        <li><?= $dm['nama_siswa']; ?></li>
    <?php endforeach; ?>
</div>