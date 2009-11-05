<?php
//公寓区宣传活动申请
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>公寓区宣传活动申请</title>
<link rel="stylesheet" type="text/css" href="../../styles/style.css" />
<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>
</head>

<body onfocus="change()" id="apartpropagate">

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/office.php")?>
</div>


<div id="content">
	<h1>江苏大学学生公寓区开展宣传活动申请表</h1>
    <div class="table">
	<div class="division">
	<table>
		<tr>
			<th>申请部门：</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>联系人(联系方式)：</th>
			<td><input type="text" /></td>
		</tr>
        <tr>
        	<th>活动主题：</th>
            <td><input type="text" /></td>
        </tr>
    </table>
	</div>
    <h3>摆放标牌</h3>
	<div class="division">
    <table>
    	<tr>
        	<th>标牌数量：</th>
            <td><input type="text" /></td>
		</tr>
		<tr>
            <th>摆放地点：</th>
            <td><input type="text" /></td>
        </tr>
        <tr>
        	<th>摆放时间：</th>
            <td colspan="3"><input type="text" />至<input type="text" /></td>
        </tr>
        <tr>
        	<th>简要内容：</th>
            <td><textarea cols="30" rows="5"></textarea></td>
        </tr>
    </table>
	</div>
    <h3>悬挂横幅</h3>
	<div class="division">
    <table>
    	<tr>
        	<th>横幅数量：</th>
            <td><input type="text" /></td>
		</tr>
		<tr>
            <th>批准号：</th>
            <td>学准<input type="text" />号</td>
        </tr>
        <tr>
        	<th>横幅内容：</th>
            <td colspan="3"><textarea cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
        	<th>悬挂时间：</th>
            <td colspan="3"><input type="text" />至<input type="text" /></td>
        </tr>
        <tr>
        	<th>悬挂地点：</th>
            <td colspan="3"><input type="text" /></td>
        </tr>
    </table>
	</div>
    <h3>摆摊设点</h3>
	<div class="division">
    <table>
    	<tr>
        	<th>摆摊事由：</th>
            <td><textarea cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
        	<th>摆摊时间：</th>
            <td><input type="text" />至<input type="text" /></td>
        </tr>
        <tr>
        	<th>摆摊地点：</th>
            <td><input type="text" /></td>
        </tr>
    </table>
	</div>
    <h3>散发传单</h3>
	<div class="division">
  <table>
    	<tr>
        	<th>传单内容（份数）：</th>
            <td><textarea cols="50" rows="5"></textarea></td>
        </tr>
    </table>
	</div>
    	</div>
    <div id="btns">
    	<input type="submit" value="提交审批" />
    </div>

    
    <p class="discription">
   	  <strong>说明： </strong>1、本表一式两份，填写完毕后交学工处宿管科（学生公寓二区二栋107室）审批。 <br />
2、没有责任部门签字或盖章的申请单为无效申请，不予受理。 <br />
3、审批时间为每周的星期一到星期三，展板摆放、横幅悬挂时间截止到星期天晚7：00；若星期四、五来申请，则悬挂起始时间为下周一。 <br />
4、设置标牌、悬挂横幅及摆摊设点应严格在指定位置、时间段，横幅要印上批准号。 <br />
5、学工处宿管科将在每周星期天晚7：00对横幅、展板统一清理，若有需要并经审批可以继续悬挂的横幅，于下周一到学工处宿管科取回横幅到指定位置悬挂。 <br />
6、申请部门要维护好所设置的宣传标牌、悬挂的横幅，并在到期后及时收回。 <br />
7、摆摊设点、散发传单的部门要维护好摊点周围的环境卫生，不得妨碍道路交通。 </p>
    <p></p>
    
</div>

</body>
</html>
