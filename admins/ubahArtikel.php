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
$artikel = query("SELECT * FROM artikel WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan 
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    if( ubahArtikel($_POST) > 0) {
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
    <title>Ubah Artikel</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/tambahGambar.css">
</head>

<body>
    <section id="input-form">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $artikel["id"];?>">
        <input type="hidden" name="logoLama1" value="<?= $artikel["logo"];?>">
        <input type="hidden" name="gambarLama1" value="<?= $artikel["gambar1"];?>">
        <input type="hidden" name="gambarLama2" value="<?= $artikel["gambar2"];?>">
        <input type="hidden" name="gambarLama3" value="<?= $artikel["gambar3"];?>">

        <h1>Ubah Artikel</h1>
        <br>
            <div class="form">
                <label for="judul">Judul Artikel: </label>
                <input type="text" name="judul" id="judul" value="<?= $artikel ["judul"];?>">
            </div>
            <div class="form">
                <label for="p1">Paragraf 1: </label>
                <textarea class="isian" type="text" name="p1" id="p1" value=""><?= $artikel ["p1"];?></textarea>
            </div>
            <div class="form">
                <label for="p2">Paragraf 2: </label>
                <textarea class="isian" type="text" name="p2" id="p2" value=""><?= $artikel ["p2"];?></textarea>
            </div>
            <div class="form">
                <label for="p3">Paragraf 3: </label>
                <textarea class="isian" type="text" name="p3" id="p3" value=""><?= $artikel ["p3"];?></textarea>
            </div>
            <div class="form">
                <label for="p4">Paragraf 4: </label>
                <textarea class="isian" type="text" name="p4" id="p4" value=""><?= $artikel ["p4"];?></textarea>
            </div>            
            <div class="form">
                <label for="p5">Paragraf 5: </label>
                <textarea class="isian" type="text" name="p5" id="p5" value=""><?= $artikel ["p5"];?></textarea>
            </div>
            <div class="form">
                <label for="p6">Paragraf 6: </label>
                <textarea class="isian" type="text" name="p6" id="p6" value=""><?= $artikel ["p6"];?></textarea>
            </div>
            <div class="form">
                <label for="p7">Paragraf 7: </label>
                <textarea class="isian" type="text" name="p7" id="p7" value=""><?= $artikel ["p7"];?></textarea>
            </div>
            <div class="form">
                <label for="p8">Paragraf 8: </label>
                <textarea class="isian" type="text" name="p8" id="p8" value=""><?= $artikel ["p8"];?></textarea>
            </div>
            <div class="form">
                <label for="p9">Paragraf 9: </label>
                <textarea class="isian" type="text" name="p9" id="p9" value=""><?= $artikel ["p9"];?></textarea>
            </div>
            <div class="form">
                <label for="p10">Paragraf 10: </label>
                <textarea class="isian" type="text" name="p10" id="p10" value=""><?= $artikel ["p10"];?></textarea>
            </div>
            <div class="form">
                <label for="p11">Paragraf 11: </label>
                <textarea class="isian" type="text" name="p11" id="p11" value=""><?= $artikel ["p11"];?></textarea>
            </div>
            <div class="form">
                <label for="p12">Paragraf 12: </label>
                <textarea class="isian" type="text" name="p12" id="p12" value=""><?= $artikel ["p12"];?></textarea>
            </div>
            <div class="form">
                <label for="p13">Paragraf 13: </label>
                <textarea class="isian" type="text" name="p13" id="p13" value=""><?= $artikel ["p13"];?></textarea>
            </div>
            <div class="form">
                <label for="p14">Paragraf 14: </label>
                <textarea class="isian" type="text" name="p14" id="p14" value=""><?= $artikel ["p14"];?></textarea>
            </div>
            <div class="form">
                <label for="p15">Paragraf 15: </label>
                <textarea class="isian" type="text" name="p15" id="p15" value=""><?= $artikel ["p15"];?></textarea>
            </div>
            <div class="form">
                <label for="p16">Paragraf 16: </label>
                <textarea class="isian" type="text" name="p16" id="p16" value=""><?= $artikel ["p16"];?></textarea>
            </div>
            <div class="form">
                <label for="p17">Paragraf 17: </label>
                <textarea class="isian" type="text" name="p17" id="p17" value=""><?= $artikel ["p17"];?></textarea>
            </div>
            <div class="form">
                <label for="p18">Paragraf 18: </label>
                <textarea class="isian" type="text" name="p18" id="p18" value=""><?= $artikel ["p18"];?></textarea>
            </div>
            <div class="form">
                <label for="p19">Paragraf 19: </label>
                <textarea class="isian" type="text" name="p19" id="p19" value=""><?= $artikel ["p19"];?></textarea>
            </div>
            <div class="form">
                <label for="p20">Paragraf 20: </label>
                <textarea class="isian" type="text" name="p20" id="p20" value=""><?= $artikel ["p20"];?></textarea>
            </div>
            <div class="form">
                <label for="p21">Paragraf 21: </label>
                <textarea class="isian" type="text" name="p21" id="p21" value=""><?= $artikel ["p21"];?></textarea>
            </div>
            <div class="form">
                <label for="p22">Paragraf 22: </label>
                <textarea class="isian" type="text" name="p22" id="p22" value=""><?= $artikel ["p22"];?></textarea>
            </div>
            <div class="form">
                <label for="p23">Paragraf 23: </label>
                <textarea class="isian" type="text" name="p23" id="p23" value=""><?= $artikel ["p23"];?></textarea>
            </div>
            <div class="form">
                <label for="p24">Paragraf 24: </label>
                <textarea class="isian" type="text" name="p24" id="p24" value=""><?= $artikel ["p24"];?></textarea>
            </div>
            <div class="form">
                <label for="p25">Paragraf 25: </label>
                <textarea class="isian" type="text" name="p25" id="p25" value=""><?= $artikel ["p25"];?></textarea>
            </div>
            <div class="form">
                <label for="p26">Paragraf 26: </label>
                <textarea class="isian" type="text" name="p26" id="p26" value=""><?= $artikel ["p26"];?></textarea>
            </div>
            <div class="form">
                <label for="p27">Paragraf 27: </label>
                <textarea class="isian" type="text" name="p27" id="p27" value=""><?= $artikel ["p27"];?></textarea>
            </div>
            <div class="form">
                <label for="p28">Paragraf 28: </label>
                <textarea class="isian" type="text" name="p28" id="p28" value=""><?= $artikel ["p28"];?></textarea>
            </div>
            <div class="form">
                <label for="p29">Paragraf 29: </label>
                <textarea class="isian" type="text" name="p29" id="p29" value=""><?= $artikel ["p29"];?></textarea>
            </div>
            <div class="form">
                <label for="p30">Paragraf 30: </label>
                <textarea class="isian" type="text" name="p30" id="p30" value=""><?= $artikel ["p30"];?></textarea>
            </div>
            <div class="form">
                <label for="logo">Logo </label>
                <img src="../assets/img/artikel/<?= $artikel["logo"];?>" height="100" width="200">
                <input type="file" name="logo" id="logo">
            </div>
            <div class="form">
                <label for="gambar1">Gambar 1: </label>
                <img src="../assets/img/artikel/<?= $artikel["gambar1"];?>" height="100" width="200">
                <input type="file" name="gambar1" id="gambar1">
            </div>
            <div class="form">
                <label for="gambar2">Gambar 2: </label>
                <img src="../assets/img/artikel/<?= $artikel["gambar2"];?>" height="100" width="200">
                <input type="file" name="gambar2" id="gambar2">
            </div>
            <div class="form">
                <label for="gambar3">Gambar 3: </label>
                <img src="../assets/img/artikel/<?= $artikel["gambar3"];?>" height="100" width="200">
                <input type="file" name="gambar3" id="gambar3">
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