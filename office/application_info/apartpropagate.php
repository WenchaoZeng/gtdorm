<?php
//��Ԣ�����������
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>��Ԣ�����������</title>
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
	<h1>���մ�ѧѧ����Ԣ����չ����������</h1>
    <div class="table">
	<div class="division">
	<table>
		<tr>
			<th>���벿�ţ�</th>
			<td><input type="text" /></td>
		</tr>
		<tr>
			<th>��ϵ��(��ϵ��ʽ)��</th>
			<td><input type="text" /></td>
		</tr>
        <tr>
        	<th>����⣺</th>
            <td><input type="text" /></td>
        </tr>
    </table>
	</div>
    <h3>�ڷű���</h3>
	<div class="division">
    <table>
    	<tr>
        	<th>����������</th>
            <td><input type="text" /></td>
		</tr>
		<tr>
            <th>�ڷŵص㣺</th>
            <td><input type="text" /></td>
        </tr>
        <tr>
        	<th>�ڷ�ʱ�䣺</th>
            <td colspan="3"><input type="text" />��<input type="text" /></td>
        </tr>
        <tr>
        	<th>��Ҫ���ݣ�</th>
            <td><textarea cols="30" rows="5"></textarea></td>
        </tr>
    </table>
	</div>
    <h3>���Һ��</h3>
	<div class="division">
    <table>
    	<tr>
        	<th>���������</th>
            <td><input type="text" /></td>
		</tr>
		<tr>
            <th>��׼�ţ�</th>
            <td>ѧ׼<input type="text" />��</td>
        </tr>
        <tr>
        	<th>������ݣ�</th>
            <td colspan="3"><textarea cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
        	<th>����ʱ�䣺</th>
            <td colspan="3"><input type="text" />��<input type="text" /></td>
        </tr>
        <tr>
        	<th>���ҵص㣺</th>
            <td colspan="3"><input type="text" /></td>
        </tr>
    </table>
	</div>
    <h3>��̯���</h3>
	<div class="division">
    <table>
    	<tr>
        	<th>��̯���ɣ�</th>
            <td><textarea cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
        	<th>��̯ʱ�䣺</th>
            <td><input type="text" />��<input type="text" /></td>
        </tr>
        <tr>
        	<th>��̯�ص㣺</th>
            <td><input type="text" /></td>
        </tr>
    </table>
	</div>
    <h3>ɢ������</h3>
	<div class="division">
  <table>
    	<tr>
        	<th>�������ݣ���������</th>
            <td><textarea cols="50" rows="5"></textarea></td>
        </tr>
    </table>
	</div>
    	</div>
    <div id="btns">
    	<input type="submit" value="�ύ����" />
    </div>

    
    <p class="discription">
   	  <strong>˵���� </strong>1������һʽ���ݣ���д��Ϻ�ѧ�����޹ܿƣ�ѧ����Ԣ��������107�ң������� <br />
2��û�����β���ǩ�ֻ���µ����뵥Ϊ��Ч���룬�������� <br />
3������ʱ��Ϊÿ�ܵ�����һ����������չ��ڷš��������ʱ���ֹ����������7��00���������ġ��������룬��������ʼʱ��Ϊ����һ�� <br />
4�����ñ��ơ����Һ������̯���Ӧ�ϸ���ָ��λ�á�ʱ��Σ����Ҫӡ����׼�š� <br />
5��ѧ�����޹ܿƽ���ÿ����������7��00�Ժ����չ��ͳһ����������Ҫ�����������Լ������ҵĺ����������һ��ѧ�����޹ܿ�ȡ�غ����ָ��λ�����ҡ� <br />
6�����벿��Ҫά���������õ��������ơ����ҵĺ�������ڵ��ں�ʱ�ջء� <br />
7����̯��㡢ɢ�������Ĳ���Ҫά����̯����Χ�Ļ������������÷�����·��ͨ�� </p>
    <p></p>
    
</div>

</body>
</html>
