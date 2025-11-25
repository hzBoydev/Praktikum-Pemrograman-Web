<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Saldo Akhir Bank</title>
</head>
<body>

<h2>Hitung Saldo Akhir Setelah N Bulan</h2>

<form method="post">
    Saldo Awal (Rp): <br>
    <input type="number" name="saldo_awal" required><br><br>

    Lama Menabung (N bulan): <br>
    <input type="number" name="bulan" required><br><br>

    <button type="submit">Hitung</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $saldo = $_POST["saldo_awal"];
    $bulan = $_POST["bulan"];

    for ($i = 1; $i <= $bulan; $i++) {

        // Tentukan bunga berdasarkan saldo terakhir
        if ($saldo < 1100000) {
            $bunga = 0.03;    // 3%
        } else {
            $bunga = 0.04;    // 4%
        }

        // Hitung bunga berdasarkan saldo terakhir
        $saldo = $saldo + ($saldo * $bunga);

        // Biaya administrasi bulanan
        $saldo = $saldo - 9000;
    }

    echo "<h3>Hasil Perhitungan:</h3>";
    echo "Saldo akhir setelah $bulan bulan adalah: <b>Rp " . number_format($saldo, 0, ',', '.') . "</b>";
}
?>

</body>
</html>