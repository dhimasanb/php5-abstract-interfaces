<?php
require_once 'PaymentMethod.php';
class DebitMuamalat extends PaymentMethod {
  private $saldo; //mencatat saldo terakhir

  public function __construct($pin) {
    // cek PIN database
    if ($pin == '12345') {
      echo "Berhasil mengaktifkan Kartu Bank Muamalat\n";
    } else {
      $pesan = "Maaf PIN salah :(";
      throw new Exception ($pesan);
    }
  }

  private function catatTransaksi($jenis, $jumlah) {
    echo "Mencatat transaksi $jenis sejumlah $jumlah ke Buku Tabungan.\n";
  }

  public function kredit($jumlah) { // mengurangi jumlah saldo
    $this->catatTransaksi('transfer keluar', $jumlah);
    $this->saldo -= $jumlah;
  }

  public function deposit($jumlah) { // menambah jumlah saldo
    $this->catatTransaksi('deposit dana', $jumlah);
    $this->saldo += $jumlah;
  }

  public function cekSaldo() { // mengecek jumlah saldo terkini
    return $this->saldo;
  }
}


?>
