<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$gabungan = array_merge($bil1, $bil2);
// array_merge untuk menggabungkan array $bil1 dan $bil2
$gabungan = array_unique($gabungan);
// array_unique untuk menghapus elemen duplikat pada array
rsort($gabungan);
// rsort digunakan untuk mengurutkan elemet array secara menurun

echo "Hasil : " . implode(", ", $gabungan);
// implode digunakan untuk menggabungkan elemen-elemen dari sebuah array menjadi sebuah string