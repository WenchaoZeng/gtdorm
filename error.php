<?php
session_start();
echo $_SESSION["remind"];

//��ҳ��ͣ��3��


$url = "login.php";
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>