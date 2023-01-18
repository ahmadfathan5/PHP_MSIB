<?php

require_once 'Bentuk.php';

class Lingkaran extends Bentuk
{
    public $nama = "Lingkaran";

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function luasBidang()
    {
        $luas = pi() * ($this->jari ** 2);
        return number_format($luas, 1, ',', '.');
    }

    public function kelilingBidang()
    {
        $keliling = pi() * ($this->jari * 2);
        return number_format($keliling, 1, ',', '.');
    }

    public function keterangan()
    {
        echo '<ul>
                    <li> jari-jari = ' . $this->jari . '</li>
                </ul>';
    }

    public function cetak()
    {
        echo '<td>' . $this->nama . '</td>';
        echo '<td>
                <ul>
                    <li> jari-jari = ' . $this->jari . '</li>
                </ul>
            </td>';
        echo '<td>' . $this->luasBidang() . '</td>';
        echo '<td>' . $this->kelilingBidang() . '</td>';
    }
}
