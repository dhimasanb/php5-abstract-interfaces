<?php
require_once 'Pembeli-DI.php';
// melakukan pembelian dengan muamalat
try {
  $muamalatKu = new Muamalat('12345');
  $muamalatKu->deposit('5000000');
  $dhimas = new Pembeli('Dhimas', $muamalatKu);
  $dhimas->beli("CD Iwan Fals - Manusia Setengah Dewa", 200000);
  echo "Saldo Terakhir Rp".$muamalatKu->cekSaldo()."\n";
} catch (Exception $e) {
  echo $e->getMessage()."\n";
}
?>
