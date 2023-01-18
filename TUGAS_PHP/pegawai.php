<?php

class Pegawai
{
    //memberi variabel
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    public $gator;

    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

    public function setGajiPokok()
    {
        switch (strtoupper($this->jabatan)) {
            case 'MANAGER':$gaji = 15000000;
                break;
            case 'ASMEN':$gaji = 10000000;
                break;
            case 'KABAG':$gaji = 7000000;
                break;
            case 'STAFF':$gaji = 4000000;
                break;
            default:$gaji = 0;
                break;
        }
        $this->gaji = $gaji;
        $this->gator = $this->gaji;
    }

    public function setTunjab()
    {
        $tunjab = $this->gaji * 0.2;
        $this->tunjab = $tunjab;
        $this->gator += $this->tunjab;
    }

    public function setTunkel()
    {
        $tunkel = strtoupper($this->status) == "MENIKAH" ? $this->gaji * 0.1 : 0;
        $this->tunkel = $tunkel;
        $this->gator += $this->tunkel;
    }

    public function setZakat()
    {
        $zakat = strtoupper($this->agama) == "ISLAM" && $this->gator >= 6000000 ? $this->gator * 0.025 : 0;
        $this->zakat = $zakat;
        $this->gaber = $this->gator - $this->zakat;
    }

    public function cetak()
    {

        echo '<br>NIP: ' . $this->nip;
        echo '<br>Nama Pegawai: ' . strtoupper($this->nama);
        echo '<br>Jabatan: ' . strtoupper($this->jabatan);
        echo '<br>Agama: ' . strtoupper($this->agama);
        echo '<br>Status: ' . strtoupper($this->status);
        echo '<br>Gaji Pokok: Rp' . number_format($this->gaji, 0, ',', '.');
        echo '<br>Tunjangan Jabatan: Rp' . number_format($this->tunjab, 0, ',', '.');
        echo '<br>Tunjangan Keluarga: Rp' . number_format($this->tunkel, 0, ',', '.');
        echo '<br>Gaji Kotor: Rp' . number_format($this->gator, 0, ',', '.');
        echo '<br>Zakat: Rp' . number_format($this->zakat, 0, ',', '.');
        echo '<br>Gaji Bersih: Rp' . number_format($this->gaber, 0, ',', '.');
        echo '<hr>';
    }
}
