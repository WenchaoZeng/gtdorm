<?php
include_once("../data/sqlhelper.php");
$result = sqlhelper::query('select * from test');
while ($row = mysql_fetch_array($result))
{
	echo $row['name'];
}

?>