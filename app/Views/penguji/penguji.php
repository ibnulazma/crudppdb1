<?php

?>



<?= $this->extend('template/template-user') ?>
<?= $this->section('content') ?>



<div class="container-fluid">
    <h5>Selamat Datang Kepada Ustadz/ah <strong><?= $_SESSION['nama_user'] ?></strong></h5> <br>
    <h5>Silahkan untuk memberikan penilaian kepda calon peserta didik sejumlah orang</h5>
</div>


<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <form action="">
                <div class="form-group">
                    <label for="">Nama Calon Peserta Didik</label>
                    <select name="" id="" class="form-control select2bs4" style="width: 100%;">
                        <?php foreach ($walas as $row) { ?>
                            <option value=""><?= $row['nama_lengkap'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Baca Al-quran</label>
                    <input type="text" name="" class="form-control" name="btq">
                </div>
                <div class="form-group">
                    <label for="">Nilai Baca Al-quran</label>
                    <select name="" id="" class="form-control">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Catatan</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>










<?= $this->endSection() ?>