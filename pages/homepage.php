<?php
session_start();
if(isset($_SESSION['admin']))
{
	if(isset($_SESSION['mac'], $_SESSION['rmac']) && $_SESSION['mac'] == $_SESSION['rmac'])
	{
	include("../languages/".$_SESSION['adminlang'].".php");
	//include('../develops/homepage.php');
	if($_SESSION['adminlang'] == "ar")
	echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<?php include('../designs/head.php'); ?>
<script type="text/javascript" src="../js/homepage.js"></script>
</head>
<body>
<div class="container">
<?php include('../designs/containers/homepage.php'); ?>
<?php include('../designs/footer.php'); ?>
</div>
</body>
</html>
<?php
	} else echo header('location:../delete.php');
} else echo header('location:../');
?>