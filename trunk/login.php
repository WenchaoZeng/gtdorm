<?php
/**
 * ��̨��¼ҳ��
 * Created by zwc at 2009��10��27��
*/


/**
 * ����ִ�е�¼
 *
 * @throws �Ѻ�����
 */
function Login($username, $password, $checkcode)
{
	// ��֤������Ч�Լ���ȫ��
	if ($username == "" || $password == "" || $checkcode == "")
	{
		return "�û���, �������֤�붼����Ϊ��";
	}

	// ��֤
	if ($username != $password)
	{
		return "�û���������Ҫһ��";
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
<title>�������ϵͳ</title>
</head>
<body>
	<h1>�������ϵͳ</h1>
    
	<form id="login" name="login" method="post" action="login.php">
    
    	<label for="username">�û�����</label>
		<input type="text" id="username" name="username" value="<?= $_POST["username"]?>"/>

        <label for="password">���룺</label>
        <input type="password" id="password" name="password" />

        <label for="checkcode">��֤�룺</label>
        <input type="text" id="checkcode" name="checkcode" />
        <img src="#" alt="���ˢ��">

        <input type="submit" id="submit" name="submit" value="����" />
	</form>
    
    <script type="text/javascript">
    	<?php echo $script;?>
    </script>
	
</body>
</html>