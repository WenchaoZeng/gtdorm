<?php
//ס�޵�������
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>ס�޵�������</title>
<link rel="stylesheet" type="text/css" href="../../styles/style.css" />
<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>
<style type="text/css">
table
{
	border-collapse:collapse; /* �ؼ����ԣ��ϲ��������߿�(��ʵ���߿���2px������1px�����滹��1pxŶ) */
	border:solid black; /* ���ñ߿����ԣ���ʽ(solid=ʵ��)����ɫ(#999=��) */
	border-width:1px 1px 1px 1px; /* ���ñ߿�״��ϸ���� �� �� �� = ��Ӧ��1px 0 0 1px */
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
	<th>��    ��</th><td><input type="text"></td>
	<th>ѧ    Ժ</th><td><input type="text"></td>
	<th>��    ��</th><td><input type="text"></td>
</tr>
<tr>
	<th>ԭס����</th>
	<td>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
	</td>

	<th>��ס����</th>
	<td>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
	</td>
	<th>��ϵ����</th><td><input type ="text"></td>
</tr>

<tr>
	<th>�䶯ԭ��</th>
	<td colspan="5">
	<textarea cols="60" rows="10"></textarea><br>
	<label>ǩ��:</label><input type="text"><label>����:</label>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
	</td>
</tr>

<tr>
	<th>�༶���</th>
	<td colspan="5">
	<textarea cols="60" rows="10"></textarea><br>
	<label>ǩ��:</label><input type="text"><label>����:</label>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
	</td>
</tr>

<tr>
	<th>ѧԺ���</th>
	<td colspan="5">
	<textarea cols="60" rows="10"></textarea><br>
	<label>ǩ��:</label><input type="text"><label>����:</label>
	<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
	</td>
</tr>

<tr>
	<th>ѧУ���</th>
	<td colspan="5">
	<textarea cols="60" rows="10"></textarea><br>
	<label>ǩ��:</label><input type="text"><label>����:</label>
	<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
		<input type="text" style="width:20px;">
		<label>��</label>
	</td>
</tr>

</table>
<p>
˵����ѧ��Ӧ��д�������룬���༶ѧԺͬ��󣬷�����д�������<br>
�˱�һʽ�ķݣ������ߡ�ѧԺ��ѧ���������ڼ��Ÿ�һ�ݡ�
</p>
</div>

</body>
</html>
