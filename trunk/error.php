<?php
session_start();
?>

<html>
<head>
<title></title>
<script>
//设置页面等待时间
	var num =3;
    setInterval(run, 1000);
    function run()
    {
		if (num <= 0)
		{
			document.location = "login.php";
		}
        document.getElementById("time").innerHTML = num;
		num--;
    }
</script>
</head>
<body>

<?php
echo $_SESSION["remind"];
echo '<br>';
?>

 您将在  <span id="time">
</span>  &nbsp 秒后跳转到第一个链接地址。 
<br>
<a href="login.php">如果页面没有刷新，请点击这里返回</a> 
</body>
</html>