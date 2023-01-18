<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <form method="POST" class="border border-light p-5">

        <p class="h4 mb-4 text-center">Sign in</p>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control mb-4" placeholder="Nama Mahasiswa">

        <label for="matkul">Mata Kuliah</label>
        <select name="matkul" class="browser-default custom-select mb-4" id="matkul">
            <option value="" disabled="" selected="">-- pilih matkul --</option>
            <option value="database">Database</option>
            <option value="laravel">Laravel</option>
            <option value="web">Web Dasar</option>
        </select>

        <label for="nilai">Nilai</label>
        <input type="text" name="nilai" id="nilai" class="form-control mb-4" placeholder="Nilai Mahasiswa">

        <button name="proses" class="btn btn-info btn-block my-4" type="submit">Proses</button>

    </form>

<?php
//tangkap request
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];
$tombol = $_POST['proses'];

//ternary
$keterangan = ($nilai >= 60 && $nilai <= 100) ? "LULUS" : "TIDAK LULUS";

//if else
if ($nilai >= 85 && $nilai <= 100) {
    $grade = 'A';
} elseif ($nilai >= 75 && $nilai < 85) {
    $grade = 'B';
} elseif ($nilai >= 60 && $nilai < 75) {
    $grade = 'C';
} elseif ($nilai >= 30 && $nilai < 60) {
    $grade = 'D';
} else {
    $grade = 'E';
}

//switch case
switch ($grade) {
    case 'A':
        $predikat = 'Sangat Memuaskan';
        break;
    case 'B':
        $predikat = 'Memuaskan';
        break;
    case 'C':
        $predikat = 'Tidak Memuaskan';
        break;
    case 'C':
        $predikat = 'Sangat Tidak Memuaskan';
        break;
    default:
        $predikat = 'Sungguh Sangat Tidak Memuaskan';
        break;
}

if (isset($tombol)) {
    ?>
    <div class="alert alert-primary" role="alert">
        Nama Mahasiswa: <?=$nama?>
        <br> Mata Kuliah: <?=$matkul?>
        <br> Nilai: <?=number_format($nilai, 2, ',', '.')?>
        <br> keterangan: <?=$keterangan?>
        <br> Grade: <?=$grade?>
        <br> Predikat: <?=$predikat?>
    </div>

<?php
}
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>