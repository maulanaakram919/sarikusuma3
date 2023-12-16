<div class="p-4">
    <div class="row mb-3">

        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
        </div>

        <div class="col-sm-3">
            <button class="btn btn-purple" data-toggle="modal" data-target="#addReservasi">Tambah Reservasi</button>
            <!-- Modal -->
            <div class="modal fade" id="addReservasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Reservasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/addReservasi') ?>" method="POST">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="cari">Cari Pasien</label>
                                            <select name="cari" class="cari select2 form-control">
                                                <option value="">Input NIK Pasien</option>
                                                <?php foreach ($nik as $n) : ?>
                                                    <option value="<?= $n['no_ktp'] ?>"><?= $n['no_ktp'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="smaller">
                                            <div class="row text-dark">
                                                <div class="col-sm-2">
                                                    <p>Nama</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="nama"></p>
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-2">
                                                    <p>Tanggal Lahir</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="tgl_lahir"></p>
                                                </div>
                                            </div>
                                            <div class="row text-dark">
                                                <div class="col-sm-2">
                                                    <p>Email</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="email"></p>
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-2">
                                                    <p>Agama</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="agama"></p>
                                                </div>
                                            </div>
                                            <div class="row text-dark">
                                                <div class="col-sm-2">
                                                    <p>Whatsapp</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="whatsapp"></p>
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-2">
                                                    <p>Jenis Kelamin</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="jk"></p>

                                                </div>
                                            </div>
                                            <div class="row text-dark">
                                                <div class="col-sm-2">
                                                    <p>Alamat</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="alamat"></p>
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-2">
                                                    <p>Kota</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="kota"></p>
                                                </div>
                                            </div>
                                            <div class="row text-dark">
                                                <div class="col-sm-2">
                                                    <p>Provinsi</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="provinsi"></p>
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-2">
                                                    <p>Negara</p>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <p id="negara"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label class="mt-3" for="">Tujuan Terapi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <select name="terapi" id="" class="form-control">
                                                    <option value="">Pilih Terapi</option>
                                                    <option value="mata">Terapi Mata</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label class="mt-3" for="">Tanggal Terapi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="input-group date">
                                                    <input type="text" name="tanggal_terapi" class="form-control datepicker mt-2" value="<?= date('d-m-Y') ?>">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Reservasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col table-responsive">
            <table class="table table-bordered table-sm tabledata">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama</th>
                        <th class="text-center align-middle">Email</th>
                        <th class="text-center align-middle">WhatsApp</th>
                        <th class="text-center align-middle">Tanggal Lahir</th>
                        <th class="text-center align-middle">Agama</th>
                        <th class="text-center align-middle">Jenis Kelamin</th>
                        <th class="text-center align-middle">Alamat</th>
                        <th class="text-center align-middle">Kota</th>
                        <th class="text-center align-middle">Provinsi</th>
                        <th class="text-center align-middle">Negara</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $d['nama'] ?></td>
                            <td class="align-middle"><?= $d['email'] ?></td>
                            <td class="align-middle"><?= $d['whatsapp'] ?></td>
                            <td class="align-middle text-center"><?= $d['tgl_lahir'] ?></td>
                            <td class="align-middle text-center"><?= $d['agama'] ?></td>
                            <?php if ($d['jk'] == 'p') : ?>
                                <td class="align-middle text-center">Laki laki</td>
                            <?php elseif ($d['jk'] == 'w') : ?>
                                <td class="align-middle text-center">Perempuan</td>
                            <?php else : ?>
                                <td class="align-middle text-center"></td>
                            <?php endif; ?>

                            <td class="align-middle"><?= $d['alamat'] ?></td>
                            <td class="align-middle"><?= $d['kota'] ?></td>
                            <td class="align-middle"><?= $d['provinsi'] ?></td>
                            <td class="align-middle"><?= $d['negara'] ?></td>
                            <td class="align-middle p-2">
                                <button class="btn btn-sm btn-info mx-1" data-toggle="modal" data-target="#editUser<?= $d['id'] ?>">Edit</button>

                                <div class="modal fade" id="editUser<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pasien</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/editPasien') ?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $d['id'] ?>" hidden name="id">
                                                        <label for="nama">Nama</label>
                                                        <input type="text" class="form-control" id="nama" required name="nama" aria-describedby="nama" placeholder="Masukan Nama Pasien" value="<?= $d['nama'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="email">email</label>
                                                        <input type="text" class="form-control" id="email" required name="email" aria-describedby="email" placeholder="Masukan email Pasien" value="<?= $d['email'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="whatsapp">whatsapp</label>
                                                        <input type="text" class="form-control" id="whatsapp" required name="whatsapp" aria-describedby="whatsapp" placeholder="Masukan whatsapp Pasien" value="<?= $d['whatsapp'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="tanggal_lahir">tanggal_lahir</label>
                                                        <input type="date" class="form-control" id="tanggal_lahir" required name="ttl" aria-describedby="tanggal_lahir" placeholder="Masukan Tanggal Lahir Pasien" value="<?= $d['tgl_lahir'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="agama">agama</label>
                                                        <input type="text" class="form-control" id="agama" required name="agama" aria-describedby="agama" placeholder="Masukan agama Pasien" value="<?= $d['agama'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="jk">Jenis Kelamin</label>
                                                        <select required name="jk" id="jk" class="form-control" required name="jk">

                                                            <option value="">Pilih Salah Satu</option>
                                                            <option selected value="<?= $d['jk'] ?>"><?= $d['jk'] == 'p' ? 'Pria' : 'Wanita' ?></option>
                                                            <option value="p">Pria</option>
                                                            <option value="w">Wanita</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="alamat">alamat</label>
                                                        <input type="text" class="form-control" id="alamat" required name="alamat" aria-describedby="alamat" placeholder="Masukan Alamat Pasien" value="<?= $d['alamat'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="negara">Negara</label>
                                                        <input type="text" class="form-control" id="negara" required name="negara" aria-describedby="negara" placeholder="Masukan Negara Pasien" value="<?= $d['negara'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="provinsi">provinsi</label>
                                                        <input type="text" class="form-control" id="provinsi" required name="provinsi" aria-describedby="provinsi" placeholder="Masukan provinsi Pasien" value="<?= $d['provinsi'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="kota">Kota</label>
                                                        <input type="text" class="form-control" id="kota" required name="kota" aria-describedby="kota" placeholder="Masukan kota Pasien" value="<?= $d['kota'] ?>">
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


                                <button data-delete="<?= $d['id'] ?>" class="btn btn-danger deleteUser btn-sm">Delete</button>
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