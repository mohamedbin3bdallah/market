<script>
function CallPrint(invoice) {
    var prtContent = document.getElementById('printinvoice');
    var WinPrint = window.open('invoice.php?invoice='+invoice, '', 'width=800,height=650,scrollbars=1,menuBar=1');
    var str =  prtContent.innerHTML;
    WinPrint.document.write(str);
    WinPrint.document.close();
    WinPrint.focus();
}
</script>
<script language="JavaScript">
function move(servername) {
window.location.href = "http://" + servername + "/market/pages/sale.php"
}
</script>
<?php
if(isset($_SESSION['admin']))
{
	include('../libs/sale.php');
	if(isset($_POST['savesale']))
	{
		unset($_POST['savesale']);
		$invoice = uniqid();
		for($i=0;$i<count($_POST['product']);$i++)
		{
			insertSale($_POST['product'][$i],$invoice,$_POST['size'][$i],$_POST['quantity'][$i],$_POST['total'][$i]);
		}
		echo "<script> CallPrint('$invoice'); </script>";
		$servername = $_SERVER['HTTP_HOST'];
		echo "<script> move('$servername'); </script>";
		//header('location: sale.php');
	}
}
else header('location: ../');
?>