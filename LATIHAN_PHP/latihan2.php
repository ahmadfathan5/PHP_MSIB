Dokumen Root PHP saya ada di <?=$_SERVER['DOCUMENT_ROOT']?>

<br> File latihan2.php berada di <?=$_SERVER['SCRIPT_FILENAME']?>

<hr>

<?php

define('LEMBAGA', 'Nurul Fikri Computer');
define('PHI', 3.14);
$jari2 = 15;
$luas = PHI * $jari2 * $jari2
?>

saya sedang belajar pemprograman PHP di <?=LEMBAGA?>
<br>luas lingkaran dengan jari-jari <?=$jari2?> cm = <?=$luas?>

