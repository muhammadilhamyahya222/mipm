<?php 

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: loginAdmin.php");
    exit;
}

require 'function-Admin.php';

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
    if( tambahGambar($_POST) > 0) {
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
<html>

<head>
    <title>Tambah Gambar</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/tambahGambar.css">
</head>

<body>
    <section id="input-form">
    <h1>Tambah Gambar</h1>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
            <div class="form">
                <label for="nama_gambar">Nama Gambar: </label>
                <input type="text" name="nama_gambar" id="nama_gambar" required>
            </div>
            <div class="form">
                <label for="kategori">Kategori: </label>
                <input type="text" name="kategori" id="kategori">
            </div>
            <div class="form">
                <label for="deskripsi">Deskripsi: </label>
                <textarea class="isian" type="text" name="deskripsi" id="deskripsi"></textarea>
            </div>
            <div class="form">
                <label for="gambar1">Gambar 1: </label>
                <input type="file" name="gambar1" id="gambar1">
            </div>
            <div class="form">
                <label for="gambar2">Gambar 2: </label>
                <input type="file" name="gambar2" id="gambar2">
            </div>
            <div class="form">
                <label for="gambar3">Gambar 3: </label>
                <input type="file" name="gambar3" id="gambar3">
            </div>
            <div class="form">
                <label for="gambar4">Gambar 4: </label>
                <input type="file" name="gambar4" id="gambar4">
            </div>
            <div class="form">
                <label for="gambar5">Gambar 5: </label>
                <input type="file" name="gambar5" id="gambar5">
            </div>
            <div class="form">
                <label for="gambar6">Gambar 6: </label>
                <input type="file" name="gambar6" id="gambar6">
            </div>
            <div class="form">
                <label for="gambar7">Gambar 7: </label>
                <input type="file" name="gambar7" id="gambar7">
            </div>
            <div class="form">
                <label for="gambar8">Gambar 8: </label>
                <input type="file" name="gambar8" id="gambar8">
            </div>
            <div class="form">
                <label for="gambar9">Gambar 9: </label>
                <input type="file" name="gambar9" id="gambar9">
            </div>
            <div class="form">
                <label for="gambar10">Gambar 10: </label>
                <input type="file" name="gambar10" id="gambar10">
            </div>
            <div class="form">
                <button class="bg-blue" type="submit" name="submit">Submit</button>
            </div>
    </form>
    </section>
    <br>
    <br>
</body>

</html>