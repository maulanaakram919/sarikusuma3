<div class="p-4">
    <div class="row mb-3">

        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
        </div>

        <div class="col-sm-3">
            <button class="btn btn-purple" data-toggle="modal" data-target="#addObat">Tambah Data</button>
            <!-- Modal -->
            <div class="modal fade" id="addObat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Vitamin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/addObat') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">

                                    <label for="nama">Nama Obat</label>
                                    <input type="text" class="form-control" id="nama" required name="nama_obat" aria-describedby="nama" placeholder="Masukan Nama Obat">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" required name="harga" aria-describedby="harga" placeholder="Masukan harga Obat">
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Vitamin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col table-responsive">
            <table class="table table-bordered table-sm  tabledata">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama Obat</th>
                        <th class="text-center align-middle">Harga</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $d['nama_obat'] ?></td>
                            <td class="align-middle"><?= $d['harga'] ?></td>

                            <td class="align-middle p-2">
                                <button class="btn btn-sm btn-info mx-1" data-toggle="modal" data-target="#editObat<?= $d['id'] ?>">Edit</button>

                                <div class="modal fade" id="editObat<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Vitamin</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/editObat') ?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $d['id'] ?>" hidden name="id">
                                                        <label for="nama">Nama Vitamin</label>
                                                        <input type="text" class="form-control" id="nama" required name="nama_obat" aria-describedby="nama" placeholder="Masukan Nama Obat" value="<?= $d['nama_obat'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="harga">Harga</label>
                                                        <input type="text" class="form-control" id="harga" required name="harga" aria-describedby="harga" placeholder="Masukan harga Obat" value="<?= $d['harga'] ?>">
                                                    </div>



                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <button data-delete="<?= $d['id'] ?>" class="btn btn-danger deleteObat  btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>









</div>
</section>