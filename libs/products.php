<?php
function getProductByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from products where id = '$id'");
	$allrows = array();
	if(!empty($result))
	{
		$row = $result->fetch();
		$allrows['title'] = $row['title'];
		$allrows['pcode'] = $row['pcode'];
		$allrows['price'] = $row['price'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

function getnoOfProducts()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from products");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function getProducts($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = $dbh->query("select * from products order by pcode ASC LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = $result->fetch(); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['pcode'] = $row['pcode'];
			$allrows[$i]['price'] = $row['price'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function uniquePCde($pcode)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = $dbh->query("select count(*) as count from products where pcode = '$pcode'");
	$row = $result->fetch();
	include("../libs/closedb.php");
	return $row['count'];
}

function updateProduct($id,$pcode,$title,$price)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update products set pcode = '$pcode',title = '$title',price = '$price' where id = '$id'");
	$stmt->execute();	
	include("../libs/closedb.php");
}

function insertProduct($pcode,$title,$price)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `products` (`pcode`,`title`,`price`) values ('$pcode','$title','$price')");
	$stmt->execute();
	//return $dbh->lastInsertId();
	include("../libs/closedb.php");
}

?>