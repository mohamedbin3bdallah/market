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
window.location.href = "http://" + servername + "/market/pages/back.php"
}
</script>
<?php
if(isset($_SESSION['admin']))
{
	if(isset($_POST['saveback']))
	{
		unset($_POST['saveback']);
		include('../libs/back.php');
		for($i=0;$i<count($_POST['back']);$i++)
		{
			if($_POST['back'][$i]['total'] != '' && $_POST['back'][$i]['total'] != 0)
			{
				insertBack($_POST['back'][$i]['product'],$_POST['invoice'],$_POST['back'][$i]['size'],$_POST['back'][$i]['oldquantity'],$_POST['back'][$i]['quantity'],$_POST['back'][$i]['total']);
			}
		}
		$invoice = $_POST['invoice'];
		echo "<script> CallPrint('$invoice'); </script>";
		$servername = $_SERVER['HTTP_HOST'];
		echo "<script> move('$servername'); </script>";
		//header('location: back.php');
	}
}
else header('location: ../');
?>