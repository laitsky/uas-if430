<?php
if ($siswa['jenis_kelamin'] == 'L') {
    $jenis_kelamin =  "Laki-laki";
} else {
    $jenis_kelamin =  "Perempuan";
}
?>
<div class="bg-orange-200 h-full py-3">
    <p class="text-center text-6xl pt-5 font-semibold text-gray-700">Profil Saya</p>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 840px;">
        <div class="container">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-nama">
                    Nama Lengkap:
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none" id="inline-nama" type="text" value="<?= $siswa['nama'] ?>" readonly>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
                    Email:
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none" id="inline-email" type="text" value="<?= $siswa['email'] ?>" readonly>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-ttl">
                    Tempat, Tanggal Lahir:
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none" id="inline-ttl" type="text" value="<?= $siswa['tempat_lahir'] . ", " . $siswa['tanggal_lahir']; ?>" readonly>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-alamat">
                    Alamat:
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none" id="inline-alamat" type="text" value="<?= $siswa['alamat'] ?>" readonly>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-jenis-kelamin">
                    Jenis Kelamin:
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none" id="inline-jenis-kelamin" type="text" value="<?= $jenis_kelamin; ?>" readonly>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-telp">
                    Telepon:
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none" id="inline-telp" type="text" value="<?= $siswa['telp'] ?>" readonly>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block uppercase tracking-wide text-xs text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-thn-msk">
                    Tahun Masuk:
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none" id="inline-thn-msk" type="text" value="<?= $siswa['tahun_masuk'] ?>" readonly>
            </div>
        </div>
        <div class="flex justify-end">
            <a href="<?= base_url('siswa/sunting_profil'); ?>" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Ajukan Penggantian Data Profil</a>
        </div>
    </div>
</div>