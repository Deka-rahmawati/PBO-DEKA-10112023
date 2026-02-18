<?php
class Pinjaman {
    public $besarPinjaman;
    public $bunga = 10;
    public $lamaAngsuran;
    public $keterlambatan;

    public function totalPinjaman() {
        return $this->besarPinjaman + ($this->besarPinjaman * $this->bunga / 100);
    }

    public function angsuranPerBulan() {
        return $this->totalPinjaman() / $this->lamaAngsuran;
    }

    public function dendaKeterlambatan() {
        $dendaPerHari = 0.0015 * $this->angsuranPerBulan();
        return $dendaPerHari * $this->keterlambatan;
    }

    public function totalBayar() {
        return $this->angsuranPerBulan() + $this->dendaKeterlambatan();
    }
}

// Ambil data dari form
$besarPinjaman = $_POST['besar_pinjaman'] ?? 0;
$lamaAngsuran = $_POST['lama_angsuran'] ?? 1;
$keterlambatan = $_POST['keterlambatan'] ?? 0;

// Buat objek pinjaman
$pinjaman = new Pinjaman();
$pinjaman->besarPinjaman = $besarPinjaman;
$pinjaman->lamaAngsuran = $lamaAngsuran;
$pinjaman->keterlambatan = $keterlambatan;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Pinjaman</title>
</head>
<body>
    <h2>Hasil Perhitungan Pinjaman</h2>
    <p>Besaran Pinjaman : Rp <?php echo number_format($pinjaman->besarPinjaman ); ?></p>
    <p>Bunga : <?php echo $pinjaman->bunga; ?> %</p>
    <p>Total Pinjaman : Rp <?php echo number_format($pinjaman->totalPinjaman() ); ?></p>
    <p>Lama Angsuran : <?php echo $pinjaman->lamaAngsuran; ?> bulan</p>
    <p>Besar Angsuran : Rp <?php echo number_format($pinjaman->angsuranPerBulan() ); ?></p>
    <br>
    <p>Keterlambatan Angsuran (Hari): <?php echo $pinjaman->keterlambatan; ?></p>
    <p>Denda Keterlambatan : Rp <?php echo number_format($pinjaman->dendaKeterlambatan() ); ?></p>
    <p><strong>Besaran Pembayaran : Rp <?php echo number_format($pinjaman->totalBayar() ); ?></strong></p>
    <br>
    <a href="form_produk3.php">Kembali ke Form</a>
</body>
</html>


