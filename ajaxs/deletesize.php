<?php
if(isset($_POST['pcode'],$_POST['size']))
{
	$pcode = $_POST['pcode'];
	$size = $_POST['size'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select count(*) as count from sales where product = '$pcode' and size = '$size'");
	$row = $result->fetch();
	if($row['count'] == 0)
	{
		$stmt = $dbh->prepare("delete from sizes where product = '$pcode' and size = '$size'");
		$stmt->execute();
		echo 1;
	}
	else echo 0;	
	include("../libs/closedb.php");
   exit;
}
?>