<?php

function potongKalimat($kalimat) {
    // Cek jika panjang kalimat lebih dari 50 karakter
    if (strlen($kalimat) > 50) {
        // Fungsi strlen() digunakan untuk menghitung jumlah karakter dalam string $kalimat.
        // jika lebih dari 50 karakter akan memblok dan akan menjalankan if
        return substr($kalimat, 0, 50) . "...";
        // Fungsi substr() digunakan untuk mengambil bagian dari string. Dalam hal ini, ia mengambil 50 karakter pertama dari kalimat (mulai dari indeks 0 hingga 49).
    } else {
        return $kalimat;
    }
}


$kalimatAwal = "Lorem ";
$kalimatDiproses = potongKalimat($kalimatAwal);

echo "Kalimat awal:  $kalimatAwal";
echo "<br> <br>";
echo "Kalimat setelah diproses: $kalimatDiproses";
?>
