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
<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>
<style type="text/css">
fieldset
{
	margin:50px;
	padding:50px;
	width:300px;
	margin-left:300px;
	color:#333; 
	border:#bfd0e5 1px solid
}

#container tr td input
{
	margin-left:20px;
	margin-top:10px;
}

#submit
{
	position:absolute;
	left:430px;
	top:400px;
}
</style>
</head>

<body onfocus="change()">

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


<table id="container">
<tr>
	<td><label for="campus">校区</label></td>
	<td><input name="campus" id="campus" type ="text"></td>
</tr>

<tr>
	<td><label for="region">区号</label></td>
	<td><input type ="text" name="region" id="region"></td>
</tr>

<tr>
	<td><label for="block">楼栋</label></td>
	<td><input name="block" id="block" type="text"></td>
</tr>

<tr>
	<td><label for="dormitoryid">宿舍号</label></td>
	<td><input type="text" name="dormitory" id="dormitoryid"></td>
</tr>

<tr>
	<td><label for="type">宿舍类型</label></td>
	<td><input type ="text" name="type" id="type"></td>
</tr>

<tr>
	<td><label for ="telephone">宿舍电话</label></td>
	<td><input id="tel" type ="text" name ="telephone" id=""telephone></td>
</tr>
<input id="submit" type ="submit" value="提交">

</table>


</fieldset>

</form>
</div>

</body>
</html>
