<div class="p-4">
    <div class="row">
        <div class="col">
            <table class="table table-bordered text-light">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama</th>
                        <th class="text-center align-middle">Email</th>
                        <th class="text-center align-middle">WhatsApp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $du) : ?>
                        <tr>
                            <td class="text-center"><?= $i ?></td>
                            <td><?= $du['nama'] ?></td>
                            <td><?= $du['email'] ?></td>
                            <td><?= $du['whatsapp'] ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>









</div>
</section>