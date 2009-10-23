<?php

/**
 *数据库访问帮助器
 */
include('config.php');
class sqlhelper
{
	
	/**
	 * 私有成员
	 */
	/*private $dbhost = '';
	private $dbuser ='' ;
	private $dbpassword = '';
	private $dbdatabase = '';*/
	
	
	/**
	 * 构造函数
	 */
	function sqlhelper()
	{
		
	}
	
	
	/**
	 * 析构函数
	 */
	function __destruct()
	{
		echo "析构函数<br />";
	}
	
	
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
	
	/**
	 * This is a query method
	 * @access public
	 * @return table
	 */
	public static function query($cmd)
	{
		global $db_host,$db_user,$db_pass,$db_name;
		$db = mysql_connect($db_host,$db_user,$db_pass) or die("连接数据库失败！");
		mysql_query("SET NAMES 'GBK'");  //设置查询结果为中文	
		mysql_select_db($db_name,$db) or die("数据库不存在！");
		$result = mysql_query($cmd) or die("查询失败 ！");
		return $result;
	}
	
	public static function process($cmd)
	{
		global $db_host,$db_user,$db_pass,$db_name;
		$db = mysql_connect($db_host,$db_user,$db_pass) or die("连接数据库失败！");
		mysql_query("SET NAMES 'GBK'");  //设置查询结果为中文	
		mysql_select_db($db_name,$db) or die("数据库不存在！");
		mysql_query($cmd,$db);
		$rows_count = mysql_affected_rows();
		mysql_close($db);
	}
	
	
	
	
}

?>