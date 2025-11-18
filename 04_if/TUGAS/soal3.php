<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Berdasarkan Golongan</title>
</head>
<body>

<h2>Hitung Upah Mingguan Karyawan Berdasarkan Golongan</h2>

<form method="post">
    Jumlah Jam Kerja per Minggu:
    <input type="number" name="jam" required><br><br>

    Pilih Golongan:
    <select name="golongan" required>
        <option value="A">A - Rp 4.000</option>
        <option value="B">B - Rp 5.000</option>
        <option value="C">C - Rp 6.000</option>
        <option value="D">D - Rp 7.500</option>
    </select><br><br>

    <button type="submit" name="hitung3">Hitung Upah</button>
</form>

<?php
if (isset($_POST['hitung3'])) {
    $jam = $_POST['jam'];
    $gol = $_POST['golongan'];

    // Tentukan upah per jam berdasarkan golongan
    switch ($gol) {
        case 'A': $upah = 4000; break;
        case 'B': $upah = 5000; break;
        case 'C': $upah = 6000; break;
        case 'D': $upah = 7500; break;
        default: $upah = 0;
    }

    $upah_lembur = 3000;
    $batas = 48;

    if ($jam <= $batas) {
        $total = $jam * $upah;
    } else {
        $lembur = $jam - $batas;
        $total = ($batas * $upah) + ($lembur * $upah_lembur);
    }

    echo "<h3>Golongan: $gol</h3>";
    echo "<h3>Upah Mingguan: Rp " . number_format($total, 0, ',', '.') . "</h3>";
}
?>

</body>
</html>