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
        <div class="grid-container pt-8 text-4xl font-semibold text-gray-700" id="admin-menu-grid" style="font-family: 'Titillium Web';">
            <div class="daftar-guru px-8 pt-16 pb-12 rounded-md shadow-lg bg-red-300" onclick="location.href='<?= base_url('admin/daftar_guru'); ?>'">
                <p class="pb-3">Daftar<br>Guru</p>
                <p class="block uppercase text-xs tracking-widest-2">Jumlah guru: <?= $guru_c; ?></p>
            </div>
            <div class="tambah-guru px-8 pt-16 pb-12 rounded-md shadow-lg bg-orange-300" onclick="location.href='<?= base_url('admin/tambah_guru'); ?>'">
                <p>Tambah<br>Guru</p>
            </div>
            <div class="daftar-siswa px-8 pt-16 pb-12 rounded-md shadow-lg bg-green-300" onclick="location.href='<?= base_url('admin/daftar_siswa'); ?>'">
                <p class="pb-3">Daftar<br>Siswa</p>
                <p class="block uppercase text-xs tracking-widest-2">Jumlah siswa: <?= $siswa_c; ?></p>
            </div>
            <div class="tambah-siswa px-8 pt-16 pb-12 rounded-md shadow-lg bg-teal-300" onclick="location.href='<?= base_url('admin/tambah_siswa'); ?>'">
                <p>Tambah<br>Siswa</p>
            </div>
            <div class="tambah-mapel px-8 pt-16 pb-12 rounded-md shadow-lg bg-purple-300" onclick="location.href='<?= base_url('admin/tambah_mapel'); ?>'">
                <p class="pb-3">Tambah<br>Mapel</p>
                <p class="block uppercase text-xs tracking-widest-2">Jumlah mata pelajaran: <?= $mapel_c; ?></p>
            </div>
            <div class="daftar-mapel-guru px-8 pt-16 pb-12 rounded-md shadow-lg bg-indigo-300" onclick="location.href='<?= base_url('admin/daftar_mapel'); ?>'">
                <p class="pb-3">Daftar<br>Mapel Guru</p>
                <p class="block uppercase text-xs tracking-widest-2">Jumlah mapel guru: <?= $guru_mapel_c; ?></p>
            </div>
            <div class="peninjauan-nilai px-8 pt-16 pb-12 rounded-md shadow-lg bg-yellow-300" onclick="location.href='<?= base_url('admin/daftar_pdp'); ?>'">
                <p class="pb-3">Pengajuan Penggantian<br>Data Profil</p>
                <p class="block uppercase text-xs tracking-widest-2">Jumlah pengajuan: <?= $pdp_c; ?></p>
                <p class="block uppercase text-xs tracking-widest-2">Ada <?= $unread_count; ?> permintaan baru</p>
            </div>
        </div>
    </div>

</div>