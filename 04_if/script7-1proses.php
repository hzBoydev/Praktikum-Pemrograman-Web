<html>
<head>
    <title>Mencari Bilangan Terbesar dari 3 Bilangan</title>
</head>
<body>
<h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>

<?php

$bilangan1 = $_POST['bil1'];   // membaca input bilangan pertama
$bilangan2 = $_POST['bil2'];   // membaca input bilangan kedua
$bilangan3 = $_POST['bil3'];   // membaca input bilangan ketiga


// ==========================
// CARA KE - 1
// ==========================
// mencari bilangan terbesar dari bil 1 dan bil2, lalu dibandingkan dengan bil 3.

if ($bilangan1 > $bilangan2)
    $maxSementara = $bilangan1;
else
    $maxSementara = $bilangan2;

if ($bilangan3 > $maxSementara)
    $maxAkhir = $bilangan3;
else
    $maxAkhir = $maxSementara;

echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";


// ==========================
// CARA KE - 2
// ==========================
// langsung membandingkan masing-masing bilangan dengan bilangan lain.

if (($bilangan1 > $bilangan2) && ($bilangan1 > $bilangan3))
    $maxAkhir = $bilangan1;
else {
    if (($bilangan2 > $bilangan1) && ($bilangan2 > $bilangan3))
        $maxAkhir = $bilangan2;
    else
        $maxAkhir = $bilangan3;
}

echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";


// ==========================
// CARA KE - 3
// ==========================
// hampir sama dengan cara ke-1 tetapi tanpa max sementara.

if ($bilangan1 > $bilangan2)
{
    if ($bilangan1 > $bilangan3)
        $maxAkhir = $bilangan1;
    else
        $maxAkhir = $bilangan3;
}
else
{
    if ($bilangan2 > $bilangan3)
        $maxAkhir = $bilangan2;
    else
        $maxAkhir = $bilangan3;
}

echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";

?>

</body>
</html>
