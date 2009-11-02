<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="background:#fff;">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>出错了！</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<script>
//设置页面等待时间
	var num =13;
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
<div id="errorbox">
<?php
echo $_SESSION["remind"];
echo '<br>';
?>

 <br />您将在  <span id="time">
</span>  &nbsp 秒后跳转到第一个链接地址。 
<br>
<a href="login.php">如果页面没有刷新，请点击这里返回</a> 
</div>
</body>
</html>