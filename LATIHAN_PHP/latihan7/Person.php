<?php

class Person
{
    //member1 variabel
    public $nama;
    public $gender;

    //member 2 constructor
    public function __construct($nama, $gender)
    {
        $this->nama = $nama;
        $this->gender = $gender;
    }

    public function cetak()
    {
        echo 'Nama: ' . $this->nama;
        echo '<br>Jenis Kelamin: ' . $this->gender;
    }
}
