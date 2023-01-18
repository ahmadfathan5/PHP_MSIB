<?php

require_once 'Kucing.php';
require_once 'Anjing.php';
require_once 'Kambing.php';

$kuc = new Kucing();
$kam = new Kambing();
$anj = new Anjing();

$suara = [$kuc, $kam, $anj];

foreach ($suara as $sh) { //sh = suara hewan
    echo '<br>' . $sh->bersuara();
}
;
