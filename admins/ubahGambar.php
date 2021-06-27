<?php 
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: loginAdmin.php");
    exit;
}

require 'function-Admin.php';

// ambil data dari url
$id = $_GET["id"];

// query data anime
$gambar = query("SELECT * FROM gambar WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    if( ubahGambar($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>";
    }else {
    echo "<script>
            alert('data gagal diubah');
            document.location.href = 'index.php';
        </script>";
        mysqli_error();
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah Gambar</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/ubahGambar.css">
</head>

<body>
    <section id="input-form">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $gambar["id"];?>">
        <input type="hidden" name="gambarLama1" value="<?= $gambar["gambar1"];?>">
        <input type="hidden" name="gambarLama2" value="<?= $gambar["gambar2"];?>">
        <input type="hidden" name="gambarLama3" value="<?= $gambar["gambar3"];?>">
        <input type="hidden" name="gambarLama4" value="<?= $gambar["gambar4"];?>">
        <input type="hidden" name="gambarLama5" value="<?= $gambar["gambar5"];?>">
        <input type="hidden" name="gambarLama6" value="<?= $gambar["gambar6"];?>">
        <input type="hidden" name="gambarLama7" value="<?= $gambar["gambar7"];?>">
        <input type="hidden" name="gambarLama8" value="<?= $gambar["gambar8"];?>">
        <input type="hidden" name="gambarLama9" value="<?= $gambar["gambar9"];?>">
        <input type="hidden" name="gambarLama10" value="<?= $gambar["gambar10"];?>">
        <h1>Ubah Gambar</h1>
        <br>
            <div class="form">
                <label for="nama_gambar">Nama Gambar: </label>
                <input type="text" name="nama_gambar" id="nama_gambar" value="<?= $gambar ["nama_gambar"];?>">
            </div>
            <div class="form">
                <label for="kategori">Kategori: </label>
                <input type="text" name="kategori" id="kategori" value="<?= $gambar ["kategori"];?>">
            </div>
            <div class="form">
                <label for="deskripsi">Deskripsi: </label>
                <textarea class="isian" type="text" name="deskripsi" id="deskripsi" value=""><?= $gambar ["deskripsi"];?></textarea>
            </div>            
            <div class="form">
                <label for="gambar1">Gambar 1: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar1"];?>" class="img-fluid" height="100" width="200">
                <input type="file" name="gambar1" id="gambar1">
            </div>
            <div class="form">
                <label for="gambar2">Gambar 2: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar2"];?>" class="img-fluid" height="100" width="200">
                <input type="file" name="gambar2" id="gambar2">
            </div>
            <div class="form">
                <label for="gambar3">Gambar 3: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar3"];?>" class="img-fluid" height="100" width="200">
                <input type="file" name="gambar3" id="gambar3">
            </div>
            <div class="form">
                <label for="gambar4">Gambar 4: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar4"];?>" class="img-fluid" height="100" width="200">
                <input type="file" name="gambar4" id="gambar4">
            </div>
            <div class="form">
                <label for="gambar5">Gambar 5: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar5"];?>" class="img-fluid" height="100" width="200">
                <input type="file" name="gambar5" id="gambar5">
            </div>
            <div class="form">
                <label for="gambar6">Gambar 6: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar6"];?>" class="img-fluid" height="100" width="200">
                <input type="file" name="gambar6" id="gambar6">
            </div>
            <div class="form">
                <label for="gambar7">Gambar 7: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar7"];?>"class="img-fluid" height="100" width="200">
                <input type="file" name="gambar7" id="gambar7">
            </div>
            <div class="form">
                <label for="gambar8">Gambar 8: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar8"];?>" class="img-fluid" height="100" width="200">
                <input type="file" name="gambar8" id="gambar8">
            </div>
            <div class="form">
                <label for="gambar9">Gambar 9: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar9"];?>"class="img-fluid" height="100" width="200">
                <input type="file" name="gambar9" id="gambar9">
            </div>
            <div class="form">
                <label for="gambar10">Gambar 10: </label>
                <img src="assets/img/portfolio/<?= $gambar["gambar10"];?>" class="img-fluid" height="100" width="200">
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