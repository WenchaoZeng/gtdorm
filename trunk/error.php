<?php
session_start();
?>

<html>
<head>
<title></title>
<script>
	var num = 3;
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

�����������ѡ�񣬽���  <span id="time">
</span>  &nbsp �����ת����һ�����ӵ�ַ�� 
<br>
<a href="login.php">���ҳ��û��ˢ�£��������ﷵ��</a> 
</body>
</html>