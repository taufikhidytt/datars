<?php 
require 'function.php';

$pasien = liatdata("SELECT * FROM datapasien");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h2>Data Pasien</h2>
    <a href="tambah-data.php">Tambah Data</a>
    <table border="3px" cellpadding="15px" cellspacing="0" align="center">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Class</th>
            <th>Tarif Kamar</th>
            <th>Jumlah Hari</th>
            <th>Total Tagihan</th></th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($pasien as $pr): ?>
        <?php $total = $pr["tarif_kamar"] * $pr["jumlah_hari"]?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $pr["nik"];?></td>
            <td><?= $pr["nama"];?></td>
            <td><?= $pr["jenis_kelamin"];?></td>
            <td><?= $pr["kelas"];?></td>
            <td><?= $pr["tarif_kamar"];?></td>
            <td><?= $pr["jumlah_hari"];?></td>
            <td><?= $total;?></td>
            <td>
                <a href="ubah-data.php?id=<?= $pr["id"]; ?>" onclick="return confirm('Apakah Anda Ingin Mengubah Data Ini?')">Update</a>   |
                <a href="hapus-data.php?id=<?= $pr["id"]; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">Delete</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach ;?>
    </table>
</body>
</html>