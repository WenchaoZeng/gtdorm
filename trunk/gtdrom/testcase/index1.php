<?php

class sql_execute
{
	var $str = "";
	
	function __construct($str)
	{
		//$this->sql_execute($str);	
		$this->str = $str;
	}
	
//	function sql_execute($st)
//	{
//		$this->str = $st;
//	}
		
	function display()
	{
		echo $this->str;
	}
}

?>