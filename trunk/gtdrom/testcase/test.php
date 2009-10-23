<?php

include ("../data/sqlhelper.php");

$result  =sqlhelper::process("insert into test valus (10,'jing')");
echo "受影响的行数.$result"

?>