$(document).ready(function(){
    $("#pcode").keyup(function(){
		var val = $(this).val();
		var str = $("#salerecordsform").serialize();
		$.ajax({
			type: 'POST',
			url: '../ajaxs/searchpcode.php',
			data: {
				'pcode':val,
				'str':str,
			},
			success: function (response) {
				if(response != 0)
				{
					$("#addsale").removeAttr('disabled');
					document.getElementById("saleformrest").innerHTML = response;
				}
				else
				{
					$("#addsale").attr('disabled','disabled');
					document.getElementById("saleformrest").innerHTML = '';
				}
			}
		});
    });
});

$(document).ready(function(){
    $("#addsale").click(function(){
	    var str = $("#productsearchform").serialize();
		$.ajax({
			type: 'POST',
			url: '../ajaxs/salerecords.php',
			data: {
				'str':str,
			},
			success: function (response) {
				if(response != 0)
				{
					$("#savesale").removeAttr('disabled');
					$("#salerecords").append(response);
					$("#addsale").attr('disabled','disabled');
					$("#pcode").val('');
					document.getElementById("saleformrest").innerHTML = '';
				}
				else
				{
					$("#savesale").attr('disabled','disabled');
					$("#addsale").attr('disabled','disabled');
					$("#pcode").val('');
					document.getElementById("saleformrest").innerHTML = '';					
				}
			}
		});
    });
});

/*$(document).ready(function(){
function salerecorddel(id)
{
	$("#tr-"+id).hide();
}
});*/

/*$(document).ready(function(){
    $(".salerecorddel").click(function(){
		var id = $(this).attr('id');
		//document.getElementById("tr-"+id).innerHTML = '';
		//$("#tr-"+id).hide();
		document.getElementById("tr-"+id).remove();
		//$(this).parent('tr').hide();
    });
});*/

function sizevalue(i,quantity,price)
{
	var total = quantity*price;
	document.getElementById('total-'+i).value = total;
	document.getElementById('sizevalue-'+i).innerHTML = total+' ج م';

}