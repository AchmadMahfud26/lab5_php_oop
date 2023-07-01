<?php
/**
 * Program sederhana pendefinisian class dan pemanggilan class.
**/

class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }

    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    public function tampilWarna()
    {
        echo "Warna mobil: " . $this->warna;
    }
}

// Membuat objek mobil
$a = new Mobil();
$b = new Mobil();

// Memanggil objek mobil
echo "<b>Mobil Pertama</b><br/>";
$a->tampilWarna();
echo "<br/><b>Mobil Pertama Ganti warna</b><br/>";
$a->gantiWarna("Merah");
$a->tampilWarna();

// Memanggil objek
echo "<br/><b>Mobil kedua</b><br/>";
$b->gantiWarna("Hijau");
$b->tampilWarna();

?>