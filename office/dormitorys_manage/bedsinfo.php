<?php
//��λ��Ϣ¼��
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>������Ϣ¼��</title>
<link rel="stylesheet" type="text/css" href="../../styles/style.css" />
<style type="text/css">
fieldset
{
	margin:50px;
	padding:50px;
	width:270px;
	color:#333; 
	border:#06c dashed 1px;
}
</style>
</head>

<body>

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/office.php")?>
</div>


<div id="content">
<h1>������Ϣ��¼��</h1>
<form id="lodging_info" name="lodging_info" method="post" action="bedsinfo.php">

<fieldset id="lodginginfo">
<legend>������Ϣ¼��</legend><br>

<label for="campus">У��</label>
<input name="campus" id="campus" type ="text"><br>

<label for="region">����</label>
<input type ="text" name="region" id="region"><br>

<label for="block">¥��</label>
<input name="block" id="block" type="text"><br>

<label for="dormitoryid">�����</label>
<input type="text" name="dormitory" id="dormitoryid"><br>

<label for="type">��������</label>
<input type ="text" name="type" id="type"><br>

<label for ="telephone">����绰</label>
<input type ="text" name ="telephone" id=""telephone><br>


<label for =""></label>
</fieldset>

</form>
</div>

</body>
</html>
