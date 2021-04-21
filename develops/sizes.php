<?php
if(isset($_SESSION['admin']))
{
	include('../libs/sizes.php');
	
	if(isset($_GET['oldid']) && $_GET['oldid'] != '')
	{
		$size = getSizeByID($_GET['oldid']);
	}
	
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;	
	$noOfsizes = getnoOfSizes($_GET['pcode']);
	
	$totalPages = ceil($noOfsizes / $resultsPerPage);

	if(isset($_POST['savesize']))
	{
		unset($_POST['savesize']);
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateSize($_POST['oldid'],$_GET['pcode'],$_POST['size'],$_POST['quantity']);
		elseif(!uniquePSize($_GET['pcode'],$_POST['size'])) insertSize($_GET['pcode'],$_POST['size'],$_POST['quantity']);
		header('location: sizes.php?pcode='.$_GET['pcode']);
	}
}
else header('location: ../');
?>