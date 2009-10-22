<?php

include ('index1.php');

$sql = new sql_execute("hello ryan");
echo $sql->display();

?>