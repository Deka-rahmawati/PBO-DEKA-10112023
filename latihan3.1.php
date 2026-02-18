<?php
class Kendaraan
{
    var $jumlahRoda; 
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan; 
    var $hargaBekas;

    function statusHarga()
    {
        if ($this->harga > 50000000)
            $status = 'Mahal';
        else
            $status = 'Murah';

        return $status;
    }

   
    function setHargaBekas($tahunSekarang)
    {
        $umur = $tahunSekarang - $this->tahunPembuatan;
        $penyusutan = 0.1 * $this->harga * $umur;
        $this->hargaBekas = $this->harga - $penyusutan;

        if ($this->hargaBekas < 0) {
            $this->hargaBekas = 0;
        }
    }
}


$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->jumlahRoda = 4;
$objekKendaraan1->warna = "Hitam";
$objekKendaraan1->bahanBakar = "Pertamax";
$objekKendaraan1->harga = 100000000;
$objekKendaraan1->merek = "BMW";
$objekKendaraan1->tahunPembuatan = 2022;

$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->jumlahRoda = 2;
$objekKendaraan2->warna = "biru";
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->harga = 40000000;
$objekKendaraan2->merek = "Yamaha FIlano";
$objekKendaraan2->tahunPembuatan = 2024;

$objekKendaraan1->setHargaBekas(2026);
$objekKendaraan2->setHargaBekas(2026);


echo "Merek: " . $objekKendaraan1->merek . "<br>";
echo "Jumlah Roda: " . $objekKendaraan1->jumlahRoda . "<br>";
echo "Warna: " . $objekKendaraan1->warna . "<br>";
echo "Bahan Bakar: " . $objekKendaraan1->bahanBakar . "<br>";
echo "Tahun Pembuatan: " . $objekKendaraan1->tahunPembuatan . "<br>";
echo "Harga Baru: " . $objekKendaraan1->harga . "<br>";
echo "Harga Bekas: " . $objekKendaraan1->hargaBekas . "<br>";
echo "Status Harga: " . $objekKendaraan1->statusHarga() . "<br>";

echo "<br>";

echo "Merek: " . $objekKendaraan2->merek . "<br>";
echo "Jumlah Roda: " . $objekKendaraan2->jumlahRoda . "<br>";
echo "Warna: " . $objekKendaraan2->warna . "<br>";
echo "Bahan Bakar: " . $objekKendaraan2->bahanBakar . "<br>";
echo "Tahun Pembuatan: " . $objekKendaraan2->tahunPembuatan . "<br>";
echo "Harga Baru: " . $objekKendaraan2->harga . "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaBekas . "<br>";
echo "Status Harga: " . $objekKendaraan2->statusHarga() . "<br>";



 ?>
