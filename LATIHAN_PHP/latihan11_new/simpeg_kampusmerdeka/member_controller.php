<?php
session_start();
include_once "koneksi.php";
include_once "models/Member.php";

//step 1
$username = $_POST['username'];
$password = $_POST['password'];

//step 2 simpe ke array
$data = [
    $username, // ? 1
    $password, // ? 2
];

//step 3 proses otentikasi user
$model = new Member();
$rs = $model->cekLogin($data);
if (!empty($rs)) {
    $_SESSION['MEMBER'] = $rs;
    //diarahkan ke suatu halaman
    header('Location:index.php?hal=pegawai');
} else {
    echo '<script> alert("user/password anda salah");history.back(); </script>';
}
;
