<div class="p-4">
    <div class="row mb-3">

        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>
    <div class="row">
        <div class="col table-responsive">
            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body">
                    <p>Data Pasien</p>


                    <?php for ($i = 0; $i < count($detail_user); $i++) : ?>
                        <div class="smaller">
                            <div class="row text-dark">
                                <div class="col-sm-2">
                                    <p>Nama</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['nama'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Tanggal Lahir</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['tgl_lahir'] ?></p>
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
                                    <p><?= $detail_user[0]['email'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Agama</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['agama'] ?></p>
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
                                    <p><?= $detail_user[0]['whatsapp'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <?php if ($detail_user[0]['jk'] == 'p') : ?>
                                        <p>Pria</p>
                                    <?php else : ?>
                                        <p>Wanita</p>
                                    <?php endif; ?>

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
                                    <p><?= $detail_user[0]['alamat'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Kota</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['kota'] ?></p>
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
                                    <p><?= $detail_user[0]['provinsi'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Negara</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['negara'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>

                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Terapis</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>


                </div>
            </div>
        </div>
    </div>









</div>
</section>