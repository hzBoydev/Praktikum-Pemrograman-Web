<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Saldo Akhir Tabungan</title>
</head>
<body>
    <h1>Menghitung Saldo Akhir Nasabah</h1>
    <form method="post" action="">
        <label>Saldo Awal (Rp):</label>
        <input type="number" name="saldo_awal" required><br><br>
        
        <label>Bunga per Bulan (%):</label>
        <input type="number" step="0.01" name="bunga" required><br><br>
        
        <label>Lama (bulan):</label>
        <input type="number" name="lama" required><br><br>
        
        <input type="submit" name="submit" value="Hitung">
        <input type="reset" value="Reset">
    </form>
    
    <hr>
    
    <?php
    if (isset($_POST['submit'])) {
        $saldo_awal = $_POST['saldo_awal'];
        $bunga = $_POST['bunga'];
        $lama = $_POST['lama'];
        
        // hitung saldo akhir
        $saldo_akhir = $saldo_awal;
        for($i = 1; $i <= $lama; $i++) {
            $saldo_akhir += $saldo_akhir * ($bunga / 100);
        }
        
        echo "<h3>Hasil Perhitungan</h3>";
        echo "Saldo Awal: Rp " . number_format($saldo_awal, 0, ',', '.') . "<br>";
        echo "Bunga per Bulan: $bunga<br>";
        echo "Lama: $lama bulan<br>";
        echo "<strong>Saldo Akhir Setelah $lama bulan: Rp " . number_format($saldo_akhir, 0, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>