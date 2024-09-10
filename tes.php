<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Jawaban Siswa</title>
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
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h2 {
            margin-top: 20px;
            color: #333;
        }
        .result {
            background-color: #e7f4e4;
            padding: 10px;
            border: 1px solid #c6e0c3;
            border-radius: 5px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cek Jawaban Siswa</h1>
        <form action="cek_jawaban.php" method="POST">
            <label for="namaSiswa">Nama Siswa:</label>
            <input type="text" id="namaSiswa" name="namaSiswa" required>

            <label for="jawabanSiswa">Masukkan Jawaban Siswa (Pisahkan dengan koma):</label>
            <input type="text" id="jawabanSiswa" name="jawabanSiswa" required>

            <input type="submit" value="Cek Jawaban">
        </form>

        <h2>Hasil:</h2>
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
    </div>
</body>
</html>
