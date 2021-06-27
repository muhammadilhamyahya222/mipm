<?php 
session_start();

if( !isset($_SESSION["login_ppdb"]) ){
    header("Location: login.php");
    exit;
}

require 'function.php';

// ambil data dari url
$id = $_SESSION["id"];

// query data ppdb
$ppdb = query("SELECT * FROM ppdb WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil PPDB</title>
</head>
<body>    
    <ul>
        <li>
            <?php if (!$ppdb["bukti_pembayaran"] && !$ppdb["verifikasi"]) { ?>
            <div style="background-color: red; heght: 100px; width: 600px; color: white;">
                <br>
                <p>Belum Upload Bukti Pembayaran</p>
                <br>
            </div>
            <?php } elseif ($ppdb["bukti_pembayaran"] && !$ppdb["verifikasi"]) { ?>
            <div style="background-color: yellow; heght: 100px; width: 600px; color: black;">
                <br>
                <p>Sedang Diverivikasi, Mohon Tunggu proses ini memakan waktu maksimal 3 hari kerja</p>
                <br>
            </div>
            <?php } elseif ($ppdb["bukti_pembayaran"] && $ppdb["verifikasi"]) { ?>
                <div style="background-color: green; heght: 100px; width: 600px; color: white;">
                    <br>
                    <p>Sudah Diverivikasi</p>
                    <br>
                </div>
            <?php } else {?>
                <div style="background-color: orange; heght: 100px; width: 600px; color: white;">
                    <br>
                    <p>Terjadi Error</p>
                    <br>
                </div>
            <?php } ?>
        </li>
        <li><a href="cetak.php" target="_blank">Cetak PDF</a></li>
        <li><p><?= $ppdb["nama"];?></p></li>
        <li><p><?= $ppdb["jk"];?></p></li>
        <li><p><?= $ppdb["asal_sekolah"];?></p></li>
        <li><p><?= $ppdb["no_telepon"];?></p></li>
        <li><a href="logout.php" class="btn btn-danger">Logout</a></li>
        <li><a href="upload.php" class="btn btn-danger">Upload</a></li>
    </ul>


    
</body>
</html>