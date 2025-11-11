<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa Baru</h1>
    <form method="post" action="">
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
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tempat = $_POST['tempat_lahir'];
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $asal = $_POST['asal_sekolah'];
        $nilai = $_POST['nilai'];

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