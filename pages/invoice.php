<?php
session_start();
if(isset($_SESSION['admin']))
{
	if(isset($_SESSION['mac'], $_SESSION['rmac']) && $_SESSION['mac'] == $_SESSION['rmac'])
	{
		if(isset($_GET['invoice']) && $_GET['invoice'] != '')
		{
			include("../languages/".$_SESSION['adminlang'].".php");
			if($_SESSION['adminlang'] == "ar")
			echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">';
		
			$arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
			$english = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');			
			
			function getProductTitleByCode($pcode)
			{
				include("../libs/config.php");
				include("../libs/opendb.php");
				$result = $dbh->query("select title from products where pcode = '$pcode'");
				$row = $result->fetch();				
				include("../libs/closedb.php");
				return $row['title'];	
			}
			
			include("../libs/config.php");
			include("../libs/opendb.php");
			$invoice = $_GET['invoice'];
			$result = $dbh->query("select * from invoices where invoice = '$invoice' order by product ASC , size ASC");
			$invoicerecords = array();
			if(!empty($result))
			{
				for($i=0; $row = $result->fetch(); $i++)
				{
					$invoicerecords['id'][$i] = $row['id'];
					$invoicerecords['product'][$i] = $row['product'];
					$invoicerecords['size'][$i] = $row['size'];
					$invoicerecords['quantity'][$i] = $row['quantity'];
					$invoicerecords['total'][$i] = $row['total'];
					$invoicerecords['time'][$i] = $row['time'];					
				}
				
				$result1 = $dbh->query("select * from backs where invoice = '$invoice' order by product ASC , size ASC");
				$backrecords = array();
				if(!empty($result1))
				{
					for($k=0; $row1 = $result1->fetch(); $k++)
					{
						$backrecords['id'][$k] = $row1['id'];
						$backrecords['product'][$k] = $row1['product'];
						$backrecords['size'][$k] = $row1['size'];
						$backrecords['quantity'][$k] = $row1['quantity'];
						$backrecords['total'][$k] = $row1['total'];
						$backrecords['time'][$k] = $row1['time'];					
					}
				}
				
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<?php include('../designs/head.php'); ?>
<style type="text/css">
@media print{
  body{ background-color:#FFFFFF; background-image:none; color:#000000 }
  #ad{ display:none;}
  #leftbar{ display:none;}
  #contentarea{ width:100%;}
}
</style>
</head>
<body>
<div class="container">
		<div id="printinvoice">
			<table class="table table-bordered">
					<tr>
						<td colspan="5"><center>شركة الياس</center></td>
					</tr>
					<tr>
						<td colspan="2"><center><?php language('invoice').language(' ').language('number'); ?></center></td>
						<td colspan="3"><center><?php echo $invoice; ?></center></td>
					</tr>
					<tr>
						<td colspan="2"><center><?php language('day').language('/').language('time'); ?></center></td>
						<td colspan="3"><center><?php echo str_replace($english, $arabic, $invoicerecords['time'][0]); ?></center></td>
					</tr>
					<tr>
						<td colspan="2"><center><?php language('product'); ?></center></td>
						<td><center><?php language('size'); ?></center></td>
						<td><center><?php language('quantity'); ?></center></td>
						<td><center><?php language('total'); ?></center></td>
					</tr>
					<?php for($j=0;$j<count($invoicerecords['id']);$j++) { ?>
					<tr>
						<td colspan="2"><?php echo getProductTitleByCode($invoicerecords['product'][$j]); ?></td>
						<td><center><?php echo $invoicerecords['size'][$j]; ?></center></td>
						<td><center><?php echo str_replace($english, $arabic, $invoicerecords['quantity'][$j]); ?></center></td>
						<td><center><?php echo str_replace($english, $arabic, $invoicerecords['total'][$j]).'ج'; ?></center></td>
					</tr>
					<?php } ?>
					<tr>
						<td colspan="2"><center><?php language('total'); ?></center></td>
						<td colspan="3"><center><?php echo str_replace($english, $arabic, array_sum($invoicerecords['total'])).'ج'; ?></center></td>
					</tr>
					<?php if(!empty($backrecords)) { ?>
					<tr>
						<td colspan="5"><center><?php language('backs'); ?></center></td>						
					</tr>
					<tr>
						<td><center><?php language('product'); ?></center></td>
						<td><center><?php language('time'); ?></center></td>
						<td><center><?php language('size'); ?></center></td>
						<td><center><?php language('quantity'); ?></center></td>
						<td><center><?php language('total'); ?></center></td>
					</tr>
					<?php for($m=0;$m<count($backrecords['id']);$m++) { ?>
					<tr>
						<td><?php echo getProductTitleByCode($backrecords['product'][$m]); ?></td>
						<td><center><?php echo str_replace($english, $arabic, $backrecords['time'][$m]); ?><center></td>						
						<td><center><?php echo $backrecords['size'][$m]; ?></center></td>
						<td><center><?php echo str_replace($english, $arabic, $backrecords['quantity'][$m]); ?></center></td>
						<td><center><?php echo str_replace($english, $arabic, $backrecords['total'][$m]).'ج'; ?></center></td>
					</tr>
					<?php } ?>
					<tr>
						<td colspan="2"><center><?php language('total'); ?></center></td>
						<td colspan="3"><center><?php echo str_replace($english, $arabic, array_sum($backrecords['total'])).'ج'; ?></center></td>
					</tr>
					<tr>
						<td colspan="2"><center><?php language('invoicetotal'); ?></center></td>
						<td colspan="3"><center><?php echo str_replace($english, $arabic, (array_sum($invoicerecords['total'])-array_sum($backrecords['total']))).'ج'; ?></center></td>
					</tr>
					<?php } ?>
				</table>
		</div>
		<!--<input type="button" value="<?php language('print'); ?>" onclick="window.print();">-->
</div>
</body>
</html>
<?php
				echo "<script> window.print(); </script>";
			} else echo "<script> window.close(); </script>";
		} else echo "<script> window.close(); </script>";
	} else echo header('location:../delete.php');
} else echo header('location:../');
?>