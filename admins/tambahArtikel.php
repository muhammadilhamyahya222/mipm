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
    if( tambahArtikel($_POST) > 0) {
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
    <title>Tambah Artikel</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/tambahArtikel.css">
</head>

<body>


    <section id="input-form">
    <h1>Tambah Artikel</h1>
    <br>
        <form action="" method="post" enctype="multipart/form-data">
                <div class="form">
                    <label for="judul">Judul Artikel: </label>
                    <input type="text" name="judul" id="judul" required>
                </div>
                <div class="form">
                    <label for="p1">Paragraf 1: </label>
                    <textarea class="isian" type="text" name="p1" id="p1"></textarea>
                </div>
                <div class="form">
                    <label for="p2">Paragraf 2: </label>
                    <textarea class="isian" type="text" name="p2" id="p2"></textarea>
                </div>
                <div class="form">
                    <label for="p3">Paragraf 3: </label>
                    <textarea class="isian" type="text" name="p3" id="p3"></textarea>
                </div>
                <div class="form">
                    <label for="p4">Paragraf 4: </label>
                    <textarea class="isian" type="text" name="p4" id="p4"></textarea>
                </div>
                <div class="form">
                    <label for="p5">Paragraf 5: </label>
                    <textarea class="isian" type="text" name="p5" id="p5"></textarea>
                </div>
                <div class="form">
                    <label for="p6">Paragraf 6: </label>
                    <textarea class="isian" type="text" name="p6" id="p6"></textarea>
                </div>
                <div class="form">
                    <label for="p7">Paragraf 7: </label>
                    <textarea class="isian" type="text" name="p7" id="p7"></textarea>
                </div>
                <div class="form">
                    <label for="p8">Paragraf 8: </label>
                    <textarea class="isian" type="text" name="p8" id="p8"></textarea>
                </div>
                <div class="form">
                    <label for="p9">Paragraf 9: </label>
                    <textarea class="isian" type="text" name="p9" id="p9"></textarea>
                </div>
                <div class="form">
                    <label for="p10">Paragraf 10: </label>
                    <textarea class="isian" type="text" name="p10" id="p10"></textarea>
                </div>
                <div class="form">
                    <label for="p11">Paragraf 11: </label>
                    <textarea class="isian" type="text" name="p11" id="p11"></textarea>
                </div>
                <div class="form">
                    <label for="p12">Paragraf 12: </label>
                    <textarea class="isian" type="text" name="p12" id="p12"></textarea>
                </div>
                <div class="form">
                    <label for="p13">Paragraf 13: </label>
                    <textarea class="isian" type="text" name="p13" id="p13"></textarea>
                </div>
                <div class="form">
                    <label for="p14">Paragraf 14: </label>
                    <textarea class="isian" type="text" name="p14" id="p14"></textarea>
                </div>
                <div class="form">
                    <label for="p15">Paragraf 15: </label>
                    <textarea class="isian" type="text" name="p15" id="p15"></textarea>
                </div>
                <div class="form">
                    <label for="p16">Paragraf 16: </label>
                    <textarea class="isian" type="text" name="p16" id="p16"></textarea>
                </div>
                <div class="form">
                    <label for="p17">Paragraf 17: </label>
                    <textarea class="isian" type="text" name="p17" id="p17"></textarea>
                </div>
                <div class="form">
                    <label for="p18">Paragraf 18: </label>
                    <textarea class="isian" type="text" name="p18" id="p18"></textarea>
                </div>
                <div class="form">
                    <label for="p19">Paragraf 19: </label>
                    <textarea class="isian" type="text" name="p19" id="p19"></textarea>
                </div>
                <div class="form">
                    <label for="p20">Paragraf 20: </label>
                    <textarea class="isian" type="text" name="p20" id="p20"></textarea>
                </div>
                <div class="form">
                    <label for="p21">Paragraf 21: </label>
                    <textarea class="isian" type="text" name="p21" id="p21"></textarea>
                </div>
                <div class="form">
                    <label for="p22">Paragraf 22: </label>
                    <textarea class="isian" type="text" name="p22" id="p22"></textarea>
                </div>
                <div class="form">
                    <label for="p23">Paragraf 23: </label>
                    <textarea class="isian" type="text" name="p23" id="p23"></textarea>
                </div>
                <div class="form">
                    <label for="p24">Paragraf 24: </label>
                    <textarea class="isian" type="text" name="p24" id="p24"></textarea>
                </div>
                <div class="form">
                    <label for="p25">Paragraf 25: </label>
                    <textarea class="isian" type="text" name="p25" id="p25"></textarea>
                </div>
                <div class="form">
                    <label for="p26">Paragraf 26: </label>
                    <textarea class="isian" type="text" name="p26" id="p26"></textarea>
                </div>
                <div class="form">
                    <label for="p27">Paragraf 27: </label>
                    <textarea class="isian" type="text" name="p27" id="p27"></textarea>
                </div>
                <div class="form">
                    <label for="p28">Paragraf 28: </label>
                    <textarea class="isian" type="text" name="p28" id="p28"></textarea>
                </div>
                <div class="form">
                    <label for="p29">Paragraf 29: </label>
                    <textarea class="isian" type="text" name="p29" id="p29"></textarea>
                </div>
                <div class="form">
                    <label for="p30">Paragraf 30: </label>
                    <textarea class="isian" type="text" name="p30" id="p30"></textarea>
                </div>
                <div class="form">
                    <label for="logo">Logo </label>
                    <input type="file" name="logo" id="logo">
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
                    <button class="bg-blue" type="submit" name="submit">Submit</button>
                </div>
        </form>
    </section>
    <br>
    <br>
</body>

</html>