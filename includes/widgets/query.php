<?php
// ���߰칫ģ��Ķ�������
?>



<ul id="sub_nav">
	<li><a class="selected" href="/office/students_info/input.php">ѧ����Ϣ</a></li>
	<li><a href="#">ס����Ϣ</a></li>
	<li><a href="#" onclick="javascript:show_item1();return false;">�걨����</a></li>
	<li><a href="#" onclick="javascript:show_item2();return false;">�������</a></li>
	<li><a href="#">������Ϣ</a></li>
</ul>
<ul id="approval">
	<li><a href="#">ס�޵�������</a></li>
	<li><a href="#">��Ԣ�����������</a></li>
	<li><a href="#">���������걨</a></li>
	<li><a href="#">�շ�ʹ������</a></li>
	<li><a href="#">ѧλ�����</a></li>
</ul>
<ul id="dorm_manage">
	<li><a href="#">���������÷�ͳ��</a></li>
	<li><a href="#">����Υ��ͳ��</a></li>
	<li><a href="#">ҹ������ͳ��</a></li>
	<li><a href="#">��������һ��</a></li>
</ul>

<script type="text/javascript">
	var item1=document.getElementById("approval");
	var item2=document.getElementById("dorm_manage");
	function office_init(){
		item1.style.display="none";
		item2.style.display="none";
	}
	function show_item1(){
		if(item1.style.display=="none"){
			item1.style.display="";
			item2.style.display="none";
			}
		else{
			item1.style.display="none";
			item2.style.display="none";
			}
	}
	function show_item2(){
		if(item2.style.display=="none"){
			item2.style.display="";
			item1.style.display="none";
			}
		else{
			item2.style.display="none";
			item1.style.display="none";
			}
	}
	office_init();
</script>