<?php
// ס����Ϣ¼��
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>ס����Ϣ¼��</title>
<link rel="stylesheet" type="text/css" href="../styles/style.css" />
</head>
<body>

<div id="header_area">
<?php require_once("../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../includes/widgets/office.php")?>
</div>


<div id="content">

<h1>ס����Ϣ¼��</h1>

<form id="info_input" name="info_input" method="post" action="info_input.php">

<fieldset>
	<legend>������Ϣ</legend>
    
    <label for="Name">����</label>
	<input type="text" name="Name" id="Name" maxlength="20" />
    
    <label for="Sex">�Ա�</label>
    <span id="Sex">
		<input type="radio" name="Sex" id="Male" value="��" /><label for="Male">��</label>
		<input type="radio" name="Sex" id="Female" value="Ů" /><label for="Female">Ů</label>
    </span>
    
    
    <label for="IDCard">���֤����</label>
	<input type="text" name="IDCard" id="IDCard" maxlength="20" />
    
    <label for="BirthDate">��������</label>
	<input type="text" name="BirthDate" id="BirthDate" />
    
    <label for="Political">������ò</label>
    <span id="Political">
    	<input type="radio" name="Political" value="������Ա" id="������Ա" /><label for="������Ա">������Ա</label>
    	<input type="radio" name="Political" value="������Ա" id="������Ա" /><label for="������Ա">������Ա</label>
    </span>
    
</fieldset>

<fieldset>
	<legend>��ͥ��Ϣ</legend>
    
    <label for="Address">��ͥסַ</label>
	<input type="text" name="Address" id="Address"/>
    
    <label for="HomeNumber">��ͥ�绰</label>
	<input type="text" name="HomeNumber" id="HomeNumber" maxlength="16" />
    
    <label for="FatherName">��������</label>
    <input type="text" name="FatherName" id="FatherName" maxlength="20" />
    
    <label for="FatherUnit">���׵�λ</label>
    <input type="text" name="FatherUnit" id="FatherUnit" maxlength="40" />
    
    <label for="MotherName">ĸ������</label>
    <input type="text" name="MotherName" id="MotherName" maxlength="20" />
    
    <label for="MotherUnit">ĸ�׵�λ</label>
    <input type="text" name="MotherUnit" id="MotherUnit" maxlength="40" />
    
</fieldset>

<fieldset>
	<legend>��У��Ϣ</legend>
    
    <label for="StudentID">ѧ��</label>
	<input type="text" name="StudentID" id="StudentID" />
    
    <label for="College">ѧԺ</label>
	<input type="text" name="College" id="College" maxlength="40" />
    
    <label for="Class">�༶</label>
	<input type="text" name="Class" id="Class" maxlength="40" />
    
    <label for="Academic">ѧ��</label>
    <span id="Academic">
    	 <input type="radio" name="Academic"  value="2" id="������" /><label for="������">������</label>
    	<input type="radio" name="Academic"  value="3" id="������" /><label for="������">������</label>
    </span>
   
    
    <label for="Type">���</label>
    <span id="Type">
    	<input type="radio" name="Type" value="��ͨ����" id="��ͨ����" /><label for="��ͨ����">��ͨ����</label>
    	<input type="radio" name="Type" value="����B" id="����B" /><label for="����B">����B</label>
    </span>
    
    
    <label for="AntranceYear">��ѧʱ��</label>
    <input type="text" name="AntranceYear" id="AntranceYear" />
    
    <label for="GraduationYear">��ҵʱ��</label>
    <input type="text" name="GraduationYear" id="GraduationYear" />
        
</fieldset>

<fieldset>
	<legend>ס����Ϣ</legend>
    ������
</fieldset>

<fieldset>
	<legend>������Ϣ</legend>
    
    <label for="Remark">��ע</label>
	<textarea name="Remark" id="Remark"></textarea>
    
</fieldset>

<!-- �ύ -->
<input type="submit" id="submit" name="submit" value="�ύ" />

</form>

</div><!-- end of  content -->

</body>
</html>