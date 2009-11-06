<?php
// 在线办公模块的二级导航
require_once(dirname(dirname(__FILE__))."/common.php");
?>



<ul id="sub_nav">
	<li><a class="sub_nav_item" href="<?php echo $virtualpath ?>/office/students_info/input.php">学生信息</a></li>
	<li><a class="sub_nav_item" href="<?php echo $virtualpath ?>/office/lodging_info/input.php">住宿信息</a></li>
	<li><span class="sub_nav_selected_alt1">申报审批</span></li>
		<ul class="approval">
			<li><a href="<?php echo $virtualpath ?>/office/application_info/dormadjust.php">住宿调整申请</a></li>
			<li><a href="<?php echo $virtualpath ?>/office/application_info/apartpropagate.php">公寓区宣传活动申请</a></li>
			<li><a href="#">文明宿舍申报</a></li>
			<li><a href="#">空房使用申请</a></li>
			<li><a href="#">学位服租借</a></li>
		</ul>
	<li><span class="sub_nav_selected_alt2">宿舍管理</span></li>
		<ul class="dorm_manage">
			<li><a href="<?php echo $virtualpath ?>/office/dormitorys_manage/bedsinfo.php">宿舍信息</a></li>
			<li><a href="#">宿舍卫生得分统计</a></li>
			<li><a href="#">宿舍违纪统计</a></li>
			<li><a href="#">夜不归宿统计</a></li>
			<li><a href="#">典型宿舍一览</a></li>
		</ul>
	<li><a class="sub_nav_item" href="#">其他信息</a></li>
</ul>


