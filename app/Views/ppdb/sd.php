<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<!-- Main content -->

<div class="col-md-12">
    <h3 class="text-center">Peserta Didik Baru Dari SD</h3>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Nama Ibu</th>
                        <th>Sekolah</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($sd as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['jenis_kelamin'] ?></td>
                            <td><?= $value['no_telp'] ?></td>
                            <td><?= $value['alamat'] ?></td>
                            <td><?= $value['nama_ibu'] ?></td>
                            <td><?= $value['sekolah'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>