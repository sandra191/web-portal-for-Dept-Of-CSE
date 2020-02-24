<?php
$server="localhost";
$username="root";
$password="";
$database="db_sample";
$db_handle=mysql_connect($server,$username,$password);
if(!$db_handle)
	echo "Can't Connect";
$selected=mysql_select_db($database,$db_handle);
if(!$selected)
echo"Database Error";
?>