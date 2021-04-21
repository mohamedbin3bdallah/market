$(document).ready(function(){
    $("#pcode").keyup(function(){
		var val = $(this).val();
		$.ajax({
			type: 'POST',
			url: '../ajaxs/searchpcode.php',
			data: {
				'pcode':val
			},
			success: function (response) {
				if(response != 0)
				{
					$("#savesale").removeAttr('disabled');
					document.getElementById("saleformrest").innerHTML = response;
				}
				else
				{
					$("#savesale").attr('disabled','disabled');
					document.getElementById("saleformrest").innerHTML = '';
				}
			}
		});
    });
});

function sizevalue(i,quantity,price)
{
	var total = quantity*price;
	document.getElementById('sizevalue-'+i).innerHTML = total;
	document.getElementById('total-'+i).value = total;
}