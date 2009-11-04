<?php
//床位信息录入
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>宿舍信息录入</title>
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
<h1>宿舍信息的录入</h1>
<form id="lodging_info" name="lodging_info" method="post" action="bedsinfo.php">

<fieldset id="lodginginfo">
<legend>宿舍信息录入</legend><br>

<label for="campus">校区</label>
<input name="campus" id="campus" type ="text"><br>

<label for="region">区号</label>
<input type ="text" name="region" id="region"><br>

<label for="block">楼栋</label>
<input name="block" id="block" type="text"><br>

<label for="dormitoryid">宿舍号</label>
<input type="text" name="dormitory" id="dormitoryid"><br>

<label for="type">宿舍类型</label>
<input type ="text" name="type" id="type"><br>

<label for ="telephone">宿舍电话</label>
<input type ="text" name ="telephone" id=""telephone><br>


<label for =""></label>
</fieldset>

</form>
</div>

</body>
</html>
