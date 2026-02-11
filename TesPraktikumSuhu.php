<?php
class KalkulatorSuhu {
    public $suhu; // dalam Celsius

    // Constructor
    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    // Method Celsius ke Fahrenheit
    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    // Method Celsius ke Kelvin
    public function cToK() {
        return $this->suhu + 273.15;
    }
}

// Membuat objek
$kalkulator = new KalkulatorSuhu(30);

// Output di browser
echo "<pre>";
echo "================ KALKULATOR SUHU ================\n";
echo "Satuan   : Celsius (°C)\n";
echo "--------------------------------------------------\n";
echo "SUHU (C)   : " . $kalkulator->suhu . "\n";
echo "FAHRENHEIT : " . $kalkulator->cToF() . "\n";
echo "KELVIN     : " . $kalkulator->cToK() . "\n";
echo "==================================================\n";
echo "</pre>";
?>
