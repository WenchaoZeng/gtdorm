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
		global $db_host,$db_user,$db_pass,$db_name;
		$db = mysql_connect($db_host,$db_user,$db_pass) or die("�������ݿ�ʧ�ܣ�");
		mysql_query("SET NAMES 'GBK'");  //���ò�ѯ���Ϊ����	
		mysql_select_db($db_name,$db) or die("���ݿⲻ���ڣ�");
		$result = mysql_query($cmd) or die("��ѯʧ�� ��");
		return $result;
	}
	
	public static function process($cmd)
	{
		global $db_host,$db_user,$db_pass,$db_name;
		$db = mysql_connect($db_host,$db_user,$db_pass) or die("�������ݿ�ʧ�ܣ�");
		mysql_query("SET NAMES 'GBK'");  //���ò�ѯ���Ϊ����	
		mysql_select_db($db_name,$db) or die("���ݿⲻ���ڣ�");
		mysql_query($cmd,$db);
		$rows_count = mysql_affected_rows();
		mysql_close($db);
	}
	
	
	
	
}

?>