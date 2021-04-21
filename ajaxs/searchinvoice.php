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

if(isset($_POST['invoice']))
{
	$invoice = $_POST['invoice'];
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result0 = $dbh->query("select count(*) as count from sales where invoice = '$invoice'");
	$row0 = $result0->fetch();
	if($row0['count'] != 0)
	{
		?><table class="table table-bordered">
			<tr>
				<td colspan="4" class="info"><?php language('olddata'); ?></td>
				<td colspan="2" class="info"><?php language('newdata'); ?></td>
			</tr>
			<tr>
				<td class="info"><?php language('product'); ?></td>
				<td class="info"><?php language('size'); ?></td>
				<td class="info"><?php language('quantity'); ?></td>
				<td class="info"><?php language('total'); ?></td>
				<td colspan="2" class="info"><?php language('quantity'); ?></td>
			</tr>
		<?php
		$result = $dbh->query("select * from sales where invoice = '$invoice' order by product ASC");
		if(!empty($result))
		{		
			for($i=0; $row = $result->fetch(); $i++)
			{
				?>
					<tr>
						<td class="info"><?php echo getProductTitleByCode($row['product']); ?><input type="hidden" name="back[<?php echo $i; ?>][product]" value="<?php echo $row['product']; ?>"></td>
						<td class="info"><?php echo $row['size']; ?><input type="hidden" name="back[<?php echo $i; ?>][size]" value="<?php echo $row['size']; ?>"></td>
						<td class="info"><?php echo str_replace($english, $arabic, $row['quantity']); ?><input type="hidden" name="back[<?php echo $i; ?>][oldquantity]" value="<?php echo $row['quantity']; ?>"></td>
						<td class="info"><?php echo str_replace($english, $arabic, $row['total']).' ج م'; ?><input type="hidden" name="back[<?php echo $i; ?>][total]" id="total-<?php echo $i; ?>" value=""></td>
						<td class="warning"><input type="number" name="back[<?php echo $i; ?>][quantity]" min="1" max="<?php echo $row['quantity']; ?>" title="يجب أن يكون العدد أقل من <?php echo $row['quantity']; ?> وأكبر من 0" maxlength="255" class="form-control" onkeyup="backvalue('<?php echo $i; ?>',this.value,'<?php echo $row['total']; ?>','<?php echo $row['quantity']; ?>','<?php echo $row0['count']; ?>');" /></td>
						<td class="warning"><div id="backvalue-<?php echo $i; ?>"></div></td>
					</tr>					
				<?php
			}
			?>
				<tr>
					<td colspan="5" class="info"><center><?php language('total'); ?></center></td>
					<td class="warning"><center><div id="backtotalvalue"></div></center></td>
				</tr>
			<?php
		}
		echo '</table>';
	}
	else echo 0;
	include("../libs/closedb.php");
   exit;
}
?>