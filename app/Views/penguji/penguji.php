<?php

?>



<?= $this->extend('template/template-user') ?>
<?= $this->section('content') ?>



<div class="container-fluid">
    <h5>Selamat Datang Kepada Ustadz/ah <strong><?= $_SESSION['nama_user'] ?></strong></h5> <br>
</div>


<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <?= form_open('penguji/addnilai') ?>
                    <div class="form-group">
                        <label for="">Nama Calon Peserta Didik</label>
                        <select name="id_siswa" id="" class="form-control select2bs4" style="width: 100%;">
                            <?php foreach ($walas as $row) { ?>
                                <option value="<?= $row['id'] ?>"><?= $row['nama_lengkap'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Al-quran/Iqro</label>
                        <select name="btq" id="" class="form-control">
                            <option value="Al-quran">Al-quran</option>
                            <option value="Iqro">Iqro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai Baca Al-quran / Iqro</label>
                        <select name="nilaibtq" id="" class="form-control">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Huruf Latin</label>
                        <select name="nilailatin" id="" class="form-control">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="catatan" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class=" table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Peserta Didik</th>
                                <th>Al-Quran/Iqro</th>
                                <th>Nilai BTQ/Iqro</th>
                                <th>Baca Latin</th>
                                <th>Nilai Latin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($nilai as $row) { ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nama_lengkap'] ?></td>
                                    <td><?= $row['btq'] ?></td>
                                    <td><?= $row['nilaibtq'] ?></td>
                                    <td><?= $row['nilailatin'] ?></td>
                                    <td><?= $row['catatan'] ?></td>
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