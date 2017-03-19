<?php
include 'Tombol.php';
class TombolNuklir extends Tombol {
  public function tekan() {
    echo "Bom Nuklir telah diaktifkan\n";
    sleep(3);
    echo "Duaarr!!!\n";
  }
}

?>
