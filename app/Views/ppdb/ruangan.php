<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<?php
$db     = \Config\Database::connect();


$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>

<div class="col-md-12">
    <?php
    $errors = session()->getFlashdata('errors');


    if (!empty($errors)) { ?>

        <div class="alert alert-success" role="alert">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-success" role="alert">';
        echo session()->getFlashdata('pesan');
        echo ' </div>';
    } ?>
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Ruangan Test Baca Al-Quran dan Latin <?= $ta['ta'] ?></h3>
            <a class="btn btn-primary btn-xs float-right" href="<?= base_url('ppdb/tambahSiswa') ?>"> <i class="fas fa-plus"></i> Tambah</a>
            <a class="btn btn-success btn-xs float-right mr-2" href="<?= base_url('ppdb/cetak') ?>"> <i class="fas fa-print"></i> Cetak Laporan</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <?= form_open('admin/saveruangan') ?>
                    <div class="form-group">
                        <label for="">Nama Ruangan</label>
                        <input type="text" class="form-control" name="ruangan">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <?= form_close() ?>
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered table-hover ">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Ruangan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            foreach ($ruangan as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['ruangan'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>