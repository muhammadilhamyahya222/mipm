<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 4600);
setcookie('id', '', time() - 4600);

header("Location: loginAdmin.php");
exit;

?>