<?php

include ("../data/sqlhelper.php");

$result  =sqlhelper::process("delete from test where ID = 10");
echo "��Ӱ�������.$result"

?>