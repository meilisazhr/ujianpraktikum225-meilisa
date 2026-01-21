<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Kalkulator</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #2c2c54);
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 1100px;         
            max-width: 90%;
            margin: 100px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        h2 {
            text-align: center;
            color: #2c2c54; 
            margin-bottom: 25px;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }


        button {
            width: 100%;
            padding: 12px;
            margin-top: 18px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #b89b5e, #8c7a44);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: linear-gradient(135deg, #8c7a44, #b89b5e);
        }

        .hasil {
            margin-top: 22px;
            padding: 14px;
            text-align: center;
            background: #f4f4f4;
            border-radius: 10px;
            font-weight: bold;
            color: #2c2c54;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator</h2>

    <form method="post">
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        <input type="number" name="angka2" placeholder="Angka kedua" required>

        <select name="operator" required>
            <option value="">- Pilih Operasi -</option>
            <option value="tambah">Penambahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $op = $_POST['operator'];

        echo '<div class="hasil">';

    if ($op == 'tambah') {
        echo "Hasil: " . ($angka1 + $angka2);
    } elseif ($op == 'kurang') {
        echo "Hasil: " . ($angka1 - $angka2);
    } elseif ($op == 'kali') {

        echo "Hasil: " . ($angka1 * $angka2);
    } elseif ($op == 'bagi') {
    if ($b == 0) {
        echo "Error! Tidak bisa dibagi nol";
    } else {
        echo "Hasil: " . ($a / $b);
    }
}
     echo '</div>';

    }
?>
</div>

</body>
</html>
