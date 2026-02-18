<!DOCTYPE html>
<html>
<head>
    <title>Form Pinjaman Pegadaian Syariah</title>
</head>
<body>
    <h2>TOKO PEGADAIAN SYARIAH</h2>
    <p>Jl Keadilan No 16</p>
    <p>Telp. 72353459</p>
    <form action="proses_produk3.php" method="post">
        Besaran Pinjaman (Rp): <input type="number" name="besar_pinjaman" required><br><br>
        Lama Angsuran (bulan): <input type="number" name="lama_angsuran" required><br><br>
        Keterlambatan Angsuran (hari): <input type="number" name="keterlambatan" value="0" required><br><br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
