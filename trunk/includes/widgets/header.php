<?php
// ͨ�õ�ҳ��ͷ��
$path = dirname(__FILE__);
require_once ($path.'/../helpers/sqlhelper.php');
?>
<h1>�������ϵͳ</h1>

<!-- ��ӭ��Ϣ -->
<div id="welcome">
	<?php 
	$username = $_SESSION['name'];
	$result = sqlhelper::query("select UserName,Password from Users where UserName = '$username'");
	$row = mysql_fetch_array($result);
	$password = $row["Password"];
	
if( ($_SESSION['name'] != '' ) && ($_SESSION['password'] == $row['Password']) )
	{
			$showtime = date("Y-m-d");
			echo "<span class='name'></span>";
			echo $_SESSION['name'];
			echo "</span>";
			echo "<span class='date'>";
			echo ", ����! ������ $showtime ��ӭ����½�������ϵͳ";
			echo "</span>";
	}
	else
	{
			echo "����û�е�¼�����˳����µ�¼";	
	}
	 ?>
</div>

<!-- ����Ա���� -->
<ul id="admin_nav">
	<li><a id="user_data" href="#">�û�����</a></li>
	<li><a id="maneger" href="#">����Ա����</a></li>
	<li><a id="exit" href="../../login.php">�˳�ϵͳ</a></li>
</ul>

<!-- �������� -->
<ul id="main_nav">
<?php


$row = mysql_fetch_row($result);

if($_SESSION['name'] != "")
	{
	
	echo "<li><a class='selected' href='/office/index.php'>���߰칫</a></li>";
	echo "<li><a href='/query/index.php'>���ݲ�ѯ</a></li>";
	echo "<li><a href='/resource/index.php'>������Դ</a></li>";
	echo "<li><a href='/system/index.php'>ϵͳά��</a></li>";
		
	}
 ?>
</ul>
<!---������������-->

<!-- �Ŷ���Ϣ -->
<div id="gteam_info">
	Powered by <a href="http://www.g-team.cn" target="_blank">GTeam</a>
</div>
