<?php
include('../languages/ar.php');
$arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
$english = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

function getProductTitleByCode($pcode)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$resultpt = $dbh->query("select title from products where pcode = '$pcode'");
	$rowpt = $resultpt->fetch();				
	include("../libs/closedb.php");
	return $rowpt['title'];	
}

if(isset($_POST['pcode']))
{
	$pcode = $_POST['pcode'];
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result0 = $dbh->query("select count(*) as count from sales where product = '$pcode'");
	$row0 = $result0->fetch();
	if($row0['count'] != 0)
	{
		?>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="success"><td colspan="6"><center><?php echo getProductTitleByCode($pcode); ?></center></td></tr>
					<tr class="danger">
						<td><?php language('invoice'); ?></td>
						<td><?php language('size'); ?></td>
						<td><?php language('quantity'); ?></td>
						<td><?php language('total'); ?></td>
						<td><?php language('time'); ?></td>
						<td></td>
					</tr>
		<?php		
		$result = $dbh->query("select * from sales where product = '$pcode' order by time DESC , invoice ASC , size ASC");
		if(!empty($result))
		{		
			for($i=0; $row = $result->fetch(); $i++)
			{
				?>
					<tr class="warning">
						<td><?php echo $row['invoice']; ?></td>
						<td><?php echo $row['size']; ?></td>
						<td><?php echo str_replace($english, $arabic, $row['quantity']); ?></td>
						<td><?php echo str_replace($english, $arabic, $row['total']).' ج م'; ?></td>
						<td><?php echo str_replace($english, $arabic, $row['time']); ?></td>
						<td><a href="javascript:CallPrint('<?php echo $row['invoice']; ?>');"><?php language('show'); ?></a></td>
					</tr>					
				<?php
			}
		}
		?>
				</table>
			</div>
		<?php
	}
	else echo 0;
	include("../libs/closedb.php");
   exit;
}
elseif(isset($_POST['invoice']))
if(isset($_POST['invoice']))
{
	$invoice = $_POST['invoice'];
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result0 = $dbh->query("select count(*) as count from sales where invoice = '$invoice'");
	$row0 = $result0->fetch();
	if($row0['count'] != 0)
	{
		?>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="success"><td colspan="5"><center><a href="javascript:CallPrint('<?php echo $invoice; ?>');"><?php language('show'); ?></a></center></td></tr>
					<tr class="danger">
						<td><?php language('product'); ?></td>
						<td><?php language('size'); ?></td>
						<td><?php language('quantity'); ?></td>
						<td><?php language('total'); ?></td>
						<td><?php language('time'); ?></td>
					</tr>
		<?php
		$result = $dbh->query("select * from sales where invoice = '$invoice' order by time DESC , product ASC , size ASC");
		if(!empty($result))
		{		
			for($i=0; $row = $result->fetch(); $i++)
			{
				?>
					<tr class="warning">
						<td><?php echo getProductTitleByCode($row['product']); ?></td>
						<td><?php echo $row['size']; ?></td>
						<td><?php echo str_replace($english, $arabic, $row['quantity']); ?></td>
						<td><?php echo str_replace($english, $arabic, $row['total']).' ج م'; ?></td>
						<td><?php echo str_replace($english, $arabic, $row['time']); ?></td>
					</tr>
				<?php
			}
		}
		?>
				</table>
			</div>
		<?php
	}
	else echo 0;
	include("../libs/closedb.php");
   exit;
}
?>