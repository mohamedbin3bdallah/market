<?php
if(isset($_POST['path'],$_POST['thumpath']))
{	
	unlink($_POST['path']);
	unlink($_POST['thumpath']);	
   exit;
}
?>