<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>ѧ��ס����Ϣ��ѯ</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="../../styles/style.css">
<script src="../../js/studentinfo_input.js"></script>
<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>
<script type="text/javascript">
$(document).ready
(
	function()
	{
		$("#person").click
		(
			function()
			{
				$("#show").load("../../includes/widgets/personal_query.php");
			}
		)
	}
)
</script>
</head>
<body onfocus="change_query()">

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/query.php")?>
</div>

<div id="content">
<h1>���մ�ѧѧ��ס����Ϣ��ѯ</h1>

<form>
<div id="search_area">
<!--������Ϣ��ѯ-->
<fieldset id="student_query">

<legend>���˲�ѯ</legend>
<label id="id">ѧ��:</label>
<input type="text">
<input id="person" type ="button" value="��ѯ" name="person">

</fieldset>

<!--�༶��ѯ-->
<fieldset id="class_query">
<legend>���Ų�ѯ</legend>
<select id="college">
<option>--��ѡ��ѧԺ--</option>
<option>�����ѧԺ</option>
<option>�ܶ�ѧԺ</option>
<option>��ѧԺ</option>
<option>����ѧԺ</option>
</select>

<select id="class">
<option>--��ѡ��༶--</option>
<option>���0602</option>
<option>���0601</option>
<option>����0602</option>
<option>����0602</option>
<option>ͨ��0602</option>
<option>ͨ��0602</option>
</select>

<input type="submit" value=" ��ѯ">
</fieldset>

<!--������Ϣ��ѯ-->
<fieldset id="dormitory_query">
<legend>�����ѯ</legend>

<select id="campus">
<option>--��ѡ��У��--</option>
<option>У����</option>
<option>����У��</option>
<option>��ɽУ��</option>
</select>

<select id="region">
<option>--��ѡ������--</option>
<option>����</option>
<option>����</option>
<option>����</option>

</select>

<select id="block">
<option>--��ѡ��¥��--</option>
<option>����һ��</option>
<option>��������</option>
<option>��������</option>
<option>�����Ķ�</option>
<option>�����嶰</option>
</select>

<select id="dormitory">
<option>--��ѡ������--</option>
<option>101</option>
<option>102</option>
<option>103</option>
<option>104</option>
<option>105</option>
<option>106</option>
<option>107</option>
</select>

<input type="submit" value="��ѯ" name="region">

</fieldset>
</div>

<table id="show" class="data_table">

</table>

</form>
</div>
</body>
</html>