<?php
$jumlah = 0; // untuk menghitung jumlah penyelesaian

for ($x = 1; $x <= 23; $x++) {
    for ($y = 1; $y <= 23; $y++) {
        for ($z = 1; $z <= 23; $z++) {

            if ($x + $y + $z == 25) {
                echo "x = $x, y = $y, z = $z<br>";
                $jumlah++;
            }

        }
    }
}

// Tampilkan total solusi
echo "<br><b>Jumlah penyelesaian = $jumlah</b>";
?>