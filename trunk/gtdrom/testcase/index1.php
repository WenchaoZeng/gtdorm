<?php

class sql_execute
{
	var $str = "";
	
	function __construct($str)
	{
		//$this->sql_execute($str);	
		$this->str = $str;
	}
		
	function display()
	{
		echo $this->str;
	}
}

?>