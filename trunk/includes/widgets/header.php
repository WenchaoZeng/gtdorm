<?php
// 通用的页面头部
$path = dirname(__FILE__);
require_once ($path.'/../helpers/sqlhelper.php');
?>
<h1>宿舍管理系统</h1>

<!-- 欢迎信息 -->
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
			echo ", 您好! 今天是 $showtime 欢迎您登陆宿舍管理系统";
			echo "</span>";
	}
	else
	{
			echo "您还没有登录，请退出重新登录";	
	}
	 ?>
</div>

<!-- 管理员导航 -->
<ul id="admin_nav">
	<li><a id="user_data" href="#">用户资料</a></li>
	<li><a id="maneger" href="#">管理员设置</a></li>
	<li><a id="exit" href="../../login.php">退出系统</a></li>
</ul>

<!-- 主导航条 -->
<ul id="main_nav">
<?php


$row = mysql_fetch_row($result);

if($_SESSION['name'] != "")
	{
	
	echo "<li><a class='selected' href='/office/index.php'>在线办公</a></li>";
	echo "<li><a href='/query/index.php'>数据查询</a></li>";
	echo "<li><a href='/resource/index.php'>宿舍资源</a></li>";
	echo "<li><a href='/system/index.php'>系统维护</a></li>";
		
	}
 ?>
</ul>
<!---主导航条结束-->

<!-- 团队信息 -->
<div id="gteam_info">
	Powered by <a href="http://www.g-team.cn" target="_blank">GTeam</a>
</div>
