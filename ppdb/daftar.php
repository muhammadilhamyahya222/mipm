<?php 
require 'function.php';

    if( isset($_POST["register"]) ){
        
        if( daftarPPDB($_POST) > 0){
            echo "<script>
                    alert('admin baru berhasil ditambah!');
                </script>";
            header("Location: login.php");
            exit;
        }else{
        echo mysqli_error($conn);
    }
}  

?>


<!DOCTYPE html>
<html>

<head>
    <title>Regristasi</title>
    <link rel="stylesheet" type="text/css" media="screen" href="registrasi.css">
</head>

<body>
    <div class="login-box">
    <h1>Daftar Akun MIPM</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="textbox">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Email" name="email" autofocus autocomplete="off">
        </div>
        <div class="textbox">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" name="password" autofocus autocomplete="off">
        </div>
        <div class="textbox">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Konfirmasi Password" name="password2" autofocus autocomplete="off">
        </div>
            <button class="btn" type="submit" name="register">Daftar</button>
    </form>
    </div>
</body>

</html>