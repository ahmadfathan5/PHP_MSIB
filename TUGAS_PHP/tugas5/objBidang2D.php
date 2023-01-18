<?php

require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(10);
$persegi = new Persegi(20, 40);
$segitiga = new Segitiga(20, 40);

$bidang = [$lingkaran, $persegi, $segitiga];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th>NO.</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bidang as $b) {
    $no = 1;
    ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$b->nama?></td>
                <td><?=$b->keterangan()?></td>
                <td><?=$b->luasBidang()?></td>
                <td><?=$b->kelilingBidang()?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
