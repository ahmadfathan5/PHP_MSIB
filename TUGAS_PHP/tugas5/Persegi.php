<?php

require_once 'Bentuk.php';

class Persegi extends Bentuk
{
    public $nama = "Persegi";

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function luasBidang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }

    public function keterangan()
    {
        echo '<ul>
                    <li> Panjang = ' . $this->panjang . '</li>
                    <li> Lebar = ' . $this->lebar . '</li>
                </ul>';
    }

    public function cetak()
    {
        echo '<td>' . $this->nama . '</td>';
        echo '<td>
                <ul>
                    <li> Panjang = ' . $this->panjang . '</li>
                    <li> Lebar = ' . $this->lebar . '</li>
                </ul>
            </td>';
        echo '<td>' . $this->luasBidang() . '</td>';
        echo '<td>' . $this->kelilingBidang() . '</td>';
    }
}
