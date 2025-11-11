<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa Baru</h1>
    <form method="get" action="">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <select name="tgl" required>
            <option value="">Tanggal</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <select name="bln" required>
            <option value="">Bulan</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <select name="thn" required>
            <option value="">Tahun</option>
            <?php
            for ($i = 1980; $i <= 2010; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br><br>

        <label>Alamat Rumah:</label><br>
        <textarea name="alamat" rows="3" cols="30" required></textarea><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="Pria" required> Pria
        <input type="radio" name="jk" value="Wanita"> Wanita<br><br>

        <label>Asal Sekolah:</label><br>
        <input type="text" name="asal_sekolah" required><br><br>

        <label>Nilai UAN:</label><br>
        <input type="text" name="nilai" required><br><br>

        <input type="submit" name="submit" value="Kirim">
        <input type="reset" value="Reset">
    </form>

    <hr>

    <?php
    if (isset($_GET['submit'])) {
        $nama = $_GET['nama'];
        $tempat = $_GET['tempat_lahir'];
        $tgl = $_GET['tgl'];
        $bln = $_GET['bln'];
        $thn = $_GET['thn'];
        $alamat = $_GET['alamat'];
        $jk = $_GET['jk'];
        $asal = $_GET['asal_sekolah'];
        $nilai = $_GET['nilai'];

        echo "<h3>Terimakasih $nama sudah mengisi form pendaftaran.</h3>";
        echo "Nama Lengkap : $nama<br>";
        echo "Tempat Lahir : $tempat<br>";
        echo "Tanggal Lahir : $tgl - $bln - $thn<br>";
        echo "Alamat Rumah : $alamat<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "Asal Sekolah : $asal<br>";
        echo "Nilai UAN : $nilai<br>";
    }
    ?>
</body>
</html>