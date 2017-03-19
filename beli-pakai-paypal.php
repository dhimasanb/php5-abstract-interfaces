<?php
require_once 'Paypal.php';
require_once 'Pembeli.php';

try {
  $paymentMethod = new Paypal("udinganteng@gmail.com", "12345");
  $paymentMethod->deposit(500000);
  $udin = new Pembeli ("Udin", $paymentMethod);
  $udin->beli("Kalender", 50000);
  echo "Saldo Terakhir Rp".number_format($paymentMethod->cekSaldo())."\n";
  echo $paymentMethod->cekNamaPembayaran();
} catch (Exception $e) {
  echo $e->getMessage()."\n";
}

?>
