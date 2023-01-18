<?php

require_once 'musikTekan.php';
require_once 'musikTiup.php';

class Pianika implements MusikTekan, MusikTiup
{
    public function tiup()
    {
        echo '<br>Pianika = fffuuuuuuuuuh';
    }

    public function tekan()
    {
        echo '<br>Pianika Next = net not net not';
    }
}
