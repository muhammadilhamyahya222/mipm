<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}

require 'functionPPDB.php';

$result = query("SELECT * FROM ppdb WHERE verifikasi = 1");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Alumni</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Asal Sekolah</th>
            <th>Nomer Telepon</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($result as $row) : ?>
        <tr>
            <td><?= $i;?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["jk"];?></td>
            <td><?= $row["asal_sekolah"];?></td>
            <td><?= $row["no_telepon"];?></td>
            <td><img src="../../assets/img/bukti_pembayaran/<?= $row["bukti_pembayaran"];?>" alt="" height="150" width="100"></td>
        </tr>        
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>