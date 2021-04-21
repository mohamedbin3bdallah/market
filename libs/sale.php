<?php
function insertSale($product,$invoice,$size,$quantity,$total)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `sales` (`product`,`invoice`,`size`,`quantity`,`total`) values ('$product','$invoice','$size','$quantity','$total')");
	if($stmt->execute())
	{
		$stmt1 = $dbh->prepare("insert into `invoices` (`product`,`invoice`,`size`,`quantity`,`total`) values ('$product','$invoice','$size','$quantity','$total')");
		if($stmt1->execute())
		{
			$stmt2 = $dbh->prepare("update sizes set quantity = quantity-$quantity where product = '$product' and size = '$size'");
			$stmt2->execute();
		}
	}
	//return $dbh->lastInsertId();
	include("../libs/closedb.php");
}
/*
function insertInvoice($product,$invoice,$size,$quantity,$total)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `invoices` (`product`,`invoice`,`size`,`quantity`,`total`) values ('$product','$invoice','$size','$quantity','$total')");
	if($stmt->execute()) updateSize($product,$size,$quantity);
	//return $dbh->lastInsertId();
	include("../libs/closedb.php");
}

function updateSize($product,$size,$quantity)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update sizes set quantity = quantity-$quantity where product = '$product' and size = '$size'");
	$stmt->execute();
	include("../libs/closedb.php");
}
*/
?>