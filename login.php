<?php
session_start();
require_once('includes/common.php');
session_destroy();

//��ҳ����Ҫ����session,
//error_reporting(2047);
//session_destroy();

/**
 * ��̨��¼ҳ��
 * Created by zwc at 2009��10��27��
*/
$iden = $_SESSION["authnum_session"];

/**
 * ����ִ�е�¼
 *
 * @throws �Ѻ�����
 */
function Login($username, $password, $checkcode)
{
	//��ҳ����Ҫ����session,
	//error_reporting(2047);
	//session_destroy();
	
	$checkNum = $_SESSION["code"];
	// ��֤������Ч�Լ���ȫ��
	if ($username == "" || $password == "" || $checkcode == "")
	{
		javascript::alert("�û���, �������֤�붼����Ϊ��");
		javascript::redirec("login.php");
		return 0;
	}

	// ��֤
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
		javascript::alert("��֤�벻��ȷ��");
	}
	else if ($result == 2)
	{
		session_start();
		$_SESSION["remind"] = '�û����������������������';
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
<title>�������ϵͳ</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<script language="javascript">
<!--
	
	-->
</script>
</head>
<body onload="window.document.forms[0].username.focus();" id="login-body">
	<h1>�������ϵͳ</h1>
    
	<form id="login" name="login" method="post" action="login.php">
    
    	<label for="username">�û�����</label>
		<input type="text" id="username" name="username" value="<?= $_POST["username"]?>"/><br />

        <label for="password">��&nbsp;&nbsp;�룺</label>
        <input type="password" id="password" name="password" /><br />

        <label for="checkcode">��֤�룺</label>
        <input type="text" id="checkcode" name="checkcode" />
        <img id="check" src="check.php" alt="���ˢ��" title="�����壿���������һ����֤�롣" style="cursor:pointer;" onclick= "this.src=this.src+'?'" /><br />

        <input type="submit" id="login_btn" name="submit" value="����" />
	</form>
	
</body>
</html>