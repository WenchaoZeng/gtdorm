<?php
//ס����Ϣ¼��
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>ס����Ϣ¼��</title>
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
<h1>ס����Ϣ¼��</h1>

<fieldset id="dormitoryinfo">
<legend>ѡ��ѧ����Ϣ</legend>

<select id="college" name="college">
<option>--��ѡ��ѧԺ--</option>
<option>�����ѧԺ</option>
<option>����ѧԺ</option>
<option>�����</option>
<option>����ѧԺ</option>
</select>

<select id="class" name="block">
<option>--��ѡ��༶--</option>
<option>�������0601</option>
<option>ͨ�Ź���0602</option>
<option>���繤��0601</option>
</select>

<select id="id" name ="id">
<option>--��ѡ��ѧ��--</option>
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
<legend>ѡ��������Ϣ</legend>
<select id="campus" name="campus">
<optin>--��ѡ��У��--</optin>
<option>У����</option>
<option>��ɽУ��</option>
<option>����У��</option>
</select>

<select id ="block" name="block">
<option>--��ѡ��¥��--</option>
<option>һ��һ��</option>
<option>��������</option>
<option>�����嶰</option>
<option>����һ��</option>
<option>��������</option>
<option>��������</option>
<option>�����Ķ�</option>
<option>��������</option>
<option>�����߶�</option>
</select>

<select id="dormitory" name="dormitory">
<option>--��ѡ������--</option>
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
<input type="submit" value="�ύ">

</div>

</body>
</html>
