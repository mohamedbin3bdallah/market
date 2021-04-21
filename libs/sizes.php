<?php

function getProductTitleByCode($pcode)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$resultpt = $dbh->query("select title from products where pcode = '$pcode'");
	$rowpt = $resultpt->fetch();				
	include("../libs/closedb.php");
	return $rowpt['title'];	
}

function getSizeByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from sizes where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = $result->fetch();
		$allrows['size'] = $row['size'];
		$allrows['quantity'] = $row['quantity'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

function getnoOfSizes($pcode)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from sizes where product = '$pcode'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getSizes($pcode,$startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from sizes where product = '$pcode' order by size LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['size'] = $row['size'];
			$allrows[$i]['quantity'] = $row['quantity'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function uniquePSize($pcode,$size)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from sizes where product = '$pcode' and size = '$size'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function updateSize($id,$product,$size,$quantity)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update sizes set product = '$product',size = '$size',quantity = '$quantity' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertSize($product,$size,$quantity)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `sizes` (`product`,`size`,`quantity`) values ('$product','$size','$quantity')");
	$stmt->execute();
	include("../libs/closedb.php");
}

?>