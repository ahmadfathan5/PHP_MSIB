<?php

include_once 'koneksi.php';
include_once 'header.php';
include_once 'navigation.php';
//tangkap request menu di url
$hal = $_REQUEST['hal'];
// jika ada reques dari menu di url tampilkan hal sesuai request
if (!empty($hal)) {
    include_once $hal . '.php';
} else {
    include_once 'home.php';
}
// include_once 'home.php';
// include_once 'about.php';
// include_once 'pegawai.php';
// include_once 'kontak.php';
include_once 'footer.php';
