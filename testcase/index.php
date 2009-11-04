<html>
<head>
<title></title>

<style type="text/css">
ul li
{
	display:inline;
	width:100px;
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
	background:no-repeat url("../styles/image/nav-item-down-bg.png"); 
}

ul .click
{
	background:no-repeat url("../styles/image/leftbar-item-down-bg.png"); 	
}
</style>

<script type="text/javascript">
<!--
function change()
{
	document.getElementById("online").className = "click";
}
//-->
</script>


</head>

<body onload="change()">

<?php
include ("include.php");
?>

<input type="button" value="click" >
</body>
</html>