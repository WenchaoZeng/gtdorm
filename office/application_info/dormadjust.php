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
<style type="text/css">
table
{
	border-collapse:collapse; /* �ؼ����ԣ��ϲ��������߿�(��ʵ���߿���2px������1px�����滹��1pxŶ) */
	border:solid black; /* ���ñ߿����ԣ���ʽ(solid=ʵ��)����ɫ(#999=��) */
	border-width:1px 1px 1px 1px; /* ���ñ߿�״��ϸ���� �� �� �� = ��Ӧ��1px 0 0 1px */
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
	<td>��    ��</td><td><input type="text"></td>
	<td>ѧ    Ժ</td><td><input type="text"></td>
	<td>��    ��</td><td><input type="text"></td>
</tr>
<tr>
	<td>ԭס����</td><td><input type="text"></td>
	<td>��ס����</td><td><input type="text"></td>
	<td>��ϵ����</td><td><input type ="text"></td>
</tr>

<tr>
	</td><td><textarea></textarea>
</tr>

</table>
</div>

</body>
</html>
