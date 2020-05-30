<div class="container my-3">
    <?= $this->session->flashdata('message'); ?>
    <p class="text-center text-gray-700 text-4xl font-semibold">Tambah Mata Pelajaran</p>
    <form action="" method="POST">
        <div class="form-group">
            <input class="shadow-lg bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" id="nama_mapel" name="nama_mapel" placeholder="Tambah mata pelajaran...">
            <?= form_error('nama_mapel', '<small class="form-text text-danger">', '</small>'); ?>
        </div>
        <button class="btn btn-block btn-primary">Tambah mata pelajaran</button>
    </form>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mapelListModal">
    Lihat mata pelajaran yang sudah ada
</button>

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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>