<?php
session_start();
echo $_SESSION["remind"];

//ÔÚÒ³ÃæÍ£Áô3Ãë


$url = "login.php";
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>