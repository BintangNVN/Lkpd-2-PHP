<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Cek Jawaban Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        .result {
            background-color: #e7f4e4;
            padding: 10px;
            border: 1px solid #c6e0c3;
            border-radius: 5px;
            color: #333;
            margin-top: 20px;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        .back-link:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Cek Jawaban</h1>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                function cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar) {
                    $jumlahBenar = 0;
                    $jumlahSalah = 0;

                    foreach ($jawabanSiswa as $index => $jawaban) {
                        if ($jawaban === $jawabanBenar[$index]) {
                            $jumlahBenar++;
                        } else {
                            $jumlahSalah++;
                        }
                    }

                    echo "Nama: $namaSiswa<br>";
                    echo "Jumlah Jawaban Benar: $jumlahBenar<br>";
                    echo "Jumlah Jawaban Salah: $jumlahSalah<br>";
                }

                $jawabanBenar = ['A', 'D', 'C', 'C', 'C', 'B', 'A', 'E', 'B', 'A'];
                
                $namaSiswa = $_POST['namaSiswa'];
                $jawabanSiswa = explode(',', str_replace(' ', '', $_POST['jawabanSiswa']));

                cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
            }
            ?>
        </div>
        <a href="tes.php" class="back-link">Kembali</a>
    </div>
</body>
</html>
