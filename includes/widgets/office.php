<?php
// ���߰칫ģ��Ķ�������
require_once(dirname(dirname(__FILE__))."/common.php");
?>



<ul id="sub_nav">
	<li><a class="sub_nav_item" href="<?php echo $virtualpath ?>/office/students_info/input.php">ѧ����Ϣ</a></li>
	<li><a class="sub_nav_item" href="<?php echo $virtualpath ?>/office/lodging_info/input.php">ס����Ϣ</a></li>
	<li><span class="sub_nav_selected_alt1">�걨����</span></li>
		<ul class="approval">
			<li><a href="<?php echo $virtualpath ?>/office/application_info/dormadjust.php">ס�޵�������</a></li>
			<li><a href="<?php echo $virtualpath ?>/office/application_info/apartpropagate.php">��Ԣ�����������</a></li>
			<li><a href="#">���������걨</a></li>
			<li><a href="#">�շ�ʹ������</a></li>
			<li><a href="#">ѧλ�����</a></li>
		</ul>
	<li><span class="sub_nav_selected_alt2">�������</span></li>
		<ul class="dorm_manage">
			<li><a href="<?php echo $virtualpath ?>/office/dormitorys_manage/bedsinfo.php">������Ϣ</a></li>
			<li><a href="#">���������÷�ͳ��</a></li>
			<li><a href="#">����Υ��ͳ��</a></li>
			<li><a href="#">ҹ������ͳ��</a></li>
			<li><a href="#">��������һ��</a></li>
		</ul>
	<li><a class="sub_nav_item" href="#">������Ϣ</a></li>
</ul>


