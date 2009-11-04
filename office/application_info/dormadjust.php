<?php
//住宿调整申请
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>住宿调整申请</title>
<link rel="stylesheet" type="text/css" href="../../styles/style.css" />
<style type="text/css">
table
{
	border-collapse:collapse; /* 关键属性：合并表格内外边框(其实表格边框有2px，外面1px，里面还有1px哦) */
	border:solid black; /* 设置边框属性；样式(solid=实线)、颜色(#999=灰) */
	border-width:1px 1px 1px 1px; /* 设置边框状粗细：上 右 下 左 = 对应：1px 0 0 1px */
}

table td
{
	border:solid black;
	border-width:0 1px 1px 0;
	padding:5px;
	text-align:center;
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
<table id="dormadjust">
<tr>
	<td>姓    名</td><td><input type="text"></td>
	<td>学    院</td><td><input type="text"></td>
	<td>班    级</td><td><input type="text"></td>
</tr>
<tr>
	<td>原住宿舍</td><td><input type="text"></td>
	<td>拟住宿舍</td><td><input type="text"></td>
	<td>联系方法</td><td><input type ="text"></td>
</tr>

<tr>
	</td><td><textarea></textarea>
</tr>

</table>
</div>

</body>
</html>
