<?php

class belanja {
    public $namaPembeli="miftah"; //ada 6 properti
    public $namaBarang="sampo";
    public $hargaBarang=9000;
    public $jumlahBarang=2;
    public $totalBayar;
    public $diskon=0.1;
    public static $pajak=0.02;
    public function totalharga() {$subtotal = $this->hargaBarang * $this->jumlahBarang;
    return $subtotal;  }
       
    }

$belanja1 = new belanja();
//var_dump($belanja);

echo"subtotal: Rp" . $belanja1->totalharga() . "\n";
?>
