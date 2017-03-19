<?php
include 'Muamalat.php';
class Pembeli {
  private $nama; // menyimpan nama pembeli
  private $muamalat; // menyimpan object kartu muamalat

  public function __construct($nama = "Seseorang", Muamalat $muamalat) { // membangun object pembeli
    $this->muamalat = $muamalat;
    $this->nama = $nama;
  }

  public function beli($nama = "Barang", $harga = 0) { // melakukan pembelian barang
    $this->muamalat->kredit($harga);
    echo "Berhasil melakukan pembelian $nama seharga Rp$harga.\n";
    echo "Terima Kasih $this->nama :)\n";
  }
}

?>
