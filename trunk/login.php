<?php
session_start();
require_once('includes/common.php');
session_destroy();

//在页首先要开启session,
//error_reporting(2047);
//session_destroy();

/**
 * 后台登录页面
 * Created by zwc at 2009年10月27日
*/
$iden = $_SESSION["authnum_session"];

/**
 * 尝试执行登录
 *
 * @throws 友好数据
 */
function Login($username, $password, $checkcode)
{
	//在页首先要开启session,
	//error_reporting(2047);
	//session_destroy();
	
	$checkNum = $_SESSION["code"];
	// 验证输入有效性及安全性
	if ($username == "" || $password == "" || $checkcode == "")
	{
		javascript::alert("用户名, 密码和验证码都不能为空");
		javascript::redirec("login.php");
		return 0;
	}

	// 验证
	$result = sqlhelper::query("select UserName,Password from users where UserName = '$username'");
	$row = mysql_fetch_array($result);

	if($checkcode != $_SESSION['code'])
	{
		return 1;
		
	}
	else if($password != $row["Password"])
	{
		return 2;
	}
	else
	{
		return 3;
	}
}


if ($_POST["submit"])
{
	$result = Login($_POST["username"], $_POST["password"], $_POST["checkcode"]);
	
	if($result ==1)
	{
		javascript::alert("验证码不正确！");
	}
	else if ($result == 2)
	{
		session_start();
		$_SESSION["remind"] = '用户名或密码错误，请重新输入';
		javascript::redirec("error.php");
	}
	else if($result == 3)
	{
		session_start();
		$_SESSION["name"]= $_POST["username"];
		$_SESSION["password"]	= $_POST["password"];
		javascript::redirec("welcome.php");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>宿舍管理系统</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<script language="javascript">
<!--
	
	-->
</script>
</head>
<body onload="window.document.forms[0].username.focus();" id="login-body">
	<h1>宿舍管理系统</h1>
    
	<form id="login" name="login" method="post" action="login.php">
    
    	<label for="username">用户名：</label>
		<input type="text" id="username" name="username" value="<?= $_POST["username"]?>"/><br />

        <label for="password">密&nbsp;&nbsp;码：</label>
        <input type="password" id="password" name="password" /><br />

        <label for="checkcode">验证码：</label>
        <input type="text" id="checkcode" name="checkcode" />
        <img id="check" src="check.php" alt="点击刷新" title="看不清？点击更换另一张验证码。" style="cursor:pointer;" onclick= "this.src=this.src+'?'" /><br />

        <input type="submit" id="login_btn" name="submit" value="进入" />
	</form>
	
</body>
</html>