<?php
//array scalara (1 dimensi)
$b1 = ['kode' => 'a1', 'buah' => 'Apel', 'harga' => '25000', 'jml' => 5];
$b2 = ['kode' => 'a2', 'buah' => 'Anggur', 'harga' => '45000', 'jml' => 4];
$b3 = ['kode' => 'b1', 'buah' => 'Belimbing', 'harga' => '15000', 'jml' => 10];
$b4 = ['kode' => 'b2', 'buah' => 'Bangkuang', 'harga' => '10000', 'jml' => 8];
$b5 = ['kode' => 'c1', 'buah' => 'Cerry', 'harga' => '35000', 'jml' => 12];
$b6 = ['kode' => 'a2', 'buah' => 'Anggur', 'harga' => '45000', 'jml' => 15];

//array untuk judul tabel
$ar_judul = ['No', 'Kode', 'Nama Buah', 'Harga/Kg', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Total'];

//array assosiative( > 1 dimensi)
$buah2an = [$b1, $b2, $b3, $b4, $b5, $b6];

$no = 1;

//aggregate function in array
$jumlah_transaksi = count($buah2an);
$jml_kg = array_column($buah2an, 'jml');
$total_kg = array_sum($jml_kg);
$max_kg = max($jml_kg);
$min_kg = min($jml_kg);
$rata2 = $total_kg / $jumlah_transaksi;
//keterangan
$keterangan = [
    'Jumlah Transaksi' => $jumlah_transaksi,
    'Total Kg' => $total_kg,
    'Jml Kg Tertinggi' => $max_kg,
    'Jml Kg Terendah' => $min_kg,
    'Rata2' => $rata2,
];
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
    <h1>Nama Nama Buah</h1>
    <table class="table">
        <thead>
            <tr>
                <?php foreach ($ar_judul as $judul) {?>
                <th scope="col"><?=$judul?></th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buah2an as $buah) {
    $hargaKotor = $buah['harga'] * $buah['jml'];

    $diskon = ($buah['buah'] == 'Anggur' && $buah['jml'] >= 10) ? 0.2 : 0.1;

    $hargaDiskon = $hargaKotor * $diskon;
    $total = $hargaKotor - $hargaDiskon;
    ?>

            <tr>
                <td><?=$no++?></td>
                <td><?=$buah['kode']?></td>
                <td><?=$buah['buah']?></td>
                <td>Rp<?=number_format($buah['harga'], 2, ',', '.')?></td>
                <td><?=$buah['jml']?>Kg</td>
                <td>Rp<?=number_format($hargaKotor, 2, ',', '.')?></td>
                <td>Rp<?=number_format($hargaDiskon, 2, ',', '.')?></td>
                <td>Rp<?=number_format($total, 2, ',', '.')?></td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot>
                <?php
foreach ($keterangan as $ket => $hasil) {
    ?>
                <tr>
                    <th colspan="7"><?=$ket?></th>
                    <th><?=$hasil?></th>
                </tr>
                <?php }?>
            </tfoot>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>