<?php

include ("../includes/sqlhelper.php");
$cmd = "select * from test";
$result = sqlhelper::query($cmd);
while($row =mysql_fetch_array($result))
{
	echo $row["Name"].'<br>';	
}


?>