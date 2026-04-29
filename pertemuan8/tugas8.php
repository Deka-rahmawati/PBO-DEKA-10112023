<?php

class Karyawan {
    public $nama, $golongan, $jamLembur;

    public function __construct($nama, $golongan, $jamLembur){
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
    }

    public function getGajiPokok(){
        switch($this->golongan){
            case "IIb": return 2100000;
            case "IIIc": return 2600000;
            case "IVb": return 2900000;
            default: return 0;
        }
    }

    public function totalGaji(){
        return $this->getGajiPokok() + ($this->jamLembur * 15000);
    }
}

// DATA AWAL
$data = [
    new Karyawan("Winny","IIb",30),
    new Karyawan("Stendy","IIIc",32),
    new Karyawan("Alfred","IVb",30)
];

// FUNCTION TAMPILKAN DATA
function tampilData($data){
    echo "===== DATA GAJI KARYAWAN =====" . PHP_EOL;
    echo "No | Nama   | Golongan | Jam Lembur | Total Gaji" . PHP_EOL;

    $no = 1;
    foreach($data as $d){
        echo $no . " | "
            . $d->nama . " | "
            . $d->golongan . " | "
            . $d->jamLembur . " | Rp"
            . number_format($d->totalGaji(),0,",",".")
            . PHP_EOL;
        $no++;
    }
}

// MENU LOOP
while(true){

    echo PHP_EOL;
    echo "===== MENU GAJI KARYAWAN =====" . PHP_EOL;
    echo "1. Tampilkan Data" . PHP_EOL;
    echo "2. Tambah Data" . PHP_EOL;
    echo "3. Update Data" . PHP_EOL;
    echo "4. Hapus Data" . PHP_EOL;
    echo "5. Keluar" . PHP_EOL;

    echo "Pilih menu: ";
    $pilih = trim(fgets(STDIN));

    switch($pilih){

        case 1:
            tampilData($data);
            break;

        case 2:
            echo "Nama: ";
            $nama = trim(fgets(STDIN));

            echo "Golongan: ";
            $gol = trim(fgets(STDIN));

            echo "Jam Lembur: ";
            $jam = trim(fgets(STDIN));

            $data[] = new Karyawan($nama,$gol,$jam);
            echo "Data berhasil ditambah!" . PHP_EOL;
            break;

        case 3:
            tampilData($data);
            echo "Pilih nomor yang mau diupdate: ";
            $i = trim(fgets(STDIN)) - 1;

            echo "Nama baru: ";
            $data[$i]->nama = trim(fgets(STDIN));

            echo "Golongan baru: ";
            $data[$i]->golongan = trim(fgets(STDIN));

            echo "Jam lembur baru: ";
            $data[$i]->jamLembur = trim(fgets(STDIN));

            echo "Data berhasil diupdate!" . PHP_EOL;
            break;

        case 4:
            tampilData($data);
            echo "Pilih nomor yang mau dihapus: ";
            $i = trim(fgets(STDIN)) - 1;

            unset($data[$i]);
            $data = array_values($data);

            echo "Data berhasil dihapus!" . PHP_EOL;
            break;

        case 5:
            echo "Keluar program..." . PHP_EOL;
            exit;

        default:
            echo "Pilihan tidak valid!" . PHP_EOL;
    }
}

?>