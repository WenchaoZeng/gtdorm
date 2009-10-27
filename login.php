<?php
// 后台登录页面
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>欢迎使用gtdorm宿舍管理系统</title>
</head>
<body>
	<h1>欢迎使用gtdorm宿舍管理系统</h1>
	<form id="login" name="login" action="login.php">
		<input type="text" id="username" name="username" />
        <input type="password" id="password" name="password" />
        <input type="text" id="checkcode" name="checkcode" />
        <input type="submit" id="submit" name="submit" value="进入" />
	</form>
</body>
</html>