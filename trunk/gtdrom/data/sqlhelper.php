<?php

/**
 *数据库访问帮助器
 */
class sqlhelper
{
	
	/**
	 * 构造函数
	 */
	function __construct()
	{
		echo "构造函数<br />";
	}
	
	
	/**
	 * 析构函数
	 */
	function __destruct()
	{
		echo "析构函数<br />";
	}
	
	
	/**
	 * 私有成员
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