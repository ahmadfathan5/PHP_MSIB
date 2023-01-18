<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';

$d1 = new Dosen('Dosen1', 'L', 123, 'S.Kom., M.Kom.');
$d2 = new Dosen('Dosen2', 'P', 456, 'S.E');
$d3 = new Dosen('Dosen3', 'P', 789, 'S.M, S.Ket');

$m1 = new Mahasiswa('Mahasisa1', 'P', 1, 'Manajemen');
$m2 = new Mahasiswa('Mahasisa2', 'L', 5, 'Komputer');
$m3 = new Mahasiswa('Mahasisa3', 'L', 11, 'Kedokteran');

$data = [$d1, $d2, $d3, $m1, $m2, $m3];
foreach ($data as $d) {
    echo $d->cetak();
}
