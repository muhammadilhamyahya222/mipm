<?php  
session_start();
require 'function-Admin.php';



    // cek cookie
    if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM admins WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if( $key === hash('sha256', $row['username']) ) {
            $_SESSION['login'] = true;
        }
    }

    //cek session
    if(isset($_SESSION["login"]) ){
        header("Location: index.php");
        exit;
    }


    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM admins WHERE username = '$username'");

        // cek username
        if( mysqli_num_rows($result) === 1){

            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"]) ){
                // set session
                $_SESSION["login"] = true;
                
                //cek remember me
                if( isset($_POST["remember"])){
                    // buat cookie
                    setcookie('id', $row['id'], time()+3600);
                    setcookie('key', hash('sha256', $row['username']), time()+3600);
                }
                header("Location: index.php");
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
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/login.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <form action="" method="POST">

            <div class="textbox">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Username" name="username" autofocus autocomplete="off">
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
            <button class="btn" type="submit" name="registrasi"><a href="registrasiAdmin.php">Registrasi</button>
        </form>
        <?php if(isset($error) ): ?>
        <p style="color: red; font-style: italic;" id="kesalahan"> username/password salah</p>
        <?php endif; ?>
    </div>
</body>

</html>