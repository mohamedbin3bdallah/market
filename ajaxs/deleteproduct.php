<?php
if(isset($_POST['pcode']))
{	
	$pcode = $_POST['pcode'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select count(*) as count from sizes where product = '$pcode'");
	$row = $result->fetch();
	if($row['count'] == 0)
	{
		$stmt = $dbh->prepare("delete from products where pcode = '$pcode'");
		$stmt->execute();
		echo 1;
	}
	else echo 0;
	include("../libs/closedb.php");
   exit;
}
?>