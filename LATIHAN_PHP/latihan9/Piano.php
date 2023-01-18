<?php

require_once 'musikTekan.php';

class Piano implements MusikTekan
{
    public function tekan()
    {
        echo '<br>Piano = nut nut nut';
    }
}
