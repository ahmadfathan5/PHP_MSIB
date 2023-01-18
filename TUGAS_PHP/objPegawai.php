<?php
require 'pegawai.php';

//ciptakan object
$p1 = new Pegawai('001', 'Pegawai1', 'manager', 'islam', ' menikah');
$p2 = new Pegawai('002', 'Pegawai2', 'asmen', 'kristen', 'belum menikah');
$p3 = new Pegawai('003', 'Pegawai3', 'kabag', 'islam', 'menikah');
$p4 = new Pegawai('004', 'Pegawai4', 'staff', 'hindu', 'menikah');
$p5 = new Pegawai('005', 'Pegawai5', 'staff', 'islam', 'belum menikah');

//use member class
$p1->setGajiPokok();
$p1->setTunjab();
$p1->setTunkel();
$p1->setZakat();
$p1->cetak();

$p2->setGajiPokok();
$p2->setTunjab();
$p2->setTunkel();
$p2->setZakat();
$p2->cetak();

$p3->setGajiPokok();
$p3->setTunjab();
$p3->setTunkel();
$p3->setZakat();
$p3->cetak();

$p4->setGajiPokok();
$p4->setTunjab();
$p4->setTunkel();
$p4->setZakat();
$p4->cetak();

$p5->setGajiPokok();
$p5->setTunjab();
$p5->setTunkel();
$p5->setZakat();
$p5->cetak();
