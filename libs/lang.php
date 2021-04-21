<?php
if(isset($_COOKIE['userid']) && $_SERVER['SCRIPT_NAME'] != '/arise/index.php')
{
	$userid = $_COOKIE['userid'];
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select lang from admins where id like '$userid'");
	$row = $result->fetch();	
	include("../libs/closedb.php");
	if(!empty($row['lang'])) $lang_file = $row['lang'];
	else $lang_file = 'ar';
	$lang_file_path = "../languages/$lang_file.php";
	include($lang_file_path);
}
elseif(isset($_COOKIE['lang']))
{	
	$lang_file = $_COOKIE['lang'];
	include("languages/$lang_file.php");
}
else
{
	$lang_file = 'ar';
	include("languages/$lang_file.php");
}
?>