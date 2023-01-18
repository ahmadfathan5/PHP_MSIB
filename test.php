<?php

// $firsName = 'Ahmad';
// $lastName = 'Fathan';
// $angka1 = 10;
// $angka2 = '5';

// $fullname = $firsName . $lastName;
// $result = $angka1 + $angka2;
// echo $fullname;
// echo $result;

// $num = '500 IDR';
// $num2 = 200;
// // echo $num += $num2;
// echo '<br>' . $num + $num2;

// define('jari2', 10);
// // PHI = 10;
// echo jari2;

$nama = "Budi Santoso";
$nilai = '75';

$keterangan = ($nilai >= 60 && is_int($nilai)) ? "Lulus" : "Gagal";

echo $keterangan;
?>

<!-- <form method="POST">
    <label>Nama</label> <br>
    <input type="text" name="name" /><br />
    <input type="submit" name="proses" value="Simpan" />
</form> -->

<?php
// //memproses form
// $nama = $_GET['name'];
// $proses = $_GET['proses'];
// if (isset($proses)) {
//     echo 'Nama : ' . $nama;
// }

// $a1 = 1;
// $a2 = 3;
// $a3 = 4;
// $a4 = 2;

// $myArray = [$a1, $a1, $a3, $a4];

// foreach ($myArray as $a) {
//     echo $a;
// }

// function kabar($kawan = 'Budi')
// {
//     echo '<br/>Hai Apa Kabar ' . $kawan . '?';
// }
// $kawan = 'eko';
// kabar('Ahmad');

// class Gempa
// {
//     public function __construct($skala)
//     {
//         $this->skala = $skala;
//     }
//     private function dampak()
//     {
//         $dampak = ($this->$skala >= 5) ? "Berbahaya" : "waspada";
//     }
//     public function cetak()
//     {
//         echo '<br/>Dampak :' . $this->dampak();
//     }
// }

// $g1 = new Gempa(4);
// $g1->cetak();
?>
