<html>
<head>
<title>php爱好者_网页特效|www.phpfans.net|---页面停留时间</title>
</head><BODY onLoad="init(); window.setTimeout('show_secs()',1);">
<!-- 用<BODY onLoad="init(); window.setTimeout('show_secs()',1);">替换原有的<body> -->
<!--将以下代码加入HTML的<Body></Body>之间-->

<SCRIPT LANGUAGE="JAVASCRIPT">
<!--
var ap_name = navigator.appName;
var ap_vinfo = navigator.appVersion;
var ap_ver = parseFloat(ap_vinfo.substring(0,ap_vinfo.indexOf('(')));

var time_start = new Date();
var clock_start = time_start.getTime();
var dl_ok=false;

function init ()
{
if(ap_name=="Netscape" && ap_ver>=3.0)
dl_ok=true; 
return true;
}
function get_time_spent ()
{ 
var time_now = new Date();
return((time_now.getTime() - clock_start)/1000); 
}
function show_secs () // show the time user spent on the side
{ 
var i_total_secs = Math.round(get_time_spent()); 
var i_secs_spent = i_total_secs % 60;
var i_mins_spent = Math.round((i_total_secs-30)/60); 
var s_secs_spent = "" + ((i_secs_spent>9) ? i_secs_spent : "0" + i_secs_spent);
var s_mins_spent ="" + ((i_mins_spent>9) ? i_mins_spent : "0" + i_mins_spent);
document.fm0.time_spent.value = s_mins_spent + ":" + s_secs_spent;
window.setTimeout('show_secs()',1000); 
}
// -->
</SCRIPT>
<form name="fm0" onSubmit="0">
<FONT COLOR="#888888" size="-1">您在本网页的停留时间:</FONT><br>
<INPUT type="text" name="time_spent"">
</form>

</body></html>