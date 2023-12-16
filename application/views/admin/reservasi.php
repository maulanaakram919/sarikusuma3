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
                        <th class="text-center align-middle">Tanggal Lahir</th>
                        <th class="text-center align-middle">Usia</th>
                        <th class="text-center align-middle">Jenis Kelamin</th>
                        <th class="text-center align-middle">Jenis Terapi</th>
                        <th class="text-center align-middle">Tanggal Terapi</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php function hitung_umur($tanggal_lahir)
                    {
                        $birthDate = new DateTime($tanggal_lahir);
                        $today = new DateTime("today");
                        if ($birthDate > $today) {
                            exit("0 tahun 0 bulan 0 hari");
                        }
                        $y = $today->diff($birthDate)->y;
                        $m = $today->diff($birthDate)->m;
                        $d = $today->diff($birthDate)->d;
                        return $y . " tahun " . $m . " bulan " . $d . " hari";
                    }

                    ?>
                    <?php foreach ($detail_user as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $d['nama'] ?></td>
                            <td class="align-middle text-center"><?= $d['tgl_lahir'] ?></td>
                            <td class="align-middle text-center"><?= hitung_umur($d['tgl_lahir']) ?></td>

                            <?php if ($d['jk'] == 'l') : ?>
                                <td class="align-middle text-center">Laki laki</td>
                            <?php elseif ($d['jk'] == 'p') : ?>
                                <td class="align-middle text-center">Perempuan</td>
                            <?php else : ?>
                                <td class="align-middle text-center"></td>
                            <?php endif; ?>

                            <td class="align-middle">Terapi <?= $d['terapi'] ?></td>
                            <td class="align-middle"><?= $d['tanggal_terapi'] ?></td>

                            <td class="align-middle p-2">
                                <button class="btn btn-sm btn-info mx-1" data-toggle="modal" data-target="#editReservasi<?= $d['id_reservasi'] ?>">Edit</button>

                                <div class="modal fade" id="editReservasi<?= $d['id_reservasi'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Reservasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/editReservasi') ?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $d['id_reservasi'] ?>" hidden name="id">
                                                    </div>
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
                                                                        <p><?= $d['nama'] ?></p>
                                                                    </div>
                                                                    <div class="col-sm-1"></div>
                                                                    <div class="col-sm-2">
                                                                        <p>Tanggal Lahir</p>
                                                                    </div>
                                                                    <div class="col-sm-1 text-center">
                                                                        <p>:</p>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <p><?= $d['tgl_lahir'] ?></p>
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
                                                                        <p><?= $d['email'] ?></p>
                                                                    </div>
                                                                    <div class="col-sm-1"></div>
                                                                    <div class="col-sm-2">
                                                                        <p>Agama</p>
                                                                    </div>
                                                                    <div class="col-sm-1 text-center">
                                                                        <p>:</p>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <p><?= $d['agama'] ?></p>
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
                                                                        <p><?= $d['whatsapp'] ?></p>
                                                                    </div>
                                                                    <div class="col-sm-1"></div>
                                                                    <div class="col-sm-2">
                                                                        <p>Jenis Kelamin</p>
                                                                    </div>
                                                                    <div class="col-sm-1 text-center">
                                                                        <p>:</p>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <p><?= $d['jk'] ?></p>

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
                                                                        <p><?= $d['alamat'] ?></p>
                                                                    </div>
                                                                    <div class="col-sm-1"></div>
                                                                    <div class="col-sm-2">
                                                                        <p>Kota</p>
                                                                    </div>
                                                                    <div class="col-sm-1 text-center">
                                                                        <p>:</p>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <p><?= $d['kota'] ?></p>
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
                                                                        <p><?= $d['provinsi'] ?></p>
                                                                    </div>
                                                                    <div class="col-sm-1"></div>
                                                                    <div class="col-sm-2">
                                                                        <p>Negara</p>
                                                                    </div>
                                                                    <div class="col-sm-1 text-center">
                                                                        <p>:</p>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <p><?= $d['negara'] ?></p>
                                                                    </div>
                                                                </div>
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
                                                                <option selected value="<?= $d['terapi'] ?>">Terapi <?= $d['terapi'] ?></option>
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
                                                                <input type="text" name="tanggal_terapi" class="form-control datepicker mt-2" value="<?= $d['tanggal_terapi'] ?>">
                                                                <div class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-th"></span>
                                                                </div>
                                                            </div>
                                                        </div>
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


                                <button data-delete="<?= $d['id_reservasi'] ?>" class="btn btn-danger deleteReservasi btn-sm">Delete</button>
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