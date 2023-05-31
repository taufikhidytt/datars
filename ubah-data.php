<?php 
require 'function.php';

$id = $_GET["id"];

$pasien = liatdata("SELECT * FROM datapasien WHERE id = $id")[0];

if(isset($_POST["submit"])){
    if (ubahdata($_POST) > 0) {
        ?>
            <script type="text/javascript">
                alert('Anda Berhasil Mengupdate Data Ini!');
                document.location.href='index.php';
            </script>
        <?php
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pasien</title>
    <link rel="stylesheet" href="css/tambahdata.css">
</head>
<body>
    <h2>Update Pasien</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $pasien["id"]; ?>">
        <label for="nik">Nik : </label>
        <input type="number" name="nik" id="nik" autocomplete="off" required value="<?= $pasien["nik"]; ?>">
        <br><br>
        <label for="nama">Nama Lengkap : </label>
        <input type="text" name="nama" id="nama" autocomplete="off" required value="<?= $pasien["nama"]; ?>">
        <br><br>
        <label for="jenis_kelamin">Jenis Kelamin : </label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="pria" <?php if($pasien['jenis_kelamin'] == "pria") { echo "selected";} ?>>Pria</option>
			<option value="wanita" <?php if($pasien['jenis_kelamin'] == "wanita") { echo "selected";} ?>>Wanita</option>
        </select>
        <br><br>
        <label for="kelas">Kelas : </label>
        <select name="kelas" id="kelas">
            <option value="I" <?php if($pasien['kelas'] == "I") { echo "selected";} ?>>I</option>
			<option value="II" <?php if($pasien['kelas'] == "II") { echo "selected";} ?>>II</option>
			<option value="III" <?php if($pasien['kelas'] == "III") { echo "selected";} ?>>III</option>
        </select>
        <br><br>
        <label for="tarif_kamar">Tarif Kamar : </label>
        <input type="number" name="tarif_kamar" id="tarif_kamar" autocomplete="off" required value="<?= $pasien["tarif_kamar"]; ?>">
        <br><br>
        <label for="jumlah_hari">Jumlah Hari : </label>
        <input type="number" name="jumlah_hari" id="jumlah_hari" autocomplete="off" required value="<?= $pasien["jumlah_hari"]; ?>">
        <br><br>
        <button type="submit" name="submit">Update Data</button>
    </form><br>
    <a href="index.php">Kembali</a>
</body>
</html>