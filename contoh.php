<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Teks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
            padding: 0px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Analisis Teks</h1>
    <form method="POST">
        <textarea name="teks" placeholder="Masukkan teks di sini..."></textarea>
        <button type="submit">Proses Teks</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $teks = $_POST['teks'];
        echo "<b>Teks : " . htmlspecialchars($teks) . "</b>";
        echo "<br><br>";

        $simbol = preg_replace('/[\w\s]/', '', $teks);
        if ($simbol) {
            $arSimbol = str_split($simbol, 1);
            echo "<div class='result'>Karakter yang terdapat pada kalimat: " . implode(', ', $arSimbol) . "</div>";
        } else {
            echo "<div class='result'>Teks tidak mengandung simbol.</div>";
        }
    }
    ?>
</div>

</body>
</html>
