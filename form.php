<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
</head>
<body>

<h2>Form Input Data Nilai PBO</h2>

<form method="POST" action="proses.php">

    Nama : <br>
    <input type="text" name="nama" required>
    <br><br>

    Kelas : <br>
    <input type="text" name="kelas" required>
    <br><br>

    Mata Kuliah : <br>
    <input type="text" name="matkul" required>
    <br><br>

    Nilai : <br>
    <input type="number" name="nilai" required>
    <br><br>

    <button type="submit" name="submit">Proses</button>

</form>

</body>
</html>