<style>
    table,
    td,
    th {
        border: 1px solid #333;
    }

    table {
        width: 100%;
    }

    td {
        text-align: center;
    }

    @page {
        margin: 10px;
    }

    .paragraf {
        text-align: center;
    }
</style>



<body>

    <?php
    $pdf = false;


    if (strpos(current_url(), "printpdf")) {
        $pdf = true;
    }
    if ($pdf == false) {


    ?>

    <?php } ?>
    <div class="container">
        <div class="paragraf">
            <h3 class="">Peserta Didik Baru Dari MI</h3>
            <h4>SMPS INSAN KAMIL Kec. Legok | 69765093</h4>
        </div>
        <div class="container">
            <table>
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>NIK</th>
                        <th>NISN</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Ibu</th>

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
                            <td><?= $value['nama_ibu'] ?></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
</body>

</html>

<!-- Main content -->