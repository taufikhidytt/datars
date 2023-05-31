<?php 
require 'function.php';

if(isset($_POST["submit"])){
    if (tambahdata($_POST) > 0) {
        ?>
            <script type="text/javascript">
                alert('Anda Berhasil Menambahkan Data Baru!');
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
    <title>Tambah Pasien</title>
    <link rel="stylesheet" href="css/tambahdata.css">
</head>
<body>
    <h2>Tambah Pasien</h2>
    <form action="" method="post">
        <label for="nik">Nik : </label>
        <input type="number" name="nik" id="nik" autocomplete="off" required>
        <br><br>
        <label for="nama">Nama Lengkap : </label>
        <input type="text" name="nama" id="nama" autocomplete="off" required>
        <br><br>
        <label for="jenis_kelamin">Jenis Kelamin : </label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="">--Pilih--</option>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select>
        <br><br>
        <label for="kelas">Kelas : </label>
        <select name="kelas" id="kelas">
            <option value="">--Pilih--</option>
            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
        </select>
        <br><br>
        <label for="tarif_kamar">Tarif Kamar : </label>
        <input type="number" name="tarif_kamar" id="tarif_kamar" autocomplete="off" required>
        <br><br>
        <label for="jumlah_hari">Jumlah Hari : </label>
        <input type="number" name="jumlah_hari" id="jumlah_hari" autocomplete="off" required>
        <br><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form><br>
    <a href="index.php">Kembali</a>
</body>
</html>