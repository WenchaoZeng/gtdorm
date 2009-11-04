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
<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>
<style type="text/css">
table
{
	border-collapse:collapse; /* 关键属性：合并表格内外边框(其实表格边框有2px，外面1px，里面还有1px哦) */
	border:solid black; /* 设置边框属性；样式(solid=实线)、颜色(#999=灰) */
	border-width:1px 1px 1px 1px; /* 设置边框状粗细：上 右 下 左 = 对应：1px 0 0 1px */
	text-align:center;
}

table td,th
{
	border:solid black;
	border-width:0 1px 1px 0;
	padding:5px;
	text-align:center;
}

table input
{
	text-align:center;
}

</style>

</head>

<body onload="change()">

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/office.php")?>
</div>


<div id="content">
<table id="dormadjust">
<tr>
	<th>姓    名</th><td><input type="text"></td>
	<th>学    院</th><td><input type="text"></td>
	<th>班    级</th><td><input type="text"></td>
</tr>
<tr>
	<th>原住宿舍</th>
	<td>
		<input type="text" style="width:20px;">
		<label>区</label>
		<input type="text" style="width:20px;">
		<label>栋</label>
		<input type="text" style="width:20px;">
		<label>室</label>
	</td>

	<th>拟住宿舍</th>
	<td>
		<input type="text" style="width:20px;">
		<label>区</label>
		<input type="text" style="width:20px;">
		<label>栋</label>
		<input type="text" style="width:20px;">
		<label>室</label>
	</td>
	<th>联系方法</th><td><input type ="text"></td>
</tr>

<tr>
	<th>变动原因</th>
	<td colspan="5">
	<textarea cols="60" rows="10"></textarea><br>
	<label>签字:</label><input type="text"><label>日期:</label>
		<input type="text" style="width:20px;">
		<label>年</label>
		<input type="text" style="width:20px;">
		<label>月</label>
		<input type="text" style="width:20px;">
		<label>日</label>
	</td>
</tr>

<tr>
	<th>班级意见</th>
	<td colspan="5">
	<textarea cols="60" rows="10"></textarea><br>
	<label>签字:</label><input type="text"><label>日期:</label>
		<input type="text" style="width:20px;">
		<label>年</label>
		<input type="text" style="width:20px;">
		<label>月</label>
		<input type="text" style="width:20px;">
		<label>日</label>
	</td>
</tr>

<tr>
	<th>学院意见</th>
	<td colspan="5">
	<textarea cols="60" rows="10"></textarea><br>
	<label>签字:</label><input type="text"><label>日期:</label>
	<input type="text" style="width:20px;">
		<label>年</label>
		<input type="text" style="width:20px;">
		<label>月</label>
		<input type="text" style="width:20px;">
		<label>日</label>
	</td>
</tr>

<tr>
	<th>学校意见</th>
	<td colspan="5">
	<textarea cols="60" rows="10"></textarea><br>
	<label>签字:</label><input type="text"><label>日期:</label>
	<input type="text" style="width:20px;">
		<label>年</label>
		<input type="text" style="width:20px;">
		<label>月</label>
		<input type="text" style="width:20px;">
		<label>日</label>
	</td>
</tr>

</table>
<p>
说明：学生应先写书面申请，经班级学院同意后，方可填写此申请表。<br>
此表一式四份，申请者、学院、学工处、后勤集团各一份。
</p>
</div>

</body>
</html>
