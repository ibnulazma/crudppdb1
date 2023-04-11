<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>


<div class="card">
    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal"><i class="fas fa-plus"></i></button>
    <div class="card-body">
        <table id="example2" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($sekolah as $key => $value) { ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['sekolah'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Biodata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('sekolah/add') ?>
            <div class="modal-body">
                <label for="">Jenjang</label>
                <select name="id_jenjang" id="" class="form-control">
                    <option value="1">SD</option>
                    <option value="2">MI</option>
                </select>
                <label for="">Nama Sekolah</label>
                <input type="text" name="sekolah" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php echo form_close() ?>
    </div>
</div>









<?= $this->endSection() ?>