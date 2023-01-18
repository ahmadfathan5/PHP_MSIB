<?php
//array scalara (1 dimensi)
$m1 = ['nim' => '0110217001', 'nama' => 'Mahasiswa1', 'nilai' => 100];
$m2 = ['nim' => '0110217002', 'nama' => 'Mahasiswa2', 'nilai' => 90];
$m3 = ['nim' => '0110217003', 'nama' => 'Mahasiswa3', 'nilai' => 80];
$m4 = ['nim' => '0110217004', 'nama' => 'Mahasiswa4', 'nilai' => 70];
$m5 = ['nim' => '0110217005', 'nama' => 'Mahasiswa5', 'nilai' => 60];
$m6 = ['nim' => '0110217006', 'nama' => 'Mahasiswa6', 'nilai' => 50];
$m7 = ['nim' => '0110217007', 'nama' => 'Mahasiswa7', 'nilai' => 40];
$m8 = ['nim' => '0110217008', 'nama' => 'Mahasiswa8', 'nilai' => 20];
$m9 = ['nim' => '0110217009', 'nama' => 'Mahasiswa9', 'nilai' => 20];
$m10 = ['nim' => '0110217010', 'nama' => 'Mahasiswa10', 'nilai' => 10];

//array scalar untuk judul tabel
$ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

//array assosiative( > 1 dimensi)
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//aggregate function in array
$jumlahMahasiswa = count($mahasiswa);
$kumpulanNilai = array_column($mahasiswa, 'nilai');
$totalNilai = array_sum($kumpulanNilai);
$maxNilai = max($kumpulanNilai);
$minNilai = min($kumpulanNilai);
$nilaiRata2 = $totalNilai / $jumlahMahasiswa;
//keterangan
$keterangan = [
    'Nilai Tertinggi' => $maxNilai,
    'Nilai Terendah' => $minNilai,
    'Nilai Rata - Rata' => $nilaiRata2,
    'Jumlah Mahasiswa' => $jumlahMahasiswa,
];

$no = 1;
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
                <?php foreach ($ar_judul as $judul) {?>
                <th scope="col"><?=$judul?></th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) {
    $ket = $mhs['nilai'] >= 60 ? 'Lulus' : 'Tidak Lulus';

    if ($mhs['nilai'] > 80) {
        $grade = 'A';
    } elseif ($mhs['nilai'] > 60) {
        $grade = 'B';
    } elseif ($mhs['nilai'] > 40) {
        $grade = 'C';
    } elseif ($mhs['nilai'] > 20) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    switch ($grade) {
        case 'A':$predikat = 'Sangat Memuaskan';
            break;
        case 'B':$predikat = 'Memuaskan';
            break;
        case 'C':$predikat = 'Cukup';
            break;
        case 'D':$predikat = 'Tidak Memuaskan';
            break;
        case 'E':$predikat = 'Sangat Tidak Memuaskan';
            break;

        default:
            # code...
            break;
    }
    ?>

            <tr>
                <td><?=$no++?></td>
                <td><?=$mhs['nim']?></td>
                <td><?=$mhs['nama']?></td>
                <td><?=$mhs['nilai']?></td>
                <td><?=$ket?></td>
                <td><?=$grade?></td>
                <td><?=$predikat?></td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot>
            <?php foreach ($keterangan as $ket => $hasil) {?>
            <tr>
                <th colspan="3"><?=$ket?></th>
                <th> : </th>
                <th colspan="3"><?=$hasil?></th>
            </tr>
            <?php }?>
        </tfoot>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>