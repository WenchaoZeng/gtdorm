<?php
// 在线办公模块的二级导航
?>



<ul id="sub_nav">
	<li><a class="selected" href="/office/students_info/input.php">学生信息</a></li>
	<li><a href="#">住宿信息</a></li>
	<li><a href="#" onclick="javascript:show_item1();return false;">申报审批</a></li>
	<li><a href="#" onclick="javascript:show_item2();return false;">宿舍管理</a></li>
	<li><a href="#">其他信息</a></li>
</ul>
<ul id="approval">
	<li><a href="#">住宿调整申请</a></li>
	<li><a href="#">公寓区宣传活动申请</a></li>
	<li><a href="#">文明宿舍申报</a></li>
	<li><a href="#">空房使用申请</a></li>
	<li><a href="#">学位服租借</a></li>
</ul>
<ul id="dorm_manage">
	<li><a href="#">宿舍卫生得分统计</a></li>
	<li><a href="#">宿舍违纪统计</a></li>
	<li><a href="#">夜不归宿统计</a></li>
	<li><a href="#">典型宿舍一览</a></li>
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