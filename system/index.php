<?php
// 系统维护的默认页面
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>系统维护</title>
<link rel="stylesheet" type="text/css" href="../styles/style.css" />
<script type="text/javascript">
<!--
function change_system()
{
	document.getElementById("system").className = "clicked";
}
//-->
</script>
</head>
<body onfocus="change_system()">

<div id="header_area">
<?php require_once("../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../includes/widgets/system.php")?>
</div>

<div id="content">

</div><!-- end of  content -->

</body>
</html>