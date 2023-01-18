<?php

require_once 'Bentuk.php';

class Segitiga extends Bentuk
{
    public $nama = "Segitiga Sama Kaki";

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function luasBidang()
    {
        $luas = 1 / 2 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = sqrt(pow($this->tinggi, 2) + pow((1 / 2 * $this->alas), 2));
        return number_format($keliling, 1, ',', '.');
    }

    public function keterangan()
    {
        echo '<ul>
                    <li> Alas = ' . $this->alas . '</li>
                    <li> Tinggi = ' . $this->tinggi . '</li>
                </ul>';
    }

    public function cetak()
    {
        echo '<td>' . $this->nama . '</td>';
        echo '<td>
                <ul>
                    <li> Alas = ' . $this->alas . '</li>
                    <li> Tinggi = ' . $this->tinggi . '</li>
                </ul>
            </td>';
        echo '<td>' . $this->luasBidang() . '</td>';
        echo '<td>' . $this->kelilingBidang() . '</td>';
    }
}
