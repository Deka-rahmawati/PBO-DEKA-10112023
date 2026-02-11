<?php

class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $diskon;
    public $uangDibayar;

    public static $pajak = 0.02; // 2%

    // Hitung subtotal
    public function subtotal() {
        return $this->hargaBarang * $this->jumlahBarang;
    }

    // Hitung total akhir (subtotal - diskon + pajak)
    public function totalAkhir() {
        $subtotal = $this->subtotal();
        $diskonRp = $subtotal * $this->diskon;
        $setelahDiskon = $subtotal - $diskonRp;
        $pajakRp = $setelahDiskon * self::$pajak;

        return $setelahDiskon + $pajakRp;
    }

    // Hitung pajak
    public function hitungPajak() {
        $subtotal = $this->subtotal();
        $diskonRp = $subtotal * $this->diskon;
        $setelahDiskon = $subtotal - $diskonRp;
        return $setelahDiskon * self::$pajak;
    }

    // Hitung kembalian
    public function hitungKembalian() {
        return $this->uangDibayar - $this->totalAkhir();
    }
}

// ================= DATA 1 =================
$belanja1 = new Belanja();
$belanja1->namaPembeli = "Deka";
$belanja1->namaBarang = "Kebab";
$belanja1->hargaBarang = 15000;
$belanja1->jumlahBarang = 2;
$belanja1->diskon = 0.1; // 10%
$belanja1->uangDibayar = 30000;

// ================= DATA 2 =================
$belanja2 = new Belanja();
$belanja2->namaPembeli = "Liaa";
$belanja2->namaBarang = "Telur";
$belanja2->hargaBarang = 30000;
$belanja2->jumlahBarang = 3;
$belanja2->diskon = 0.2; // 20%
$belanja2->uangDibayar = 80000;

// ================= OUTPUT =================
echo "<pre>";
echo "========== WARUNG MADURA MODERN ==========\n";
echo "Nama Pembeli : " . $belanja1->namaPembeli . "\n";
echo "Nama Barang  : " . $belanja1->namaBarang . "\n";
echo "Subtotal     : Rp " . $belanja1->subtotal() . "\n";
echo "Diskon       : Rp " . ($belanja1->subtotal() * $belanja1->diskon) . "\n";
echo "Pajak 2%     : Rp " . $belanja1->hitungPajak() . "\n";
echo "Total Akhir  : Rp " . $belanja1->totalAkhir() . "\n";
echo "Uang Dibayar : Rp " . $belanja1->uangDibayar . "\n";
echo "Kembalian    : Rp " . $belanja1->hitungKembalian() . "\n\n";

echo "========== WARUNG MADURA MODERN ==========\n";
echo "Nama Pembeli : " . $belanja2->namaPembeli . "\n";
echo "Nama Barang  : " . $belanja2->namaBarang . "\n";
echo "Subtotal     : Rp " . $belanja2->subtotal() . "\n";
echo "Diskon       : Rp " . ($belanja2->subtotal() * $belanja2->diskon) . "\n";
echo "Pajak 2%     : Rp " . $belanja2->hitungPajak() . "\n";
echo "Total Akhir  : Rp " . $belanja2->totalAkhir() . "\n";
echo "Uang Dibayar : Rp " . $belanja2->uangDibayar . "\n";
echo "Kembalian    : Rp " . $belanja2->hitungKembalian() . "\n";
echo "</pre>";

?>
