<?php

/**
 *���ݿ���ʰ�����
 */
include('config.php');
class sqlhelper
{
	
	/**
	 * ˽�г�Ա
	 */
	/*private $dbhost = '';
	private $dbuser ='' ;
	private $dbpassword = '';
	private $dbdatabase = '';*/
	
	
	/**
	 * ���캯��
	 */
	function sqlhelper()
	{
		
	}
	
	
	/**
	 * ��������
	 */
	function __destruct()
	{
		echo "��������<br />";
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