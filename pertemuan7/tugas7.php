<?php

// CLASS INDUK
class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja){
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji(){
        return $this->gaji;
    }

    public function getInfo(){
        return "Nama: $this->nama | Gaji: Rp " . number_format($this->hitungGaji(),0,",",".");
    }
}


// 1. CLASS PROGRAMMER
class Programmer extends Employee {

    public function hitungGaji(){
        if($this->lamaKerja < 1){
            return $this->gaji;
        } elseif($this->lamaKerja <= 10){
            $bonus = 0.01 * $this->lamaKerja * $this->gaji;
        } else {
            $bonus = 0.02 * $this->lamaKerja * $this->gaji;
        }

        return $this->gaji + $bonus;
    }
}

// 2. CLASS DIREKTUR
class Direktur extends Employee {

    public function hitungGaji(){
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;

        return $this->gaji + $bonus + $tunjangan;
    }
}



// 3. CLASS PEGAWAI MINGGUAN
class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $target;
    public $terjual;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $target, $terjual){
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->target = $target;
        $this->terjual = $terjual;
    }

    public function hitungGaji(){
        $persen = ($this->terjual / $this->target) * 100;

        if($persen > 70){
            $bonus = 0.10 * $this->hargaBarang * $this->terjual;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->terjual;
        }

        return $this->gaji + $bonus;
    }
}



// TEST OBJECT

$p = new Programmer("Rahma", 5000000, 5);
$d = new Direktur("Deka", 10000000, 12);
$m = new PegawaiMingguan("Liaa", 2000000, 2, 50000, 100, 80);

echo $p->getInfo();
echo "<br>";
echo $d->getInfo();
echo "<br>";
echo $m->getInfo();

?>