<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<!-- Main content -->



<div class="col-md-12">
    <h3 class="text-center">Peserta Didik Baru Dari MI</h3>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">

            <a href="<?= base_url('ppdb/printpdf') ?>" class="btn btn-primary">Cetak Laporan MI</a>
            <table id="example2" class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>NIK</th>
                        <th>NISN</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Nama Ibu</th>
                        <th>Sekolah</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($mi as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['jenis_kelamin'] ?></td>
                            <td><?= $value['nik'] ?></td>
                            <td><?= $value['nisn'] ?></td>
                            <td><?= $value['tempat_lahir'] ?></td>
                            <td><?= $value['tanggal_lahir'] ?></td>
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