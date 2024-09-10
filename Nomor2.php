<?php

$hariBelanja = date('l'); 

$totalPembelian = 130000;

$diskonSelasa = 0.05;   

$diskonBeliSeratusRibu = 0.07;

$totalDiskon = 0;

if ($hariBelanja == 'Tuesday') {
    $totalDiskon += $diskonSelasa;
}

if ($totalPembelian > 100000) {
    $totalDiskon += $diskonBeliSeratusRibu;
}

$totalPembayaran = $totalPembelian - ($totalPembelian * $totalDiskon);

echo "  Hari ini adalah: <b> $hariBelanja</b>";
echo "<br>";
echo "Total Pembelanjaan: <b>Rp" . number_format($totalPembelian, 0, ',', '.') . "</b>";
// number_format() di PHP digunakan untuk memformat angka dengan cara tertentu, 
// termasuk menambahkan pemisah ribuan, menentukan jumlah desimal, dan mengatur karakter pemisah desimal serta ribuan.
echo "<br>";
echo "Total diskon: " . ($totalDiskon * 100) . "%";
echo "<br>";
echo "Total yang harus dibayar: <b>Rp" . number_format($totalPembayaran, 0, ',', '.') . "</b>";
?>
