<?php 
    session_start();

    if( !isset($_SESSION["login"]) ){
        header("Location: ../loginAdmin.php");
        exit;
    }
    
    require 'functionPPDB.php';

    $id = $_GET["id"];

    if ( hapusDataPPDB($id) > 0) {
        echo "<script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>";
    } else{
        echo "<script>
                alert('data gagal dihapus');
                document.location.href = 'index.php';
            </script>";
    }

?>
