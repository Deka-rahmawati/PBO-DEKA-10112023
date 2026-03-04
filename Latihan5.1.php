<?php
// Pastikan submit sudah ditekan
if (isset($_POST['submit'])) {
    
    // Ambil nilai dari input form
    $nilai = $_POST['nilai']; 

    // 1. Cek batas atas dulu
    if ($nilai > 100) {
        echo "maaf rentang nilai harus 1-100";
    } 
    // 2. Cek kelulusan (hanya untuk angka 60 - 100)
    elseif ($nilai >= 60) {
        echo "lulus";
    } 
    // 3. Cek tidak lulus (di bawah 60)
    else {
        echo "tidak lulus";
    }
}
?>