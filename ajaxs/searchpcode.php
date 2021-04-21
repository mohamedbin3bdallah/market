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
	if($_POST['str'] != '') parse_str($_POST['str'], $arr);
	else $arr['product'] = array();

	if(!in_array($pcode,$arr['product']))
	{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result0 = $dbh->query("select count(*) as count from sizes where product = '$pcode' and quantity > 0");
	$row0 = $result0->fetch();
	if($row0['count'] != 0)
	{
		$result1 = $dbh->query("select price from products where pcode = '$pcode'");
		$row1 = $result1->fetch();		
		?>
			<table class="table table-bordered">
				<tr><td colspan="2" class="info"><center><?php echo getProductTitleByCode($pcode); ?></center></td><td class="info"><center><?php echo str_replace($english, $arabic, $row1['price']).' ج م'; ?></td></center></tr>
				<tr><td colspan="3" class="info"><?php language('sizes'); ?></td></tr>
		<?php
		$result = $dbh->query("select * from sizes where product = '$pcode' and quantity > 0");
		if(!empty($result))
		{
			for($i=0; $row = $result->fetch(); $i++)
			{
				?>
					<tr>
						<td class="info"><?php echo $row['size']; ?></td>
						<td class="warning"><input type="hidden" name="size[]" value="<?php echo $row['size']; ?>"><input type="number" name="quantity[]" min="1" max="<?php echo $row['quantity']; ?>" title="يجب أن يكون العدد أقل من <?php echo $row['quantity']; ?> وأكبر من 1" maxlength="255" class="form-control" onkeyup="sizevalue('<?php echo $i; ?>',this.value,'<?php echo $row1['price']; ?>');" /></td>
						<td class="warning"><input type="hidden" name="total[]" id="total-<?php echo $i; ?>" value=""><div id="sizevalue-<?php echo $i; ?>"></div></td>
					</tr>					
				<?php
			}
		}
		echo '</table>';
	}
	else echo 0;
	include("../libs/closedb.php");
	}
	else echo 0;
	exit;
}
?>