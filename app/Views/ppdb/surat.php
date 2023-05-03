<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<!-- Main content -->




<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <form action="">
                <div class="mb-2">
                    <label for="">Nama Siswa</label>
                    <select name="nama_lengkap" id="nama_siswa" class="form-control select2bs4" style="width: 100%;">
                        <option value="">--Nama Siswa--</option>
                        <?php foreach ($siswa as $key => $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['nama_lengkap'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="">NISN</label>
                    <input type="text" class="form-control" id="nisn">
                </div>
                <div class="mb-2">
                    <label for="">Tempat</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>
                <div class="mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
                <div class="mb-2">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="mb-2">
                    <label for="">Nama Orang Tua</label>
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                </div>
                <div class="mb-2">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Pengajuan Surat</h5>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NISN</th>
                        <th>No Surat</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
    $('#nama_siswa').on('change', (event) => {
        getSiswa(event.target.value).then(siswa => {
            $('#nisn').val(siswa.nisn);
            $('#alamat').val(siswa.alamat);
        });
    });

    async function getSiswa(id) {
        let response = await fetch('/api/home/' + id)
        let data = await response.json();

        return data;
    }
</script>






<?= $this->endSection() ?>