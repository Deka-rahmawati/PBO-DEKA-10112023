<?php

// 1. Definisi Class dan Properties
class BangunRuang {
    public $jenis;
    public $sisi;
    public $jariJari;
    public $tinggi;

    // 2. Function/Method untuk menghitung volume
    public function hitungVolume() {
        $phi = 3.14;
        $volume = 0;

        // 4. Percabangan (switch case)
        switch ($this->jenis) {
            case "Bola":
                // Rumus: 4/3 * phi * r^3
                $volume = (4/3) * $phi * pow($this->jariJari, 3);
                break;
            case "Kerucut":
                // Rumus: 1/3 * phi * r^2 * t
                $volume = (1/3) * $phi * pow($this->jariJari, 2) * $this->tinggi;
                break;
            case "Limas Segi Empat":
                // Rumus: 1/3 * luas alas (sisi*sisi) * t
                $volume = (1/3) * pow($this->sisi, 2) * $this->tinggi;
                break;
            case "Kubus":
                // Rumus: s^3
                $volume = pow($this->sisi, 3);
                break;
            case "Tabung":
                // Rumus: phi * r^2 * t
                $volume = $phi * pow($this->jariJari, 2) * $this->tinggi;
                break;
        }
        return $volume;
    }
}

// 5. Array data 
$daftarBangun = [
    ["jenis" => "Bola", "sisi" => 0, "jari" => 7, "tinggi" => 0],
    ["jenis" => "Kerucut", "sisi" => 0, "jari" => 14, "tinggi" => 10],
    ["jenis" => "Limas Segi Empat", "sisi" => 8, "jari" => 0, "tinggi" => 24],
    ["jenis" => "Kubus", "sisi" => 30, "jari" => 0, "tinggi" => 0],
    ["jenis" => "Tabung", "sisi" => 0, "jari" => 7, "tinggi" => 10],
];

// 6. Tabel HTML
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 80%;'>";
echo "<tr style='background-color: blue; color: white;'>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
      </tr>";

// 3. Perulangan (foreach) dan Object
foreach ($daftarBangun as $data) {
    $bangun = new BangunRuang(); // Membuat Object baru
    $bangun->jenis = $data['jenis'];
    $bangun->sisi = $data['sisi'];
    $bangun->jariJari = $data['jari'];
    $bangun->tinggi = $data['tinggi'];

    echo "<tr>";
    echo "<td>" . $bangun->jenis . "</td>";
    echo "<td align='center'>" . $bangun->sisi . "</td>";
    echo "<td align='center'>" . $bangun->jariJari . "</td>";
    echo "<td align='center'>" . $bangun->tinggi . "</td>";
    echo "<td>" . $bangun->hitungVolume() . "</td>";
    echo "</tr>";
}

echo "</table>";
?>