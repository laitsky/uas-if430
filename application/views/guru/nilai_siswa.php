<?php
$nilai_tugas = ($detail['nilai_tugas'] == NULL) ? 0 : $detail['nilai_tugas'];
$nilai_uts = ($detail['nilai_uts'] == NULL) ? 0 : $detail['nilai_uts'];
$nilai_uas = ($detail['nilai_uas'] == NULL) ? 0 : $detail['nilai_uas'];
?>
<div class="bg-indigo-600 h-screen py-3">
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <p class="text-center text-4xl font-semibold text-gray-100 block uppercase py-3"><?= $detail['nama_kelas']; ?></p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 840px;">
        <form action="" method="POST">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="nilai_tugas">Nilai Tugas</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" id="nilai_tugas" name="nilai_tugas" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-500" value="<?= $nilai_tugas; ?>">
                    <?= form_error('nilai_tugas', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="nilai_uts">Nilai UTS</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" id="nilai_uts" name="nilai_uts" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-500" value="<?= $nilai_uts; ?>">
                    <?= form_error('nilai_uts', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="nilai_uas">Nilai UAS</label>
                </div>
                <div class="md:w-2/3">
                    <input type="text" id="nilai_uas" name="nilai_uas" class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-pink-500" value="<?= $nilai_uas; ?>">
                    <?= form_error('nilai_uas', '<p class="text-red-500 text-xs italic mt-2">', '</p>'); ?>
                </div>
            </div>
            <div class="flex justify-end">
                <button class="shadow bg-pink-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Submit Nilai</button>
            </div>
        </form>
    </div>
</div>