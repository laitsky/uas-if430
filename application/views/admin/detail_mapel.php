<div class="bg-purple-300 h-full py-8">
    <p class="text-center text-gray-700 text-4xl font-semibold">Detail Mata Pelajaran</p>
    <p class="text-center text-gray-600 text-xl"><?= $guru['nama_kelas']; ?> - <?= $guru['nama']; ?></p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 720px;">
        <div class="text-center pb-4">
            <p class="text-base font-bold">Daftar siswa yang mengikuti mata pelajaran ini:</p>
        </div>
        <ul class="list-group">
            <?php foreach ($detail_mapel as $dm) : ?>
                <li class="list-group-item"><?= $dm['nama_siswa']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>