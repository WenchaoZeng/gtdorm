<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="background:#fff;">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>�����ˣ�</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<script>
//����ҳ��ȴ�ʱ��
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

 <br />������  <span id="time">
</span>  &nbsp �����ת����һ�����ӵ�ַ�� 
<br>
<a href="login.php">���ҳ��û��ˢ�£��������ﷵ��</a> 
</div>
</body>
</html>