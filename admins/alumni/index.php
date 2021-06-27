<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}

// require '../function-Admin.php';
require 'function.php';

$result = query("SELECT * FROM alumni");


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
            <th>Foto</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tahun Lulus</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Handphone</th>
            <th>Testimoni</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($result as $row) : ?>
        <tr>
            <td><?= $i;?></td>
            <td><img src="../../assets/img/alumni/<?= $row["fotoAlumni"];?>" alt="" height="150" width="100"></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["jk"];?></td>
            <td><?= $row["tgl_lahir"];?></td>
            <td><?= $row["tahun_lulus"];?></td>
            <td><?= $row["nis"];?></td>
            <td><?= $row["alamat"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["telepon"];?></td>
            <td><?= $row["handphone"];?></td>
            <td><?= $row["testi"];?></td>
            <td>
                <button><a href="ubahAlumni.php?id=<?= $row["id"];?>">Ubah</a></button>
                <button><a href="hapusAlumni.php?id=<?= $row["id"];?>" onclick=" return confirm('Hapus data?');">Hapus</a></button>
            </td>
        </tr>        
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>