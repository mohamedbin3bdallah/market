<?php
session_start();
if(isset($_SESSION['admin']))
{
	if(isset($_GET['id'],$_GET['product'],$_GET['invoice'],$_GET['size'],$_GET['quantity'],$_GET['total']))
	{
		include('../libs/back.php');
		updateProductSize($_GET['product'],$_GET['size'],$_GET['quantity']);
		deleteProductSale($_GET['id']);
		insertBack($_GET['product'],$_GET['invoice'],$_GET['size'],$_GET['quantity'],$_GET['total']);
		header('location: ../pages/sales.php');
	}
}
else header('location: ../login.php');
?>