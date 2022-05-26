<?php

class mobil{
  private $warna;
  private $merk;
  private $harga;

  public function __construct()
  {
    $this->warna = "Biru";
    $this->merk = "BMW";
    $this->harga = "10000000";
  }

  public function gantiwarna ($warnaBaru){
    $this->warna = $warnaBaru;
  }

  public function tampilwarna(){
    echo "Warna Mobilnya : " . $this->warna;
  }
}

// Membuat Objek Mobil
$a = new Mobil();
$b = new Mobil();

// Memanggil Objek;
echo "<b> Mobil Pertama </b><br>";
$a->tampilwarna();


echo "<br> Mobil Pertama Ganti warna<br>";
$a->gantiwarna("Merah");
$a->tampilwarna();
// Mengganti Objek
echo "<br><b>Mobil Kedua</b><br>";
$b->gantiwarna("Hijau");
$b->tampilwarna();

?>