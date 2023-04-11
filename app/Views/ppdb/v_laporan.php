<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>


<div class="col-md-3">
    <label for="">Nama Sekolah</label>
    <select name="id_sekolah" id="sekolah" class="form-control">
        <option value="">Show All</option>

        <?php foreach ($sekolah as $key => $value) { ?>
            <option value="<?= $value['id_sekolah'] ?>"><?= $value['sekolah'] ?></option>
        <?php } ?>
    </select>
</div>
<!-- <div class="col-md-3">
    <label for="">Nama anak</label>
    <select name="" id="siswa" class="form-control">
        <option value="">Show All</option>

    </select>
</div> -->
<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <table class="table " id="siswa">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peserta Didik</th>
                        <th>Nama Sekolah</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#sekolah").change(function() {
            var id_sekolah = $("#sekolah").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Ppdb/dataSiswa') ?>/' + id_sekolah,
                success: function(html) {
                    $("#siswa tbody").html(html);
                }
            });
        });
    });
</script>




<?= $this->endSection() ?>