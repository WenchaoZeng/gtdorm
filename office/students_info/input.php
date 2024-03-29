<?php
// 住宿信息录入
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>住宿信息录入</title>
<link rel="stylesheet" type="text/css" href="../../styles/style.css" />

<script src="../../js/studentinfo_input.js"></script>
<script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../js/dropdown.js"></script>

</head>
<body onfocus="change()">

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/office.php")?>
</div>


<div id="content">

<h1>住宿信息录入</h1>

<form id="info_input" name="info_input" method="post" action="input.php">

<fieldset id="basic_info">
	<legend>基本信息</legend>
    
    <label for="Name">姓名</label>
	<input type="text" name="Name" id="Name" maxlength="20" onblur="checkname('this')" /><br />
	<span id ="checkname"></span>
    
    <label for="Sex">性别</label>
    <span id="Sex">
		<input type="radio" name="Sex" id="Male" value="男" /><label for="Male">男</label>
		<input type="radio" name="Sex" id="Female" value="女" /><label for="Female">女</label>
    </span><br />
    
    
    <label for="IDCard">身份证号码</label>
	<input type="text" name="IDCard" id="IDCard" maxlength="20" /><br />
    
    <label for="BirthDate">出生日期</label>
	<input type="text" name="BirthDate" id="BirthDate" /><br />
    
    <label for="Political">政治面貌</label>
    <span id="Political">
    	<input type="radio" name="Political" value="共青团员" id="共青团员" /><label for="共青团员">共青团员</label>
    	<input type="radio" name="Political" value="共产党员" id="共产党员" /><label for="共产党员">共产党员</label>
    </span><br />
    
</fieldset>

<fieldset id="home_info">
	<legend>家庭信息</legend>
    
    <label for="Address">家庭住址</label>
	<input type="text" name="Address" id="Address"/><br />
    
    <label for="HomeNumber">家庭电话</label>
	<input type="text" name="HomeNumber" id="HomeNumber" maxlength="16" /><br />
    
    <label for="FatherName">父亲姓名</label>
    <input type="text" name="FatherName" id="FatherName" maxlength="20" /><br />
    
    <label for="FatherUnit">父亲单位</label>
    <input type="text" name="FatherUnit" id="FatherUnit" maxlength="40" /><br />
    
    <label for="MotherName">母亲姓名</label>
    <input type="text" name="MotherName" id="MotherName" maxlength="20" /><br />
    
    <label for="MotherUnit">母亲单位</label>
    <input type="text" name="MotherUnit" id="MotherUnit" maxlength="40" /><br />
    
</fieldset>

<fieldset id="incampus_info">
	<legend>在校信息</legend>
    
    <label for="StudentID">学号</label>
	<input type="text" name="StudentID" id="StudentID" /><br />
    
    <label for="College">学院</label>
	<input type="text" name="College" id="College" maxlength="40" /><br />
    
    <label for="Class">班级</label>
	<input type="text" name="Class" id="Class" maxlength="40" /><br />
    
    <label for="Academic">学制</label>
    <span id="Academic">
    	 <input type="radio" name="Academic"  value="2" id="两年制" /><label for="两年制">两年制</label>
    	<input type="radio" name="Academic"  value="3" id="三年制" /><label for="三年制">三年制</label>
    </span><br />
   
    
    <label for="Type">类别</label>
    <span id="Type">
    	<input type="radio" name="Type" value="普通本科" id="普通本科" /><label for="普通本科">普通本科</label>
    	<input type="radio" name="Type" value="本科B" id="本科B" /><label for="本科B">本科B</label>
    </span><br />
    
    
    <label for="AntranceYear">入学时间</label>
    <input type="text" name="AntranceYear" id="AntranceYear" /><br />
    
    <label for="GraduationYear">毕业时间</label>
    <input type="text" name="GraduationYear" id="GraduationYear" /><br />
        
</fieldset>

<fieldset id="stay_info">
	<legend>住宿信息</legend>
    开发中
</fieldset>

<fieldset id="other_info">
	<legend>其他信息</legend>
    
    <label for="Remark">备注</label>
	<textarea name="Remark" id="Remark" rows="5" cols="30"></textarea>
    
</fieldset>

<!-- 提交 -->
<input type="submit" id="submit" name="submit" value="提交" />

</form>

</div><!-- end of  content -->

</body>
</html>