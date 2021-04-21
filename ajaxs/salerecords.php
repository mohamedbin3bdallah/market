<?php
//include('../languages/ar.php');
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

if(isset($_POST['str']))
{
	parse_str($_POST['str'], $arr);
	for($i=0;$i<count($arr['size']);$i++)
	{
		if($arr['total'][$i] != '' && $arr['total'][$i] != 0)
		{
			$productname = getProductTitleByCode($arr['pcode']);
			echo '<tr id="tr-'.$arr['pcode'].$arr['size'][$i].'">';
			echo '<td>'.$productname.'<input type="hidden" name="product[]" value="'.$arr['pcode'].'"></td>';
			echo '<td>'.$arr['size'][$i].'<input type="hidden" name="size[]" value="'.$arr['size'][$i].'"></td>';
			echo '<td>'.str_replace($english, $arabic, $arr['quantity'][$i]).'<input type="hidden" name="quantity[]" value="'.$arr['quantity'][$i].'"></td>';
			echo '<td>'.str_replace($english, $arabic, $arr['total'][$i]).' ج م <input type="hidden" name="total[]" value="'.$arr['total'][$i].'"></td>';
			echo '<td><i id="'.$arr['pcode'].$arr['size'][$i].'" style="color:red;" class="salerecorddel glyphicon glyphicon-remove-circle"></i></td>';
			echo '</tr>';
			}
	}
}
?>
<script type="text/javascript">
$(document).ready(function(){
    $(".salerecorddel").click(function(){
		var id = $(this).attr('id');		
		document.getElementById("tr-"+id).remove();	
    });
});
</script>