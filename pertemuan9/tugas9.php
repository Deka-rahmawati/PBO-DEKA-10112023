<?php

// CLASS INDUK
class Tabungan {
    protected $nama;
    protected $saldo;

    // constructor
    public function __construct($nama, $saldoAwal) {
        $this->nama = $nama;
        $this->saldo = $saldoAwal;
    }

    // getter (encapsulation)
    public function getSaldo() {
        return $this->saldo;
    }

    public function getNama() {
        return $this->nama;
    }

    // setor tunai
    public function setor($jumlah) {
        $this->saldo += $jumlah;
        echo "Setor berhasil Rp $jumlah\n";
    }

    // tarik tunai
    public function tarik($jumlah) {
        if ($jumlah > $this->saldo) {
            echo "Saldo tidak cukup!\n";
        } else {
            $this->saldo -= $jumlah;
            echo "Tarik berhasil Rp $jumlah\n";
        }
    }

    public function tampilSaldo() {
        echo "Saldo {$this->nama}: Rp {$this->saldo}\n";
    }
}


// CLASS ANAK (turunan)
class Siswa extends Tabungan {
    // hanya akses saldo miliknya sendiri (encapsulation tetap terjaga)
}


// ARRAY SISWA
$siswa = [
    new Siswa("Siswa 1", 100000),
    new Siswa("Siswa 2", 150000),
    new Siswa("Siswa 3", 200000)
];

// tampil saldo awal
echo "=== SALDO AWAL ===\n";
foreach ($siswa as $s) {
    $s->tampilSaldo();
}


// INPUT DARI CMD (fgets & fopen)
$stdin = fopen("php://stdin", "r");

echo "\nPilih Siswa (1-3): ";
$pilih = trim(fgets($stdin));

if ($pilih < 1 || $pilih > 3) {
    echo "Pilihan tidak valid!\n";
    exit;
}

$s = $siswa[$pilih - 1];

echo "1. Setor\n2. Tarik\nPilih transaksi: ";
$aksi = trim(fgets($stdin));

echo "Masukkan jumlah: ";
$jumlah = trim(fgets($stdin));

// percabangan
if ($aksi == 1) {
    $s->setor($jumlah);
} elseif ($aksi == 2) {
    $s->tarik($jumlah);
} else {
    echo "Pilihan tidak valid!\n";
}

// tampil saldo akhir
echo "\n=== SALDO AKHIR ===\n";
foreach ($siswa as $s) {
    $s->tampilSaldo();
}

fclose($stdin);
?>