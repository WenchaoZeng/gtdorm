<?php
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
	// 验证输入有效性及安全性
	if ($username == "" || $password == "" || $checkcode == "")
	{
		return "用户名, 密码和验证码都不能为空";
	}

	// 验证
	if ($username != $password)
	{
		return "用户名和密码要一样";
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
</head>
<body>
	<h1>宿舍管理系统</h1>
    
	<form id="login" name="login" method="post" action="login.php">
    
    	<label for="username">用户名：</label>
		<input type="text" id="username" name="username" value="<?= $_POST["username"]?>"/>

        <label for="password">密码：</label>
        <input type="password" id="password" name="password" />

        <label for="checkcode">验证码：</label>
        <input type="text" id="checkcode" name="checkcode" />
        <img src="#" alt="点击刷新">

        <input type="submit" id="submit" name="submit" value="进入" />
	</form>
    
    <script type="text/javascript">
    	<?php echo $script;?>
    </script>
	
</body>
</html>