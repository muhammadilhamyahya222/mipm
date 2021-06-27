<?php  
session_start();
require 'function.php';

    // cek cookie
    if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT email FROM ppdb WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if( $key === hash('sha256', $row['email']) ) {
            $_SESSION['login_ppdb'] = true;
            $_SESSION ['id'] = $row['id'];

            // Untuk menarik id
            $id = $_SESSION["id"];
            $ppdb = query("SELECT * FROM ppdb WHERE id = $id")[0];

            if (!$ppdb["nama"] && !$ppdb["jk"] && !$ppdb["asal_sekolah"] && !$ppdb["no_telepon"] && !$ppdb["alamat"]) {
                header("Location: lengkapiProfil.php");
                exit;
            } else {
                header("Location: profilPeserta.php");
                exit;
            }
            exit;
        }
    }

    //cek session
    if(isset($_SESSION["login_ppdb"]) ){
        $_SESSION ['id'] = $row['id'];

        // Untuk menarik id
        $id = $_SESSION["id"];
        $ppdb = query("SELECT * FROM ppdb WHERE id = $id")[0];
        
        if (!$ppdb["nama"] && !$ppdb["jk"] && !$ppdb["asal_sekolah"] && !$ppdb["no_telepon"] && !$ppdb["alamat"]) {
            header("Location: lengkapiProfil.php");
            exit;
        } else {
            header("Location: profilPeserta.php");
            exit;
        }
        exit;
    }

    
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM ppdb WHERE email = '$email'");

        // cek username
        if( mysqli_num_rows($result) === 1){

            // cek password
            $row = mysqli_fetch_assoc($result);
            if($password AND $row["password"] ){
                // set session
                $_SESSION["login_ppdb"] = true;
                $_SESSION ['id'] = $row['id'];
                
                // Untuk menarik id
                $id = $_SESSION["id"];
                $ppdb = query("SELECT * FROM ppdb WHERE id = $id")[0];
                
                //cek remember me
                if( isset($_POST["remember"])){
                    // buat cookie
                    setcookie('id', $row['id'], time()+3600);
                    setcookie('key', hash('sha256', $row['username']), time()+3600);
                }
                if (!$ppdb["nama"] && !$ppdb["jk"] && !$ppdb["asal_sekolah"] && !$ppdb["no_telepon"] && !$ppdb["alamat"]) {
                    header("Location: lengkapiProfil.php");
                    exit;
                } else {
                    header("Location: profilPeserta.php");
                    exit;
                }
                exit;
            }
        }
        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="login.css">
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>

        <form action="" method="POST">

            <div class="textbox">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Email" name="email" autofocus autocomplete="off">
            </div>
            <div class="textbox">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="password" autofocus autocomplete="off">
            </div>
            <div>
                <div class="remember">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" id="label">Remember me</label>
                </div>
            </div>
            <button class="btn" type=" submit" name="login">Login</button>
            <button class="btn" type="submit" name="registrasi"><a href="daftar.php">Registrasi</button>
        </form>
        <?php if(isset($error) ): ?>
        <p style="color: red; font-style: italic;" id="kesalahan"> username/password salah</p>
        <?php endif; ?>
    </div>
</body>

</html>