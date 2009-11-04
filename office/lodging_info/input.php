<?php
//住宿信息录入
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>住宿信息录入</title>
<link rel="stylesheet" type="text/css" href="../../styles/style.css" />

<style type="text/css">
fieldset
{
	margin:50px;
	padding:50px;
	width:400px;
	color:#333; 
	border:#06c dashed 1px;
}
</style>

<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>
</head>

<body onload="change()">

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/office.php")?>
</div>


<div id="content">
<h1>住宿信息录入</h1>

<fieldset id="dormitoryinfo">
<legend>选择学生信息</legend>

<select id="college" name="college">
<option>--请选择学院--</option>
<option>计算机学院</option>
<option>京江学院</option>
<option>外国语</option>
<option>汽车学院</option>
</select>

<select id="class" name="block">
<option>--请选择班级--</option>
<option>软件工程0601</option>
<option>通信工程0602</option>
<option>网络工程0601</option>
</select>

<select id="id" name ="id">
<option>--请选择学号--</option>
<option>3060605001</option>
<option>3060605002</option>
<option>3060605003</option>
<option>3060605004</option>
<option>3060605005</option>
<option>3060605006</option>
</select>
</fieldset>

<br>

<fieldset id="dormitory" name="dormitory">
<legend>选择宿舍信息</legend>
<select id="campus" name="campus">
<optin>--请选择校区--</optin>
<option>校本部</option>
<option>中山校区</option>
<option>北固校区</option>
</select>

<select id ="block" name="block">
<option>--请选择楼栋--</option>
<option>一区一栋</option>
<option>二区三栋</option>
<option>三区五栋</option>
<option>三区一栋</option>
<option>三区二栋</option>
<option>三区三栋</option>
<option>三区四栋</option>
<option>三区六栋</option>
<option>三区七栋</option>
</select>

<select id="dormitory" name="dormitory">
<option>--请选择宿舍--</option>
<option>201</option>
<option>301</option>
<option>401</option>
<option>501</option>
<option>601</option>
<option>701</option>
<option>801</option>
</select>

</fieldset>
<br>
<input type="submit" value="提交">

</div>

</body>
</html>
