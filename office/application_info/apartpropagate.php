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
</head>

<body onfocus="change()">

<div id="header_area">
<?php require_once("../../includes/widgets/header.php"); ?>
</div>

<div id="leftbar">
<?php require_once("../../includes/widgets/office.php")?>
</div>


<div id="content">
	<h2>���մ�ѧѧ����Ԣ����չ����������</h2>
    
	<table>
		<tr>
			<th>���벿��</th>
			<td><input type="text" /></td>
			<th>��ϵ��(��ϵ��ʽ)</th>
			<td><input type="text" /></td>
		</tr>
        <tr>
        	<th>�����</th>
            <td colspan="3"><input type="text" /></td>
        </tr>
    </table>
    
    <h3>�ڷű���</h3>
    <table>
    	<tr>
        	<th>��������</th>
            <td><input type="text" /></td>
            <th>�ڷŵص�</th>
            <td><input type="text" /></td>
        </tr>
        <tr>
        	<th>�ڷ�ʱ��</th>
            <td colspan="3"><input type="text" />��<input type="text" /></td>
        </tr>
        <tr>
        	<th>��Ҫ����</th>
            <td><textarea></textarea></td>
        </tr>
    </table>
    
    <h3>���Һ��</h3>
    <table>
    	<tr>
        	<th>�������</th>
            <td><input type="text" /></td>
            <th>��׼��</th>
            <td>ѧ׼<input type="text" />��</td>
        </tr>
        <tr>
        	<th>�������</th>
            <td colspan="3"><textarea></textarea></td>
        </tr>
        <tr>
        	<th>����ʱ��</th>
            <td colspan="3"><input type="text" />��<input type="text" /></td>
        </tr>
        <tr>
        	<th>���ҵص�</th>
            <td colspan="3"><input type="text" /></td>
        </tr>
    </table>
    
    <h3>��̯���</h3>
    <table>
    	<tr>
        	<th>��̯����</th>
            <td><textarea></textarea></td>
        </tr>
        <tr>
        	<th>��̯ʱ��</th>
            <td><input type="text" />��<input type="text" /></td>
        </tr>
        <tr>
        	<th>��̯�ص�</th>
            <td><input type="text" /></td>
        </tr>
    </table>
    
    <h3>ɢ������</h3>
  <table>
    	<tr>
        	<th>�������ݣ�������</th>
            <td><textarea></textarea></td>
        </tr>
    </table>
    
    <div id="btns">
    	<input type="submit" value="�ύ����" />
    </div>
    
    <p>
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
