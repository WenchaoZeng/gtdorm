<?php

$virtualpath = "http://zwc.heliohost.org/gtdorm";

$root = dirname(dirname(__FILE__));


/**
 * 包含所有的helper文件
*/

require_once($root."/includes/helpers/sqlhelper.php");
require_once($root."/includes/helpers/javascript.php");

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