 $(document).ready(function(){
    $("#invoice").keyup(function(){
		var val = $(this).val();
		$.ajax({
			type: 'POST',
			url: '../ajaxs/searchinvoice.php',
			data: {
				'invoice':val
			},
			success: function (response) {
				if(response != 0)
				{
					$("#saveback").removeAttr('disabled');
					document.getElementById("backformrest").innerHTML = response;
				}
				else
				{
					$("#saveback").attr('disabled','disabled');
					document.getElementById("backformrest").innerHTML = '';
				}
			}
		});
    });
});

function backvalue(i,back,total,quantity,count)
{
	var price = total/quantity;
	var backvalue = price*back;
	document.getElementById('backvalue-'+i).innerHTML = backvalue+' ج م';
	document.getElementById('total-'+i).value = backvalue;
	
	var count = count;
	var sum = 0;
	for(var k=0;k<count;k++)
	{
		sum = sum + Number($('#total-'+k).val());
	}
	document.getElementById('backtotalvalue').innerHTML = sum+' ج م';
}