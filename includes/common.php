<?php
/**
 * �������е�helper�ļ�
*/

require_once("helpers/sqlhelper.php");

function alert($str)
{
	echo "<script language='javascript'>";
	echo "alert('$str')";
	echo "</script>";
}

function redirec($str)
{
	echo "<script language='javascript'>";
	echo "document.location = '$str'";
	echo "</script>";
}

?>