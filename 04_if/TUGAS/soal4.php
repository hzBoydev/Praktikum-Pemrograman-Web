<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Hari per Bulan</title>
</head>
<body>

<h2>Cek Jumlah Hari Dalam Bulan</h2>

<form method="post">
    Masukkan Nomor Bulan (1–12): 
    <input type="number" name="bulan" min="1" max="12" required>
    <button type="submit" name="cekBulan">Cek</button>
</form>

<?php
if (isset($_POST['cekBulan'])) {
    $bulan = $_POST['bulan'];

    switch ($bulan) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $hari = 31;
            break;
        case 4: case 6: case 9: case 11:
            $hari = 30;
            break;
        case 2:
            $hari = 28; // atau 29 jika kabisat, tapi soal tidak meminta pengecekan kabisat
            break;
        default:
            $hari = "Bulan tidak valid";
    }

    echo "<h3>Jumlah hari pada bulan $bulan adalah: $hari hari</h3>";
}
?>

</body>
</html>