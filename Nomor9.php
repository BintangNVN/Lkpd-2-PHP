<?php
function cariKoin($jumlahUang) {
    $koin = [1000, 500, 200, 100, 50];
    $hasil = [];
    // Array $hasil akan digunakan untuk menyimpan koin yang akan digunakan untuk menukar uang.

    foreach ($koin as $nilaiKoin) {
        // Perulangan ini menelusuri setiap nilai koin yang ada di array $koin.
        //  Misalnya, jika $koin = [1000, 500, 200, 100, 50], maka di setiap iterasi,
        //  variabel $nilaiKoin akan berisi nilai dari salah satu koin tersebut
        if ($jumlahUang >= $nilaiKoin) {
            $hasil[] = $nilaiKoin;
            $jumlahUang %= $nilaiKoin; 
        }
    }
    return $hasil;
}

$jumlahUang = 17950;
$koinYangDigunakan = cariKoin($jumlahUang);

echo "Jenis Koin untuk uang Rp. $jumlahUang: ";
echo "<br>";
echo implode(" <li> ", $koinYangDigunakan);
?>
