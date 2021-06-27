<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: loginAdmin.php");
    exit;
}

// require '../function-Admin.php';
require 'function.php';

// ambil data dari url
$id = $_GET["id"];

// query data anime
$alumni = query("SELECT * FROM alumni WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( ubahDataAlumni($_POST) > 0) {
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
    <link href="../../assets/css/alumni.css" rel="stylesheet">
</head>
<body>
<section id="input-form">
    <h1><img class="logo" src="../../assets/img/mi/logonav.png" style="width:20px;height:20px;"> Ubah Alumni</h1>
    <form action="" method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="id" value="<?= $alumni["id"];?>">
        <input type="hidden" name="fotoLama" value="<?= $alumni["fotoAlumni"];?>">

        <ul>
        <div class="form">
                <label for="nama">Nama Lengkap: </label>
                <input class="isian" type="text" name="nama" id="nama" value="<?= $alumni ["nama"];?>" required>
                </div>
            <div class="form">
                <label for="jk">Jenis Kelamin: </label>
                <input class="isian" type="text" name="jk" id="jk" value="<?= $alumni ["jk"];?>" required>
                </div>
            <div class="form">
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input class="isian" type="date" name="tgl_lahir" id="tgl_lahir" value="<?= $alumni ["tgl_lahir"];?>" required>
                </div>
            <div class="form">
                <label for="tahun_lulus">Tahun Lulus: </label>
                <input class="isian" type="text" name="tahun_lulus" id="tahun_lulus" value="<?= $alumni ["tahun_lulus"];?>" required>
                </div>
            <div class="form">
                <label for="nis">NIS: </label>
                <input class="isian" type="text" name="nis" id="nis" value="<?= $alumni ["nis"];?>" required>
                </div>
            <div class="form">
                <label for="alamat">Alamat: </label>
                <input class="isian" type="text" name="alamat" id="alamat" value="<?= $alumni ["alamat"];?>" required>
                </div>
            <div class="form">
                <label for="email">Email: </label>
                <input class="isian" type="text" name="email" id="email" value="<?= $alumni ["email"];?>" required>
                </div>
            <div class="form">
                <label for="telepon">Telepon: </label>
                <input class="isian" type="text" name="telepon" id="telepon" value="<?= $alumni ["telepon"];?>" required>
                </div>
            <div class="form">
                <label for="handphone">Handphone: </label>
                <input class="isian" type="text" name="handphone" id="handphone" value="<?= $alumni ["handphone"];?>" required>
                </div>
            <div class="form">
                <label for="fotoAlumni">Foto: </label>
                <img src="../../assets/img/alumni/<?= $alumni ["fotoAlumni"];?>" alt="" height="100" width="200">
                <input class="isian" type="file" name="fotoAlumni" id="fotoAlumni">
                </div>
            <div class="form">
                <button class="bg-blue" type="submit" name="submit">Submit</button>
            </div>
        </ul>
    </form>
</section>
</body>
</html>