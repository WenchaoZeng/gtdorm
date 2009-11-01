<?php
class javascript
{
	
	static function alert($str)
	{
		echo "<script language='javascript'>";
		echo "alert('$str')";
		echo "</script>";
	}
	
	static function redirec($str)
	{
		echo "<script language='javascript'>";
		echo "document.location = '$str'";
		echo "</script>";
	}

}

?>