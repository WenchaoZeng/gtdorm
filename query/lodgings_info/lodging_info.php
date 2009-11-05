<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>学生住宿信息查询</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="../../styles/style.css">
<script src="../../js/studentinfo_input.js"></script>
<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>
</head>
<body onfocus="change_query()">

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/query.php")?>
</div>

<div id="content">
<h1>江苏大学学生住宿信息查询</h1>

<form>
<div id="search_area">
<!--个人信息查询-->
<fieldset id="student_query">

<legend>个人查询</legend>
<label id="id">学号:</label>
<input type="text">
<input type ="submit" value="查询" name="person">

</fieldset>

<!--班级查询-->
<fieldset id="class_query">
<legend>部门查询</legend>
<select id="college">
<option>--请选择学院--</option>
<option>计算机学院</option>
<option>能动学院</option>
<option>理学院</option>
<option>汽车学院</option>
</select>

<select id="class">
<option>--请选择班级--</option>
<option>软件0602</option>
<option>软件0601</option>
<option>网络0602</option>
<option>网络0602</option>
<option>通信0602</option>
<option>通信0602</option>
</select>

<input type="submit" value=" 查询">
</fieldset>

<!--区域信息查询-->
<fieldset id="dormitory_query">
<legend>区域查询</legend>

<select id="campus">
<option>--请选择校区--</option>
<option>校本部</option>
<option>北固校区</option>
<option>中山校区</option>
</select>

<select id="region">
<option>--请选择区号--</option>
<option>三区</option>
<option>四区</option>
<option>五区</option>

</select>

<select id="block">
<option>--请选择楼栋--</option>
<option>三区一栋</option>
<option>三区二栋</option>
<option>三区三栋</option>
<option>三区四栋</option>
<option>三区五栋</option>
</select>

<select id="dormitory">
<option>--请选择宿舍--</option>
<option>101</option>
<option>102</option>
<option>103</option>
<option>104</option>
<option>105</option>
<option>106</option>
<option>107</option>
</select>

<input type="submit" value="查询" name="region">

</fieldset>
</div>

<table id="show" class="data_table">
<tr class="table_head">
	<th>学号</th><th>姓名</th><th>学院</th><th>班级</th><th>楼栋</th><th>宿舍</th>
</tr>

<tr>
	<td>3060601019</td>
	<td>李明</td>
	<td>计算机学院</td>
	<td>软件工程0602</td>
	<td>三区五栋</td>
	<td>109</td>
</tr>

<tr>
	<td>3060601018</td>
	<td>陈芳</td>
	<td>计算机学院</td>
	<td>软件工程0602</td>
	<td>三区五栋</td>
	<td>109</td>
</tr>


<tr>
	<td>3060601017</td>
	<td>方浩</td>
	<td>计算机学院</td>
	<td>软件工程0602</td>
	<td>三区五栋</td>
	<td>107</td>
</tr>


<tr>
	<td>3060601011</td>
	<td>薛明</td>
	<td>计算机学院</td>
	<td>软件工程0602</td>
	<td>三区五栋</td>
	<td>107</td>
</tr>



<tr>
	<td>3060601016</td>
	<td>成成</td>
	<td>计算机学院</td>
	<td>软件工程0602</td>
	<td>三区五栋</td>
	<td>106</td>
</tr>


<tr>
	<td>3060601015</td>
	<td>云蕾</td>
	<td>计算机学院</td>
	<td>软件工程0602</td>
	<td>三区五栋</td>
	<td>105</td>
</tr>
</table>

</form>
</div>
</body>
</html>