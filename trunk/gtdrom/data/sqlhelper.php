<?php

/**
 *���ݿ���ʰ�����
 */
class sqlhelper
{
	
	/**
	 * ���캯��
	 */
	function __construct()
	{
		echo "���캯��<br />";
	}
	
	
	/**
	 * ��������
	 */
	function __destruct()
	{
		echo "��������<br />";
	}
	
	
	/**
	 * ˽�г�Ա
	 * @var string 
	 */
	private static $word = "hello";
	
	/**
	 * This is method say
	 *@access public
	 * @return string a word to say something
	 *
	 */
	public static function say()
	{
		return self::$word;
	}
}

?>