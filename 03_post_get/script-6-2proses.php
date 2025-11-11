<html>
<head>
    <title>Hasil Perhitungan Komisi</title>
</head>
<body>
    <h1>Hasil Perhitungan Komisi Salesman</h1>
    <?php
    $nilaiJual = $_POST['penjualan'];
    $prosenKomisi = $_POST['komisi'];

    $komisi = $nilaiJual * $prosenKomisi / 100;

    echo "<p>Nilai penjualan salesman : Rp. ".$nilaiJual."</p>";
    echo "<p>Prosentase Komisi : ".$prosenKomisi." %</p>";
    echo "<p>Komisi yang didapat salesman adalah Rp. ".$komisi."</p>";
    ?>

</body>
</html>