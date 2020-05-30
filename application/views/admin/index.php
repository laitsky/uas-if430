<div class="bg-gray-100 h-full py-8 pb-32">
    <div class="container pt-3">
        <?= $this->session->flashdata('message'); ?>
        <p class="text-center text-4xl text-gray-700">
            Selamat Datang, Admin.
        </p>
        <?php if ($unread_count > 0) : ?>
            <a href="<?= base_url('admin/daftar_pdp'); ?>" style="text-decoration: none;">
                <div class="p-2 bg-orange-400 items-center text-orange-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                    <span class="flex rounded-full bg-orange-500 uppercase px-2 py-1 text-xs font-bold mr-3"><?= $unread_count; ?></span>
                    <span class="font-semibold mr-2 text-left flex-auto">Permintaan penggantian data profil baru</span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" /></svg>
                </div>
            </a>
        <?php endif; ?>
        <div class="grid-container pt-8">
            <div class="daftar-guru p-24 rounded shadow-lg bg-red-300">Daftar Guru</div>
            <div class="tambah-guru p-24 rounded shadow-lg bg-orange-300">Tambah Guru</div>
            <div class="daftar-siswa p-24 rounded shadow-lg bg-green-300">Daftar Siswa</div>
            <div class="tambah-siswa p-24 rounded shadow-lg bg-teal-300">Tambah Siswa</div>
            <div class="daftar-mapel-guru p-24 rounded shadow-lg bg-indigo-300">Daftar Mapel Guru</div>
            <div class="tambah-mapel p-24 rounded shadow-lg bg-purple-300">Tambah Mapel</div>
        </div>
    </div>

</div>