<?php
session_start();
//在页首先要开启session,
//error_reporting(2047);
session_destroy();

require_once ("includes/helpers/sqlhelper.php");

/**
 * 后台登录页面
 * Created by zwc at 2009年10月27日
*/


/**
 * 尝试执行登录
 *
 * @throws 友好数据
 */
function Login($username, $password, $checkcode)
{
	$checkNum = $_SESSION["authnum_session"];
	// 验证输入有效性及安全性
	if ($username == "" || $password == "" || $checkcode == "")
	{
		return "用户名, 密码和验证码都不能为空";
	}

	// 验证
	$result = sqlhelper::query("select UserName,Password from Users where UserName = '$username'");
	$row = mysql_fetch_array($result);
	
	if ($password != $row["Password"])
	{
		return "用户名或密码不正确！";
	}
	else if($checkcode != $_SESSION['authnum_session'])
	{
		return "验证码不正确！";
	}
	else
	{
		return "";
	}
}

$script = "";
//
if ($_POST["submit"])
{
	$result = Login($_POST["username"], $_POST["password"], $_POST["checkcode"]);
	if ($result != "")
	{
		$script = "alert('$result')";
	}
	else
	{
		$script = "document.location = 'welcome.php'";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>宿舍管理系统</title>
<script language="javascript">
<!--
function update()
	{
		var img  = document.getElementById('check');
		img.src="check.php";
	}
	-->
</script>
</head>
<body onload="window.document.forms[0].username.focus();">
	<h1>宿舍管理系统</h1>
    
	<form id="login" name="login" method="post" action="login.php">
    
    	<label for="username">用户名：</label>
		<input type="text" id="username" name="username" value="<?= $_POST["username"]?>"/>

        <label for="password">密码：</label>
        <input type="password" id="password" name="password" />

        <label for="checkcode">验证码：</label>
        <input type="text" id="checkcode" name="checkcode" />
        <img id="check" src="check.php" alt="点击刷新" title="看不清？点击更换另一张验证码。" style="cursor:pointer;" onclick= "javascript:this.src='check.php?tm='+Math.random()" />

        <input type="submit" id="submit" name="submit" value="进入" />
	</form>
    
    <script type="text/javascript">
	
    	<?php echo $script;?>
    </script>
	
</body>
</html>