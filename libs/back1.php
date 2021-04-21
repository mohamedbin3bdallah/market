<?php
function updateProductSize($product,$size,$quantity)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("update sizes set quantity = quantity+$quantity where product = '$product' and size = '$size'");
	$stmt->execute();
	include("../libs/closedb.php");
}

function deleteProductSale($sale)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$stmt = $dbh->prepare("delete from sales where id = '$sale'");
	$stmt->execute();
	include("../libs/closedb.php");
}

function insertBack($product,$invoice,$size,$quantity,$total)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = $dbh->prepare("insert into `backs` (`product`,`invoice`,`size`,`quantity`,`total`) values ('$product','$invoice','$size','$quantity','$total')");
	$stmt->execute();	
	include("../libs/closedb.php");
}
?>