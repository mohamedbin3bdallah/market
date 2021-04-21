<?php
if(isset($_SESSION['admin']))
{
	include('../libs/products.php');
	$arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
	$english = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
	
	if(isset($_GET['oldid']) && $_GET['oldid'] != '')
	{
		$product = getProductByID($_GET['oldid']);
	}

	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;
	$noOfproducts = getnoOfProducts();
	$totalPages = ceil($noOfproducts / $resultsPerPage);

	if(isset($_POST['saveproduct']))
	{
		unset($_POST['saveproduct']);		
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateProduct($_POST['oldid'],$_POST['pcode'],$_POST['title'],$_POST['price']);
		elseif(!uniquePCde($_POST['pcode'])) insertProduct($_POST['pcode'],$_POST['title'],$_POST['price']);		
		header('location: products.php');
	}
}
else header('location: ../');
?>