<?php
include('../languages/ar.php');
if(isset($_POST['pcode']))
{	
	$pcode = $_POST['pcode'];
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result0 = $dbh->query("select count(*) as count from sizes where product = '$pcode' and quantity > 1");
	$row0 = $result0->fetch();
	if($row0['count'] != 0)
	{
		$result1 = $dbh->query("select price from products where pcode = '$pcode'");
		$row1 = $result1->fetch();
		?><table class="table table-bordered"><tr><td colspan="3" class="info"><?php language('sizes'); ?></td></tr><?php
		$result = $dbh->query("select * from sizes where product = '$pcode' and quantity > 1");
		if(!empty($result))
		{		
			for($i=0; $row = $result->fetch(); $i++)
			{
				?>
					<tr>
						<td class="info"><?php echo $row['size']; ?></td>
						<td class="warning"><input type="hidden" name="sale[<?php echo $i; ?>][size]" value="<?php echo $row['size']; ?>"><input type="number" name="sale[<?php echo $i; ?>][quantity]" min="1" max="<?php echo $row['quantity']; ?>" title="يجب أن يكون العدد أقل من <?php echo $row['quantity']; ?> وأكبر من 1" maxlength="255" class="form-control" onkeyup="sizevalue('<?php echo $i; ?>',this.value,'<?php echo $row1['price']; ?>');" /></td>
						<td class="warning"><input type="hidden" name="sale[<?php echo $i; ?>][total]" id="total-<?php echo $i; ?>" value=""><div id="sizevalue-<?php echo $i; ?>"></div></td>
					</tr>					
				<?php
			}
		}
		echo '</table>';
	}
	else echo 0;
	include("../libs/closedb.php");
   exit;
}
?>