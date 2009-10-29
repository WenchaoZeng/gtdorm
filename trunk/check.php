<?
Header("Content-type:image/png");
//定义header，声明图片文件，最好是png，无版权之扰;
//生成新的四位整数验证码
session_start();//开启session;
$authnum_session = '';
$str = 'abcdefghijkmnpqrstuvwxyz1234567890';
//定义用来显示在图片上的数字和字母;
$l = strlen($str); //得到字串的长度;
//循环随机抽取四位前面定义的字母和数字;
for($i=1;$i<=4;$i++)
{
	$num=rand(0,$l-1);
	//每次随机抽取一位数字;从第一个字到该字串最大长度,
	//减1是因为截取字符是从0开始起算;这样34字符任意都有可能排在其中;
	$authnum_session.= $str[$num];
	//将通过数字得来的字符连起来一共是四位;
}
$_SESSION['code'] = $authnum_session;
//session_register("authnum_session");
//用session来做验证也不错;注册session,名称为authnum_session,
//其它页面只要包含了该图片
//即可以通过$_SESSION["authnum_session"]来调用

//生成验证码图片，
srand((double)microtime()*1000000);
$im = imagecreate(60,20);//图片宽与高;

//主要用到黑白灰三种色;
$bgcolor = ImageColorAllocate($im,rand(0,255),rand(0,255),rand(0,255));
$white = ImageColorAllocate($im, 255,255,255);

//背景色
//srand((double)microtime()*1000000);
//$gray = ImageColorAllocate($im, rand(1,255),rand(1,255),rand(1,255));

//将四位整数验证码绘入图片
//imagefill($im,68,30,$gray);
//如不用干扰线，注释就行了;
$li = ImageColorAllocate($im,rand(1,255),rand(100,255),rand(1,255));

for($i=0;$i<5;$i++)
{//加入3条干扰线;也可以不要;视情况而定，因为可能影响用户输入;
	imageline($im,rand(0,30),rand(0,21),rand(20,40),rand(0,21),$li);
}
//字符在图片的位置;
imagestring($im, 6, 12, 1, $authnum_session, $white);

for($i=0;$i<90;$i++)
{//加入干扰象素
	imagesetpixel($im, rand()%70 , rand()%30 , $gray);
}

ImagePNG($im);
ImageDestroy($im);
?> 