
    <?php

    // preg_replace() digunakan untuk mencari dan mengganti karakter dalam string berdasarkan pola yang diberikan.
    //  Pola /[\w\s]/ ini akan mencari huruf, angka, dan spasi dalam teks.

    $teks = "Selamat Ulang Tahun yang ke-17!";
    echo "<b>" . "Teks : " . $teks . "</b>";
    echo "<br>";
    echo "<br>";

    $simbol = preg_replace('/[\w\s]/', '', $teks);
    // [\w\s] = mencari karakter huruf, angka, dan spasi
    if ($simbol) {
        $arSimbol = str_split($simbol, 1);
        // str_split digunakan untuk membagi string menjadi array berdasarkan karakter tertentu atau panjang substring yang ditentukan. 
        //parameter 1 untuk menunjukkan bahwa setiap array bersifat individu
        echo "Karakter yang terdapat pada kalimat: " . implode(', ', $arSimbol);
        //untuk menggabungkan elemen dari array $arSimbol menjadi string, setiap karakter dipisahkan dengan koma dan spasi
    } else {
        echo "Teks tidak mengandung simbol.";
    }

    ?>
