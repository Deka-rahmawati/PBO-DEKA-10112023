<?php

class Mahasiswa {

    public $nama;
    public $kelas;
    public $mataKuliah;
    public $nilai;

    public function __construct($nama, $kelas, $mataKuliah, $nilai) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }

    public function getStatus() {
        if ($this->nilai >= 60) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }

    public function tampilData() {
        echo "<h2>Hasil Data Mahasiswa</h2>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
        echo "Mata Kuliah : " . $this->mataKuliah . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "<b>" . $this->getStatus() . "</b><br>";
        echo "<hr>";
    }
}

if (isset($_POST['submit'])) {

    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $matkul = $_POST['matkul'];
    $nilai  = $_POST['nilai'];

    // Disimpan dalam array object
    $dataMahasiswa = [];
    $dataMahasiswa[] = new Mahasiswa($nama, $kelas, $matkul, $nilai);

    foreach ($dataMahasiswa as $mhs) {
        $mhs->tampilData();
    }

    echo "<a href='form.php'>Kembali ke Form</a>";
}
?>