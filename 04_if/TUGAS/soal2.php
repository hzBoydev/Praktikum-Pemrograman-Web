<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Mingguan</title>
</head>
<body>

<h2>Hitung Upah Mingguan Karyawan</h2>
<form method="post">
    Masukkan Jumlah Jam Kerja per Minggu: 
    <input type="number" name="jam" required>
    <button type="submit" name="hitung">Hitung</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $jam = $_POST['jam'];
    $upah_per_jam = 2000;
    $upah_lembur = 3000;
    $batas_normal = 48;

    if ($jam <= $batas_normal) {
        $total = $jam * $upah_per_jam;
    } else {
        $jam_lembur = $jam - $batas_normal;
        $total = ($batas_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur);
    }

    echo "<h3>Jumlah upah yang diterima: Rp " . number_format($total, 0, ',', '.') . "</h3>";
}
?>

</body>
</html>