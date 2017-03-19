<?php
require_once 'DebitMuamalat.php';
require_once 'Pembeli.php';

try {
  $paymentMethod = new DebitMuamalat("12345");
  $paymentMethod->deposit(300000);
  $udin = new Pembeli ("Udin", $paymentMethod);
  $udin->beli("Skateboard", 100000);
  echo "Saldo Terakhir Rp".number_format($paymentMethod->cekSaldo())."\n";
  echo $paymentMethod->cekNamaPembayaran();
} catch (Exception $e) {
  echo $e->getMessage()."\n";
}

?>
