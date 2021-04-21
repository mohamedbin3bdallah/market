<?php
function updateSize($product,$size,$quantity)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update sizes set quantity = quantity+$quantity where product = '$product' and size = '$size'");
	$stmt->execute();
	include("../libs/closedb.php");
}

function deleteSale($product,$invoice,$size)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$stmt = $dbh->prepare("delete from sales where product = '$product' and invoice = '$invoice' and size = '$size'");
	$stmt->execute();
	include("../libs/closedb.php");
}

function updateSale($product,$invoice,$size,$quantity,$total)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update sales set quantity = quantity-$quantity,total = total-$total where product = '$product' and invoice = '$invoice' and size = '$size'");
	$stmt->execute();
	include("../libs/closedb.php");
}

function insertback($product,$invoice,$size,$oldquantity,$quantity,$total)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `backs` (`product`,`invoice`,`size`,`quantity`,`total`) values ('$product','$invoice','$size','$quantity','$total')");
	if($stmt->execute())
	{
		updateSize($product,$size,$quantity);
		if($oldquantity == $quantity)	deleteSale($product,$invoice,$size);
		else  updateSale($product,$invoice,$size,$quantity,$total);
	}
	//return $dbh->lastInsertId();
	include("../libs/closedb.php");
}
?>