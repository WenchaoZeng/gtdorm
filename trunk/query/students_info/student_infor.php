<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>ѧ����Ϣ��ѯ</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="../../styles/style.css">
<script src="../../js/studentinfo_input.js"></script>
<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>
</head>
<body onfocus="change_query()">

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/query.php")?>
</div>

<div id="content">
<h1>���մ�ѧѧ����Ϣ��ѯ</h1>
</div>
<form>

<fieldset id="query">
<legend>��ѯ����</legend>
<select>
</select>
</fieldset>

</form>
</body>
</html>