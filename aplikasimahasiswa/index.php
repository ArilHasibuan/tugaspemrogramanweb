<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h1>Aplikasi Penilaian Mahasiswa</h1>
        <div class="form">
        <form method="POST">
            <div class="container">
            <input type="number" name="nilai1" placeholder="Masukkan Nilai" required> <br>
            <input type="number" name="nilai2" placeholder="Masukkan Nilai" required> <br>      
            <input type="number" name="nilai3" placeholder="Masukkan Nilai" required> <br>      
            <button type="submit" name="submit" value="">Submit</button>     
            </div>         
        </form>
        <div id="hasil">
        <?php
    // Mengecek apakah formulir sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai input dari formulir
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];
        
        // Menghitung rata-rata
        $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;
        
        // Menampilkan nilai rata-rata
        echo "<h3>Nilai Rata-Rata: " . $rata_rata . "</h3>";

        // Menentukan keterangan berdasarkan rata-rata
        if ($rata_rata > 100) {
            echo "<h3>Keterangan: Invalid</h3>";
        } elseif ($rata_rata == 100) {
            echo "<h3>Keterangan: Sempurna!</h3>";
        } elseif ($rata_rata >= 60) {
            echo "<h3>Keterangan: Lulus</h3>";
        } else {
            echo "<h3>Keterangan: Tidak Lulus</h3>";
        }
    }
    ?>
    </div>
    </div>
</body>
</html>