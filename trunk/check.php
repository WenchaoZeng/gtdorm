<?
Header("Content-type:image/png");
//����header������ͼƬ�ļ��������png���ް�Ȩ֮��;
//�����µ���λ������֤��
session_start();//����session;
$authnum_session = '';
$str = 'abcdefghijkmnpqrstuvwxyz1234567890';
//����������ʾ��ͼƬ�ϵ����ֺ���ĸ;
$l = strlen($str); //�õ��ִ��ĳ���;
//ѭ�������ȡ��λǰ�涨�����ĸ������;
for($i=1;$i<=4;$i++)
{
	$num=rand(0,$l-1);
	//ÿ�������ȡһλ����;�ӵ�һ���ֵ����ִ���󳤶�,
	//��1����Ϊ��ȡ�ַ��Ǵ�0��ʼ����;����34�ַ����ⶼ�п�����������;
	$authnum_session.= $str[$num];
	//��ͨ�����ֵ������ַ�������һ������λ;
}
$_SESSION['code'] = $authnum_session;
//session_register("authnum_session");
//��session������֤Ҳ����;ע��session,����Ϊauthnum_session,
//����ҳ��ֻҪ�����˸�ͼƬ
//������ͨ��$_SESSION["authnum_session"]������

//������֤��ͼƬ��
srand((double)microtime()*1000000);
$im = imagecreate(60,20);//ͼƬ�����;

//��Ҫ�õ��ڰ׻�����ɫ;
$bgcolor = ImageColorAllocate($im,rand(0,255),rand(0,255),rand(0,255));
$white = ImageColorAllocate($im, 255,255,255);

//����ɫ
//srand((double)microtime()*1000000);
//$gray = ImageColorAllocate($im, rand(1,255),rand(1,255),rand(1,255));

//����λ������֤�����ͼƬ
//imagefill($im,68,30,$gray);
//�粻�ø����ߣ�ע�;�����;
$li = ImageColorAllocate($im,rand(1,255),rand(100,255),rand(1,255));

for($i=0;$i<5;$i++)
{//����3��������;Ҳ���Բ�Ҫ;�������������Ϊ����Ӱ���û�����;
	imageline($im,rand(0,30),rand(0,21),rand(20,40),rand(0,21),$li);
}
//�ַ���ͼƬ��λ��;
imagestring($im, 6, 12, 1, $authnum_session, $white);

for($i=0;$i<90;$i++)
{//�����������
	imagesetpixel($im, rand()%70 , rand()%30 , $gray);
}

ImagePNG($im);
ImageDestroy($im);
?> 