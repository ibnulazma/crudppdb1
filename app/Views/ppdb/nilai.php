<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<?php

use Sabberworm\CSS\Value\Value;

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
            <h3 class="card-title">Hasil Nilai Test Baca Al-Quran dan Latin <?= $ta['ta'] ?></h3>
            <a class="btn btn-primary btn-xs float-right" href="<?= base_url('ppdb/tambahSiswa') ?>"> <i class="fas fa-plus"></i> Tambah</a>
            <a class="btn btn-success btn-xs float-right mr-2" href="<?= base_url('ppdb/cetak') ?>"> <i class="fas fa-print"></i> Cetak Laporan</a>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-md-12">
                    <table class="table table-bordered table-hover " id="example1">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Lengkap</th>
                                <th>JK</th>
                                <th>Bentuk Test</th>
                                <th>Nilai Test</th>
                                <th>Huruf Latin</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            foreach ($nilai as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nisn'] ?></td>
                                    <td><?= $value['nama_lengkap'] ?></td>
                                    <td><?= $value['jenis_kelamin'] ?></td>
                                    <td><?= $value['btq'] ?></td>
                                    <td><?= $value['nilaibtq'] ?></td>
                                    <td><?= $value['nilailatin'] ?></td>
                                    <td><?= $value['catatan'] ?></td>
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