<?php

/**
 *���ݿ���ʰ�����
 */
include('config.php');
class sqlhelper
{
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
	 * ִ�в�ѯ����
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
		mysql_close($db);
		return $result;
	}


	/**
	 * ִ��ɾ�������¡��Ȳ������޷���
	 *
	 * @param mixed $cmd This is a description
	 * @return mixed This is the return value description
	 *
	 */	public static function process($cmd)
	{
		global $db_host,$db_user,$db_pass,$db_name;
		$db = mysql_connect($db_host,$db_user,$db_pass) or die("�������ݿ�ʧ�ܣ�");
		mysql_query("SET NAMES 'GBK'");  //���ò�ѯ���Ϊ����	
		mysql_select_db($db_name,$db) or die("���ݿⲻ���ڣ�");
		mysql_query($cmd,$db) or die("��������");
		$rows_count = mysql_affected_rows();
		mysql_close($db);
		return $rows_count;
	}
}

?>