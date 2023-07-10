<?php
$db     = \Config\Database::connect();

$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>



<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-3 ">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fa-solid fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">PPDB Tahun <?= $ta['ta'] ?></span>
                    <span class="info-box-number"><?= $jumlahTotal ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

        </div>
        <div class="col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-primary"><i class="fas fa-male"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Laki-laki</span>
                    <span class="info-box-number"><?= $jumlahLaki ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-pink"><i class="fas fa-female"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Perempuan</span>
                    <span class="info-box-number"><?= $jumlahPerempuan ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fas fa-school"></i></i></span>
                <div class="info-box-content">
                    <b>
                        <span class="info-box-text">SD : <?= $jumlahSD ?></span>
                        <span class="info-box-tex">MI : <?= $jumlahMI ?></span>
                    </b>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
    </div>

</div>


<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Jumlah Peserta Didik Baru berdasarkan <strong> Asal Sekolah Tahun</strong> <?= $ta['ta'] ?></h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>Nama Sekolah</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($datasekolah->getResult() as $row) {
                        $th = $row->sekolah;
                        $jumlah = $row->jumlah;
                    ?>
                        <tr>
                            <td><?= $th ?> </td>
                            <td> <strong><?= $jumlah ?></strong> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Grafik -->
<?php

foreach ($datatahun->getResult() as $row) {
    $thun[] = $row->ta;
    $jmlah[] = $row->jumlah;
}
?>
<div class="col-md-6">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Grafik Pendaftar Pertahun Pelajaran</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="chart">
                <canvas id="myChart" height="100"></canvas>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"> <i class="fas fa-database"></i> Backup Database</h3>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-primary" role="alert">';
                echo session()->getFlashdata('pesan');
                echo ' </div>';
            } ?>
            <button type="button" class="btn btn-success" onclick="location.href=('admin/backup')">
                Klik tombol untuk backup database
            </button>
        </div>
        <!-- /.card-body -->
    </div>
</div>

<script src="<?= base_url() ?>/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode($thun) ?>,
            datasets: [{
                label: ' "# Pendaftar Berdasarkan Tahun Ajaran <?= json_encode($thun) ?>',
                data: <?= json_encode($jmlah) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    // 'rgba(75, 192, 192, 0.2)',
                    // 'rgba(153, 102, 255, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>










<?= $this->endSection() ?>