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
		$db = mysql_connect($db_host,$db_user,$db_pass);
		mysql_select_db($db_name,$db);
		mysql_query("SET NAMES 'GBK'");	
		$sql = $cmd;
		$result = mysql_query($sql);
		return $result;
	}
	
	
}

?>