<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: loginAdmin.php");
    exit;
}

// require '../function-Admin.php';
require 'function.php';

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambahDataAlumni($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }else {
    echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Alumni</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="jk">Jenis Kelamin: </label>
                <input type="text" name="jk" id="jk" required>
            </li>
            <li>
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" required>
            </li>
            <li>
                <label for="tahun_lulus">Tahun Lulus: </label>
                <input type="text" name="tahun_lulus" id="tahun_lulus" required>
            </li>
            <li>
                <label for="nis">NIS: </label>
                <input type="text" name="nis" id="nis" required>
            </li>
            <li>
                <label for="alamat">Alamat: </label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="telepon">Telepon: </label>
                <input type="text" name="telepon" id="telepon" required>
            </li>
            <li>
                <label for="handphone">Handphone: </label>
                <input type="text" name="handphone" id="handphone" required>
            </li>
            <li>
                <label for="fotoAlumni">Foto: </label>
                <input type="file" name="fotoAlumni" id="fotoAlumni" required>
            </li>
            <li>
                <button class="bg-blue" type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>