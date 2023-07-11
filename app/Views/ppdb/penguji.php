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
            <h3 class="card-title">Penguji Test Baca Al-Quran dan Latin <?= $ta['ta'] ?></h3>
            <a class="btn btn-primary btn-xs float-right" href="<?= base_url('ppdb/tambahSiswa') ?>"> <i class="fas fa-plus"></i> Tambah</a>
            <a class="btn btn-success btn-xs float-right mr-2" href="<?= base_url('ppdb/cetak') ?>"> <i class="fas fa-print"></i> Cetak Laporan</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <?= form_open('admin/savepenguji') ?>
                    <div class="form-group">
                        <label for="">Nama Penguji</label>
                        <input type="text" class="form-control" name="nama_penguji">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <?= form_close() ?>
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered table-hover ">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            foreach ($penguji as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nama_penguji'] ?></td>
                                    <td><?= $value['username'] ?></td>
                                    <td><?= $value['password'] ?></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_penguji'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php foreach ($detail as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_penguji'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <?= form_open('admin/editpenguji/' . $value['id_penguji']) ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Calon PPDB</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Nama Penguji</label>
                    <input type="text" class="form-control" value="<?= $value['nama_penguji'] ?>" name="nama_penguji">
                </div>
                <div class="modal-body">
                    <label for="">Username</label>
                    <input type="text" class="form-control" value="<?= $value['username'] ?>" name="username">
                </div>
                <div class="modal-body">
                    <label for="">Password</label>
                    <input type="text" class="form-control" value="<?= $value['password'] ?>" name="password">
                </div>
                <div class=" modal-footer">
                    <button type="submit" class="btn btn-danger pull-left">Submit</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>

<?php } ?>
<?= $this->endSection() ?>