<?php
session_start();
if(isset($_SESSION['admin']))
{
	if(isset($_SESSION['mac'], $_SESSION['rmac']) && $_SESSION['mac'] == $_SESSION['rmac'])
	{
	if(isset($_GET['pcode']) && ($_GET['pcode'] != 0 || $_GET['pcode'] != ''))
	{
	include("../languages/".$_SESSION['adminlang'].".php");
	include('../develops/sizes.php');
	if($_SESSION['adminlang'] == "ar")		
	echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<?php include('../designs/head.php'); ?>
<script type="text/javascript" src="../js/sizes.js"></script>
</head>
<body>
<div class="container">
<?php include('../designs/containers/sizes.php'); ?>
<?php include('../designs/footer.php'); ?>
</div>
</body>
</html>
<?php
	} else echo header('location:products.php');
	} else echo header('location:../delete.php');
} else echo header('location:../');
?>