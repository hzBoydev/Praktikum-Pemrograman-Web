<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Pecahan Uang</title>
</head>
<body>
    <h1>Menghitung Pecahan Uang</h1>

    <form method="post" action="">
        <label>Masukkan Jumlah Uang (Rp):</label>
        <input type="number" name="jumlah" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung">
        <input type="reset" value="Reset">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah'];

        // Daftar pecahan uang yang tersedia
        $pecahan = array(100000, 50000, 20000, 5000, 100, 50);

        echo "<h3>Hasil Pecahan Uang untuk Rp " . number_format($jumlah, 0, ',', '.') . "</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>Pecahan</th><th>Jumlah Lembar</th></tr>";

        foreach ($pecahan as $uang) {
            $lembar = intval($jumlah / $uang); // banyak lembar pecahan tertentu
            $jumlah = $jumlah % $uang; // sisa uang setelah diambil pecahan tersebut
            echo "<tr><td>Rp " . number_format($uang, 0, ',', '.') . "</td><td>" . $lembar . "</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>