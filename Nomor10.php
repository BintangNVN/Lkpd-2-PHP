   <?php
    
    function cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar) {
        
        $jumlahBenar = 0;
        $jumlahSalah = 0;

    
        foreach ($jawabanSiswa as $index => $jawaban) {
            
            if ($jawaban === $jawabanBenar[$index]) {
                $jumlahBenar++;
                // jika jawaban benar maka akan ditambah 1
            } else {
                $jumlahSalah++;
                // jika jawaban salah maka akan ditambah 1
            }
        }

        
        echo "Nama: $namaSiswa";
        echo "<br>";
        echo "Jumlah Jawaban Benar: $jumlahBenar";
        echo "<br>";
        echo "Jumlah Jawaban Salah: $jumlahSalah";
    }


    $jawabanBenar = ['A', 'D', 'C', 'C', 'C', 'B', 'A', 'E', 'B', 'A'];


    $namaSiswa = "Bintang";
    $jawabanSiswa = ['A', 'B', 'B', 'A', 'C', 'B', 'A', 'C', 'B', 'A'];

    cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
    ?>
