<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator</title>
</head>

<body>
    <h1>KALKULATOR</h1>
    <br>
    <div class="container">
        <form method="POST">
            <input type="number" name="angka1" placeholder="angka 1" required>
            <input type="number" name="angka2" placeholder="angka 2" required>
            <div class="tombol">
                <button type="submit" name="operasi" value="+">+</button>
                <button type="submit" name="operasi" value="-">-</button>
                <button type="submit" name="operasi" value="x">x</button>
                <button type="submit" name="operasi" value="/">/</button>
                <button type="reset" onclick="document.getElementById('hasil').innerHTML = '';">Reset</button> <!-- Tombol reset -->
            </div>
        </form>

        <div id="hasil">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['operasi'])) {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operasi = $_POST['operasi'];

                switch ($operasi) {
                    case '+':
                        $hasil = $angka1 + $angka2;
                        break;
                    case '-':
                        $hasil = $angka1 - $angka2;
                        break;
                    case 'x':
                        $hasil = $angka1 * $angka2;
                        break;
                    case '/':
                        if ($angka2 != 0) {
                            $hasil = $angka1 / $angka2;
                        } else {
                            $hasil = "Error: Pembagian dengan nol!";
                        }
                        break;
                    default:
                        $hasil = "Operasi tidak valid.";
                        break;
                }
                echo "<h2>$hasil</h2>";
            }
            ?>
        </div>
    </div>

</body>

</html>