<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}

require 'functionPPDB.php';

$result = query("SELECT * FROM ppdb");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="verifikasi.php">Verivikasi</a></li>
        <li><a href="terverifikasi.php">Terverifikasi</a></li>
    </ul>
    <h1>Daftar PPDB</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama Lengkap</th>
            <th>Nomer Peserta</th>
            <th>Jenis Kelamain</th>
            <th>Tahun Lulus</th>
            <th>Asal Sekolah</th>
            <th>Telepon</th>            
        </tr>
        <?php $i = 1; ?>
        <?php foreach($result as $row) : ?>
        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="ubahPeserta.php?id=<?= $row["id"];?>">Ubah</a>|
                <a href="hapusPeserta.php?id=<?= $row["id"];?>">Hapus</a>|
                <a href="readPeserta.php?id=<?= $row["id"];?>">Read</a>
            </td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["no_peserta"];?></td>
            <td><?= $row["jk"];?></td>
            <td><?= $row["tahun_lulus"];?></td>
            <td><?= $row["asal_sekolah"];?></td>
            <td><?= $row["no_telepon"];?></td>
        </tr>        
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>