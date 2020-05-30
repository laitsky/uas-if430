<div class="bg-gray-100 h-screen py-8">
    <!-- Button trigger modal -->
    <button type="button" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full mb-4 btn-block container" style="max-width: 840px;" data-toggle="modal" data-target="#mapelListModal">
        <span class="font-light">Lihat mata pelajaran yang sudah ada</span>
    </button>
    <div class="container my-3 bg-white p-8 shadow-lg rounded-lg overflow-hidden" style="max-width: 840px;">
        <div class="container">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <p class="text-center text-gray-700 text-4xl font-semibold mb-4">Tambah Mata Pelajaran</p>
        <form action="" method="POST">
            <div class="form-group">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" type="text" id="nama_mapel" name="nama_mapel" placeholder="Tambah mata pelajaran...">
                <?= form_error('nama_mapel', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <div class="flex justify-end">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah mata pelajaran</button>
            </div>
        </form>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="mapelListModal" tabindex="-1" role="dialog" aria-labelledby="mapelListModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mapelListModalLabel">Daftar Mata Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-dt table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Nama Mapel</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_mapel as $keys => $lm) : ?>
                                <tr class="text-center">
                                    <th class="align-middle" scope="row"><?= $keys + 1; ?></th>
                                    <td class="align-middle"><?= $lm['nama_mapel']; ?></td>
                                    <td class="align-middle">
                                        <a href="<?= base_url('admin/sunting_mapel/') . $lm['id_mapel']; ?>" class="btn btn-warning">Ganti Nama Mapel</a>
                                        <a href="<?= base_url('admin/hapus_mapel/') . $lm['id_mapel']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>