<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>



<style>
    table,
    td,
    th {
        border: 1px solid #333;
    }

    table {
        width: 100%;
    }

    @page {
        margin: 10px;
    }
</style>



<body>
    <div class="container">
        <div class="text-center">
            <h3>Peserta Didik Baru Dari MI</h3>
        </div>
        <?php
        $pdf = false;


        if (strpos(current_url(), "printpdf")) {
            $pdf = true;
        }
        if ($pdf == false) {


        ?>

        <?php } ?>

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
</body>

</html>

<!-- Main content -->