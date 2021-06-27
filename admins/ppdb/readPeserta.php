<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: ../loginAdmin.php");
    exit;
}


require 'functionPPDB.php';

$result = query("SELECT * FROM ppdb");


?>