<? 
//checkNum.php 
session_start(); 
function random($len) 
{ 
	$srcstr="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
	mt_srand(); 
	$strs=""; 
	for($i=0;$i<$len;$i++){ 
		$strs.=$srcstr[mt_rand(0,35)]; 
	} 
	return strtoupper($strs); 
} 
$str=random(4); //随机生成的字符串 
$width = 50; //验证码图片的宽度 
$height = 25; //验证码图片的高度 
@header("Content-Type:image/png"); 
$_SESSION["code"] = $str; 
//echo $str; 
$im=imagecreate($width,$height); 
//背景色 
$back=imagecolorallocate($im,5,5,5); 
//模糊点颜色 

srand((double)microtime()*1000000);

$pix=imagecolorallocate($im,rand(30,255),rand(1,255),rand(1,255)); 
//字体色 
$font=imagecolorallocate($im,41,163,238); 
//绘模糊作用的点 
mt_srand(); 
for($i=0;$i<1000;$i++) 
{ 
	imagesetpixel($im,mt_rand(0,$width),mt_rand(0,$height),$pix); 
} 
imagestring($im, 5, 7, 5,$str, $font); 
imagerectangle($im,0,0,$width-1,$height-1,$font); 
Imagepng($im); 
Imagedestroy($im); 
die();
?>