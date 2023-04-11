<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>
<?php
$db     = \Config\Database::connect();


$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <?= form_open('ppdb/simpanDaftar') ?>
            <?= session()->getFlashdata('errors') ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <label for="">NIK</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="validationCustom03" name="nik" value="<?= old('nik') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nik'); ?>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="">NISN</label>
                        <input type="text" class="form-control " placeholder="nisn harus sesuai dengan yang di KK" name="nisn" value="<?= old('nisn') ?>">

                    </div>
                    <div class="mb-2">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="validationCustom03" name="nama_lengkap" value="<?= old('nama_lengkap') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_lengkap'); ?>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="">
                            <option value="">--Jenis Kelamin--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" id="validationCustom03" name="tempat_lahir" value="<?= old('tempat_lahir') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tempat_lahir'); ?>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="">Tanggal Lahir</label>
                        <input type="text" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" id="validationCustom03" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        <div class="invalid-feedback">
                            <?= $validation->getError('tanggal_lahir'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?= old('alamat') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('alamat'); ?>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenjang</label>
                        <select name="id_jenjang" class="form-control" id="jenjang">
                            <option value="">--Jenis Sekolah--</option>
                            <?php foreach ($jenjang as $key => $value) { ?>
                                <option value="<?= $value['id_jenjang'] ?>"><?= $value['jenjang'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="">Nama Sekolah</label>
                        <select name="id_sekolah" class="form-control select2bs4" style="width: 100%;" id="asal_sekolah">>
                            <option value="">--Pilih Sekolah--</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="">Nama Ibu</label>
                        <input type="text" class="form-control" name="nama_ibu" value="<?= old('nama_ibu') ?>">
                    </div>
                    <div class=" mb-2">
                        <label for="">No Telp</label>
                        <input type="text" class="form-control" name="no_telp" value="<?= old('no_telp') ?>">
                    </div>
                    <div class=" mb-2">
                        <!-- <label for="">Tgl.Pendaftaran</label> -->
                        <input type="hidden" class="form-control" name="tgl_pendaftaran" value="<?= date('d/m/Y') ?>" readonly>
                    </div>
                    <div class=" mb-2">
                        <!-- <label for="">Tahun Ajaran</label> -->
                        <input type="hidden" class="form-control" value="<?= $ta['id_ta'] ?>" name="id_tahun" readonly>
                    </div>


                </div>
            </div>
            <button class=" btn btn-block btn-primary" type="submit"> Submit</button>
            <?= form_close() ?>
        </div>

    </div>
</div>

<script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#jenjang").change(function() {
            var id_sekolah = $("#jenjang").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Ppdb/dataAsalSekolah') ?>/' + id_sekolah,
                success: function(html) {
                    $("#asal_sekolah").html(html);
                }
            });
        });
    });
</script>



<?= $this->endSection() ?>