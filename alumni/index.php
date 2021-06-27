<?php

require 'function.php';

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambahDataAlumni($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = '../index.php';
            </script>";
    }else {
    echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = '../index.php';
        </script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../assets/img/icon.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Alumni</title>
    <link href="../assets/css/alumni.css" rel="stylesheet">
</head>
<body>
<section id="input-form">
    <div class="logo mr-auto">
    <img class="logo" src="../assets/img/mi/logonav.png" style="width:50px;height:50px;display:block;margin:auto">
    <br>
    <h1 style="align: center">Pendaftaran Alumni</h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <div class="form">
                <label for="nama">Nama Lengkap: </label>
                <input class="isian" type="text" name="nama" id="nama" required>
            </div>
            <div class="form">
            <label for="jk">Jenis Kelamin: </label>
            <select class="isian" type="text" name="jk" id="jk" required>
                <option>L</option>
                <option>P</option>
            <select>
            </div>
            <div class="form">
                <label for="tgl_lahir">Tanggal Lahir: </label>
                <input class="isian" type="date" name="tgl_lahir" id="tgl_lahir" required>
            </div>
            <div class="form">
                <label for="tahun_lulus">Tahun Lulus: </label>
                <input class="isian" type="text" name="tahun_lulus" id="tahun_lulus" required>
            </div>
            <div class="form">
                <label for="nis">NIS: </label>
                <input class="isian" type="text" name="nis" id="nis" required>
            </div>
            <div class="form">
                <label for="alamat">Alamat: </label>
                <input class="isian" type="text" name="alamat" id="alamat" required>
            </div>
            <div class="form">
                <label for="email">Email: </label>
                <input class="isian" type="text" name="email" id="email" required>
            </div>
            <div class="form">
                <label for="telepon">Telepon: </label>
                <input class="isian" type="text" name="telepon" id="telepon" required>
            </div>
            <div class="form">
                <label for="handphone">Handphone: </label>
                <input class="isian" type="text" name="handphone" id="handphone" required>
            </div>
            <div class="form">
                <label for="fotoAlumni">Foto: </label>
                <small style="color: grey">ukuran foto harus 1:1</small>
                <input class="isian" type="file" name="fotoAlumni" id="fotoAlumni" required>
            </div>
            <div class="form">
                <label for="testi">Testimoni: </label>
                <input class="isian" type="text" name="testi" id="testi" required>
            </div>
            <div class="form">
                <button class="bg-blue" type="submit" name="submit">Submit</button>
            </div>
        </ul>
    </form>
</section>
</body>
</html>