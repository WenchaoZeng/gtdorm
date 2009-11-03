<?php
// 在线办公模块的默认页面
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>在线办公</title>
<link rel="stylesheet" type="text/css" href="../styles/style.css" />
<script type="text/javascript" src="../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$("ul.approval li:even").addClass("alt");
    $('span.sub_nav_selected_alt1').click(function () {
	$('ul.approval').slideToggle('medium');return false
    });
	$('ul.approval li a').mouseover(function () {
	$(this).animate({ fontSize: "13px", paddingLeft: "14px" }, 50 );
    });
	$('ul.approval li a').mouseout(function () {
	$(this).animate({ fontSize: "12px", paddingLeft: "10px" }, 50 );
    });
	
	$("ul.dorm_manage li:even").addClass("alt");
    $('span.sub_nav_selected_alt2').click(function () {
	$('ul.dorm_manage').slideToggle('medium');return false;
    });
	$('ul.dorm_manage li a').mouseover(function () {
	$(this).animate({ fontSize: "13px", paddingLeft: "14px" }, 50 );
    });
	$('ul.dorm_manage li a').mouseout(function () {
	$(this).animate({ fontSize: "12px", paddingLeft: "10px" }, 50 );
    });
});
</script>
</head>
<body>

<div id="header_area">
<?php require_once("../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../includes/widgets/office.php")?>
</div>


<div id="content">

</div><!-- end of  content -->

</body>
</html>