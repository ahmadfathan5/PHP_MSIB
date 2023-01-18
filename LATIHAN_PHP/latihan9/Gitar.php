<?php

require_once 'musikPetik.php';

class Gitar implements MusikPetik
{
    public function petik()
    {
        echo '<br>gitar = jreng jreng';
    }
}
